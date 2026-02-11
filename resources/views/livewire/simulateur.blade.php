<?php

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Simulation;

new class extends Component
{
    // Etape courante (1-5)
    public int $step = 1;

    // Simulation sauvegardee
    public ?Simulation $simulation = null;

    // Etape 1 : Le bien
    public ?int $prixBien = 200000;
    public string $typeBien = 'neuf';
    public ?int $surface = 45;

    // Etape 2 : Niveau de loyer
    public string $niveauLoyer = 'social';

    // Etape 3 : Situation fiscale
    public int $tmi = 30;

    // Etape 4 : Coordonnees
    public string $prenom = '';
    public string $nom = '';
    public string $email = '';
    public bool $accepteContact = false;

    // Resultats calcules
    public array $resultats = [];

    // Email envoye
    public bool $emailEnvoye = false;

    // Taux d'amortissement par niveau (neuf)
    protected array $tauxNeuf = [
        'intermediaire' => 0.035,
        'social' => 0.045,
        'tres_social' => 0.055,
    ];

    // Taux d'amortissement par niveau (renove)
    protected array $tauxRenove = [
        'intermediaire' => 0.030,
        'social' => 0.040,
        'tres_social' => 0.045,
    ];

    // Plafonds annuels par niveau
    protected array $plafonds = [
        'intermediaire' => 8000,
        'social' => 10000,
        'tres_social' => 12000,
    ];

    protected $rules = [
        'prenom' => 'required|min:2',
        'nom' => 'required|min:2',
        'email' => 'required|email',
        'accepteContact' => 'accepted',
    ];

    protected $messages = [
        'prenom.required' => 'Le prénom est requis.',
        'nom.required' => 'Le nom est requis.',
        'email.required' => 'L\'email est requis.',
        'email.email' => 'L\'email n\'est pas valide.',
        'accepteContact.accepted' => 'Vous devez accepter d\'être contacté.',
    ];

    public function nextStep(): void
    {
        if ($this->step === 4) {
            $this->validate();
            $this->calculer();
            $this->sauvegarderSimulation();
            $this->envoyerEmailAvecPdf();
            $this->step = 5;
        } elseif ($this->step < 5) {
            $this->step++;
        }
    }

    public function sauvegarderSimulation(): void
    {
        $taux = $this->typeBien === 'neuf'
            ? $this->tauxNeuf[$this->niveauLoyer]
            : $this->tauxRenove[$this->niveauLoyer];

        $this->simulation = Simulation::create([
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'email' => $this->email,
            'accepte_contact' => $this->accepteContact,
            'prix_bien' => $this->prixBien,
            'type_bien' => $this->typeBien,
            'surface' => $this->surface,
            'niveau_loyer' => $this->niveauLoyer,
            'tmi' => $this->tmi,
            'base_amortissable' => $this->resultats['baseAmortissable'],
            'taux_amortissement' => $taux,
            'amortissement_brut' => $this->resultats['amortissementBrut'],
            'plafond' => $this->resultats['plafond'],
            'est_plafonne' => $this->resultats['estPlafonne'],
            'amortissement_annuel' => $this->resultats['amortissementAnnuel'],
            'economie_annuelle' => $this->resultats['economieAnnuelle'],
            'economie_totale' => $this->resultats['economieTotale'],
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
        ]);
    }

    public function previousStep(): void
    {
        if ($this->step > 1) {
            $this->step--;
        }
    }

    public function goToStep(int $step): void
    {
        if ($step >= 1 && $step <= $this->step && $step <= 5) {
            $this->step = $step;
        }
    }

    public function calculer(): void
    {
        $baseAmortissable = $this->prixBien * 0.80;

        $taux = $this->typeBien === 'neuf'
            ? $this->tauxNeuf[$this->niveauLoyer]
            : $this->tauxRenove[$this->niveauLoyer];

        $amortissementBrut = $baseAmortissable * $taux;
        $plafond = $this->plafonds[$this->niveauLoyer];
        $amortissementAnnuel = min($amortissementBrut, $plafond);
        $economieAnnuelle = $amortissementAnnuel * ($this->tmi / 100);
        $economieTotale = $economieAnnuelle * 9;

        $this->resultats = [
            'baseAmortissable' => $baseAmortissable,
            'taux' => $taux * 100,
            'amortissementBrut' => $amortissementBrut,
            'plafond' => $plafond,
            'amortissementAnnuel' => $amortissementAnnuel,
            'economieAnnuelle' => $economieAnnuelle,
            'economieTotale' => $economieTotale,
            'estPlafonne' => $amortissementBrut > $plafond,
        ];
    }

    public function genererPdf(): string
    {
        $data = [
            'prenom' => $this->prenom,
            'nom' => $this->nom,
            'email' => $this->email,
            'prixBien' => $this->prixBien,
            'typeBien' => $this->typeBien,
            'surface' => $this->surface,
            'niveauLoyer' => $this->niveauLoyer,
            'tmi' => $this->tmi,
            'resultats' => $this->resultats,
            'date' => now()->format('d/m/Y'),
        ];

        $pdf = Pdf::loadView('pdf.simulation', $data);
        return $pdf->output();
    }

    public function envoyerEmailAvecPdf(): void
    {
        try {
            $pdfContent = $this->genererPdf();
            $nomFichier = 'simulation-bailleur-prive-' . now()->format('Y-m-d') . '.pdf';

            // Email a l'utilisateur
            Mail::send([], [], function ($message) use ($pdfContent, $nomFichier) {
                $message->to($this->email, $this->prenom . ' ' . $this->nom)
                    ->subject('Votre simulation Bailleur Prive - ' . number_format($this->resultats['economieTotale'], 0, ',', ' ') . ' EUR d\'economies')
                    ->html($this->getEmailHtmlUtilisateur())
                    ->attachData($pdfContent, $nomFichier, ['mime' => 'application/pdf']);
            });

            // Email a l'admin
            Mail::send([], [], function ($message) use ($pdfContent, $nomFichier) {
                $message->to(config('mail.from.address', 'contact@bailleurprive.io'))
                    ->subject('Nouvelle simulation - ' . $this->prenom . ' ' . $this->nom)
                    ->html($this->getEmailHtmlAdmin())
                    ->replyTo($this->email, $this->prenom . ' ' . $this->nom)
                    ->attachData($pdfContent, $nomFichier, ['mime' => 'application/pdf']);
            });

            $this->emailEnvoye = true;
        } catch (\Exception $e) {
            \Log::error('Erreur envoi email simulation: ' . $e->getMessage());
        }
    }

    protected function getEmailHtmlUtilisateur(): string
    {
        $niveauLabel = ucfirst(str_replace('_', ' ', $this->niveauLoyer));
        $typeBienLabel = $this->typeBien === 'neuf' ? 'Neuf RE2020' : 'Ancien rénové';

        return "
        <div style=\"font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px; color: #18181b;\">
            <div style=\"text-align: center; padding: 20px 0; border-bottom: 2px solid #18181b;\">
                <h1 style=\"color: #18181b; margin: 0; font-size: 24px;\">BailleurPrive.io</h1>
                <p style=\"color: #71717a; margin: 5px 0 0; font-size: 14px;\">Votre simulation fiscale personnalisée</p>
            </div>

            <div style=\"padding: 30px 0;\">
                <p style=\"font-size: 16px; margin-bottom: 20px;\">Bonjour <strong>{$this->prenom}</strong>,</p>

                <p style=\"color: #52525b; line-height: 1.6;\">
                    Merci pour votre intérêt pour le Statut du Bailleur Privé ! Vous trouverez ci-joint votre simulation détaillée en PDF.
                </p>

                <div style=\"background: #18181b; color: white; padding: 30px; text-align: center; margin: 30px 0; border-radius: 12px;\">
                    <p style=\"margin: 0 0 8px; color: #a1a1aa; font-size: 14px;\">Votre économie estimée sur 9 ans</p>
                    <p style=\"margin: 0; font-size: 36px; font-weight: bold;\">" . number_format($this->resultats['economieTotale'], 0, ',', ' ') . " EUR</p>
                </div>

                <h3 style=\"color: #18181b; border-bottom: 1px solid #e4e4e7; padding-bottom: 10px; margin-top: 30px;\">Récapitulatif de votre projet</h3>

                <table style=\"width: 100%; border-collapse: collapse; margin-top: 15px;\">
                    <tr>
                        <td style=\"padding: 12px 0; color: #52525b; border-bottom: 1px solid #f4f4f5;\">Prix du bien</td>
                        <td style=\"padding: 12px 0; font-weight: 600; text-align: right; border-bottom: 1px solid #f4f4f5;\">" . number_format($this->prixBien, 0, ',', ' ') . " EUR</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px 0; color: #52525b; border-bottom: 1px solid #f4f4f5;\">Type de bien</td>
                        <td style=\"padding: 12px 0; font-weight: 600; text-align: right; border-bottom: 1px solid #f4f4f5;\">{$typeBienLabel}</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px 0; color: #52525b; border-bottom: 1px solid #f4f4f5;\">Surface</td>
                        <td style=\"padding: 12px 0; font-weight: 600; text-align: right; border-bottom: 1px solid #f4f4f5;\">{$this->surface} m2</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px 0; color: #52525b; border-bottom: 1px solid #f4f4f5;\">Niveau de loyer</td>
                        <td style=\"padding: 12px 0; font-weight: 600; text-align: right; border-bottom: 1px solid #f4f4f5;\">{$niveauLabel}</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px 0; color: #52525b; border-bottom: 1px solid #f4f4f5;\">Taux d'amortissement</td>
                        <td style=\"padding: 12px 0; font-weight: 600; text-align: right; border-bottom: 1px solid #f4f4f5;\">{$this->resultats['taux']}%</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px 0; color: #52525b; border-bottom: 1px solid #f4f4f5;\">Votre TMI</td>
                        <td style=\"padding: 12px 0; font-weight: 600; text-align: right; border-bottom: 1px solid #f4f4f5;\">{$this->tmi}%</td>
                    </tr>
                    <tr style=\"background: #f4f4f5;\">
                        <td style=\"padding: 12px; color: #18181b; font-weight: 600;\">Économie annuelle</td>
                        <td style=\"padding: 12px; font-weight: 700; text-align: right; font-size: 18px;\">" . number_format($this->resultats['economieAnnuelle'], 0, ',', ' ') . " EUR</td>
                    </tr>
                </table>

                <div style=\"background: #fef3c7; border-left: 4px solid #f59e0b; padding: 15px; margin: 30px 0; font-size: 13px; color: #92400e;\">
                    <strong>Important :</strong> Cette simulation est indicative. Nous vous recommandons de consulter un professionnel pour valider votre projet.
                </div>

                <p style=\"color: #52525b; line-height: 1.6;\">
                    Vous avez accepté d'être recontacté. Notre équipe reviendra vers vous prochainement pour discuter de votre projet d'investissement.
                </p>

                <div style=\"text-align: center; margin: 30px 0;\">
                    <a href=\"https://bailleurprive.io/contact\" style=\"display: inline-block; background: #18181b; color: white; padding: 14px 35px; text-decoration: none; font-weight: 600; border-radius: 8px;\">Prendre rendez-vous</a>
                </div>
            </div>

            <div style=\"border-top: 1px solid #e4e4e7; padding-top: 20px; text-align: center; color: #71717a; font-size: 12px;\">
                <p style=\"margin: 0;\"><strong>BailleurPrive.io</strong></p>
                <p style=\"margin: 5px 0;\">Plateforme d'information sur le Statut du Bailleur Prive</p>
                <p style=\"margin: 5px 0;\">Dispositif fiscal 2026-2028</p>
            </div>
        </div>";
    }

    protected function getEmailHtmlAdmin(): string
    {
        $niveauLabel = ucfirst(str_replace('_', ' ', $this->niveauLoyer));
        $typeBienLabel = $this->typeBien === 'neuf' ? 'Neuf RE2020' : 'Ancien rénové';

        return "
        <div style=\"font-family: Arial, sans-serif; max-width: 600px; margin: 0 auto; padding: 20px;\">
            <div style=\"background: #18181b; color: white; padding: 25px; text-align: center; border-radius: 12px 12px 0 0;\">
                <h1 style=\"margin: 0; font-size: 22px;\">Nouvelle simulation</h1>
                <p style=\"margin: 8px 0 0; color: #a1a1aa; font-size: 14px;\">Un prospect a complété le simulateur</p>
            </div>

            <div style=\"padding: 25px; background: #f4f4f5; border-radius: 0 0 12px 12px;\">
                <h2 style=\"color: #18181b; margin: 0 0 15px; font-size: 18px;\">Contact</h2>
                <table style=\"width: 100%; background: white; border-collapse: collapse; border-radius: 8px; overflow: hidden;\">
                    <tr>
                        <td style=\"padding: 14px; border-bottom: 1px solid #e4e4e7; color: #52525b; width: 40%;\">Nom</td>
                        <td style=\"padding: 14px; border-bottom: 1px solid #e4e4e7; font-weight: 600;\">{$this->prenom} {$this->nom}</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 14px; border-bottom: 1px solid #e4e4e7; color: #52525b;\">Email</td>
                        <td style=\"padding: 14px; border-bottom: 1px solid #e4e4e7; font-weight: 600;\"><a href=\"mailto:{$this->email}\" style=\"color: #18181b;\">{$this->email}</a></td>
                    </tr>
                    <tr>
                        <td style=\"padding: 14px; color: #52525b;\">Consentement</td>
                        <td style=\"padding: 14px; font-weight: 600; color: #16a34a;\">Accepte d'être contacté</td>
                    </tr>
                </table>

                <h2 style=\"color: #18181b; margin: 25px 0 15px; font-size: 18px;\">Simulation</h2>
                <table style=\"width: 100%; background: white; border-collapse: collapse; border-radius: 8px; overflow: hidden;\">
                    <tr>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; color: #52525b;\">Prix du bien</td>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; font-weight: 600; text-align: right;\">" . number_format($this->prixBien, 0, ',', ' ') . " EUR</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; color: #52525b;\">Type</td>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; font-weight: 600; text-align: right;\">{$typeBienLabel}</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; color: #52525b;\">Surface</td>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; font-weight: 600; text-align: right;\">{$this->surface} m2</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; color: #52525b;\">Niveau loyer</td>
                        <td style=\"padding: 12px; border-bottom: 1px solid #e4e4e7; font-weight: 600; text-align: right;\">{$niveauLabel}</td>
                    </tr>
                    <tr>
                        <td style=\"padding: 12px; color: #52525b;\">TMI</td>
                        <td style=\"padding: 12px; font-weight: 600; text-align: right;\">{$this->tmi}%</td>
                    </tr>
                </table>

                <div style=\"background: #18181b; color: white; padding: 20px; text-align: center; margin-top: 20px; border-radius: 8px;\">
                    <p style=\"margin: 0 0 5px; color: #a1a1aa; font-size: 12px;\">Économie sur 9 ans</p>
                    <p style=\"margin: 0; font-size: 28px; font-weight: bold;\">" . number_format($this->resultats['economieTotale'], 0, ',', ' ') . " EUR</p>
                </div>

                <div style=\"background: #dbeafe; border-left: 4px solid #3b82f6; padding: 15px; margin-top: 20px; border-radius: 4px;\">
                    <p style=\"margin: 0; color: #1e40af; font-size: 14px;\">
                        <strong>Action :</strong> Recontacter ce prospect sous 24-48h
                    </p>
                </div>
            </div>
        </div>";
    }

    public function recommencer(): void
    {
        $this->step = 1;
        $this->prixBien = 200000;
        $this->typeBien = 'neuf';
        $this->surface = 45;
        $this->niveauLoyer = 'social';
        $this->tmi = 30;
        $this->prenom = '';
        $this->nom = '';
        $this->email = '';
        $this->accepteContact = false;
        $this->resultats = [];
        $this->emailEnvoye = false;
        $this->simulation = null;
    }
};
?>

<div class="max-w-4xl mx-auto">
    {{-- Progress Steps --}}
    <div class="mb-8">
        <div class="flex items-center justify-between">
            @foreach([1 => 'Le bien', 2 => 'Loyer', 3 => 'Fiscalité', 4 => 'Contact', 5 => 'Résultats'] as $num => $label)
                <div class="flex items-center {{ $num < 5 ? 'flex-1' : '' }}">
                    <button
                        wire:click="goToStep({{ $num }})"
                        class="flex items-center gap-2 {{ $step >= $num ? 'text-zinc-900' : 'text-zinc-400' }}"
                        @if($num > $step) disabled @endif
                    >
                        <div class="size-8 rounded-full flex items-center justify-center text-sm font-bold transition-colors
                            {{ $step > $num ? 'bg-zinc-900 text-white' : ($step === $num ? 'bg-zinc-900 text-white' : 'bg-zinc-200 text-zinc-500') }}">
                            @if($step > $num)
                                <flux:icon.check class="size-4" />
                            @else
                                {{ $num }}
                            @endif
                        </div>
                        <span class="hidden lg:block text-sm font-medium">{{ $label }}</span>
                    </button>
                    @if($num < 5)
                        <div class="flex-1 h-0.5 mx-2 lg:mx-4 {{ $step > $num ? 'bg-zinc-900' : 'bg-zinc-200' }}"></div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    {{-- Step Content --}}
    <div class="bg-white rounded-3xl border border-zinc-200 p-8">

        {{-- Etape 1: Le bien --}}
        @if($step === 1)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Informations sur le bien</h2>
                <p class="text-zinc-600 mb-8">Renseignez les caractéristiques de votre investissement immobilier.</p>

                <div class="space-y-6">
                    <div>
                        <label for="prixBien" class="block text-sm font-medium text-zinc-700 mb-2">Prix d'achat du bien</label>
                        <div class="relative">
                            <input type="number" id="prixBien" wire:model.live.number="prixBien" min="50000" max="1000000" step="5000"
                                class="w-full px-4 py-3 pr-12 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-lg text-zinc-900" placeholder="200000">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-zinc-500 font-medium">EUR</span>
                        </div>
                        <input type="range" wire:model.live.number="prixBien" min="50000" max="1000000" step="5000" class="w-full mt-3 accent-zinc-900 h-2 cursor-pointer">
                        <div class="flex justify-between text-xs text-zinc-500 mt-1">
                            <span>50 000 EUR</span>
                            <span>1 000 000 EUR</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 mb-3">Type de bien</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="cursor-pointer">
                                <input type="radio" wire:model.live="typeBien" value="neuf" class="peer sr-only">
                                <div class="p-4 border-2 rounded-xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-50 border-zinc-200 hover:border-zinc-300">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-xl bg-zinc-100 flex items-center justify-center">
                                            <flux:icon.building-office class="size-5 text-zinc-700" />
                                        </div>
                                        <div>
                                            <div class="font-semibold text-zinc-900">Neuf RE2020</div>
                                            <div class="text-xs text-zinc-500">Taux jusqu'à 5,5%</div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" wire:model.live="typeBien" value="renove" class="peer sr-only">
                                <div class="p-4 border-2 rounded-xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-50 border-zinc-200 hover:border-zinc-300">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-xl bg-zinc-100 flex items-center justify-center">
                                            <flux:icon.wrench-screwdriver class="size-5 text-zinc-700" />
                                        </div>
                                        <div>
                                            <div class="font-semibold text-zinc-900">Ancien rénové</div>
                                            <div class="text-xs text-zinc-500">Taux de 3% à 4%</div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="surface" class="block text-sm font-medium text-zinc-700 mb-2">Surface (m2)</label>
                        <input type="number" id="surface" wire:model.live="surface" min="9" max="500"
                            class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="45">
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 2: Niveau de loyer --}}
        @if($step === 2)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Niveau de loyer</h2>
                <p class="text-zinc-600 mb-8">Plus le loyer est accessible, plus votre avantage fiscal est important.</p>

                <div class="space-y-4">
                    @php
                        $niveaux = [
                            'intermediaire' => ['label' => 'Intermédiaire', 'taux' => $typeBien === 'neuf' ? '3,5%' : '3%', 'plafond' => '8 000', 'desc' => 'Loyers légèrement sous le marché', 'public' => 'Revenus moyens'],
                            'social' => ['label' => 'Social', 'taux' => $typeBien === 'neuf' ? '4,5%' : '4%', 'plafond' => '10 000', 'desc' => 'Loyers conventionnés sociaux', 'public' => 'Revenus modestes', 'recommended' => true],
                            'tres_social' => ['label' => 'Très social', 'taux' => $typeBien === 'neuf' ? '5,5%' : '4,5%', 'plafond' => '12 000', 'desc' => 'Loyers très accessibles', 'public' => 'Revenus très modestes'],
                        ];
                    @endphp

                    @foreach($niveaux as $key => $niveau)
                        <label class="cursor-pointer block">
                            <input type="radio" wire:model.live="niveauLoyer" value="{{ $key }}" class="peer sr-only">
                            <div class="p-6 border-2 rounded-2xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-50 border-zinc-200 hover:border-zinc-300 relative">
                                @if(isset($niveau['recommended']))
                                    <span class="absolute -top-3 right-4 px-3 py-1 bg-zinc-900 text-white text-xs font-medium rounded-full">Recommandé</span>
                                @endif
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="text-center">
                                            <div class="text-3xl font-bold text-zinc-900">{{ $niveau['taux'] }}</div>
                                            <div class="text-xs text-zinc-500">par an</div>
                                        </div>
                                        <div class="h-12 w-px bg-zinc-200"></div>
                                        <div>
                                            <div class="font-semibold text-zinc-900">{{ $niveau['label'] }}</div>
                                            <div class="text-sm text-zinc-600">{{ $niveau['desc'] }}</div>
                                        </div>
                                    </div>
                                    <div class="text-right hidden sm:block">
                                        <div class="text-sm font-semibold text-zinc-900">Plafond {{ $niveau['plafond'] }} EUR/an</div>
                                        <div class="text-xs text-zinc-500">{{ $niveau['public'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>

                <div class="mt-6 p-4 bg-blue-50 rounded-xl border border-blue-200">
                    <div class="flex items-start gap-3">
                        <flux:icon.information-circle class="size-5 text-blue-600 shrink-0 mt-0.5" />
                        <p class="text-sm text-blue-800"><strong>Bon à savoir :</strong> Plus votre loyer est bas, plus votre avantage fiscal est important. C'est gagnant-gagnant !</p>
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 3: Situation fiscale --}}
        @if($step === 3)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Votre situation fiscale</h2>
                <p class="text-zinc-600 mb-8">Sélectionnez votre Tranche Marginale d'Imposition (TMI).</p>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-zinc-700 mb-3">Tranche Marginale d'Imposition</label>
                        <div class="grid grid-cols-2 sm:grid-cols-5 gap-3">
                            @foreach([0, 11, 30, 41, 45] as $tranche)
                                <label class="cursor-pointer">
                                    <input type="radio" wire:model.live="tmi" value="{{ $tranche }}" class="peer sr-only">
                                    <div class="p-4 text-center border-2 rounded-xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-900 peer-checked:text-white border-zinc-200 hover:border-zinc-300 text-zinc-900">
                                        <div class="text-2xl font-bold">{{ $tranche }}%</div>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-4 bg-zinc-100 rounded-xl">
                        <h4 class="font-semibold text-zinc-900 mb-3">Comment connaître votre TMI ?</h4>
                        <p class="text-sm text-zinc-600 mb-3">Votre TMI dépend de votre revenu imposable annuel :</p>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-sm text-zinc-900">
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">0%</span> : jusqu'à 11 294 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">11%</span> : 11 295 - 28 797 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">30%</span> : 28 798 - 82 341 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">41%</span> : 82 342 - 177 106 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">45%</span> : au-delà de 177 106 EUR</div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 4: Coordonnees --}}
        @if($step === 4)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Vos coordonnées</h2>
                <p class="text-zinc-600 mb-8">Recevez votre simulation détaillée en PDF par email.</p>

                <div class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-zinc-700 mb-2">Prénom <span class="text-red-500">*</span></label>
                            <input type="text" id="prenom" wire:model="prenom" class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="Votre prénom">
                            @error('prenom')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="nom" class="block text-sm font-medium text-zinc-700 mb-2">Nom <span class="text-red-500">*</span></label>
                            <input type="text" id="nom" wire:model="nom" class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="Votre nom">
                            @error('nom')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-zinc-700 mb-2">Adresse email <span class="text-red-500">*</span></label>
                        <input type="email" id="email" wire:model="email" class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="votre@email.com">
                        @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        <p class="mt-2 text-xs text-zinc-500">Vous recevrez votre simulation en PDF à cette adresse.</p>
                    </div>

                    <div class="p-4 bg-zinc-50 rounded-xl border border-zinc-200">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" wire:model="accepteContact" class="mt-1 size-5 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-900">
                            <div>
                                <span class="text-sm text-zinc-700 font-medium">J'accepte d'être contacté <span class="text-red-500">*</span></span>
                                <p class="text-xs text-zinc-500 mt-1">En cochant cette case, vous acceptez de recevoir votre simulation par email et d'être recontacté concernant votre projet.</p>
                            </div>
                        </label>
                        @error('accepteContact')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 5: Resultats --}}
        @if($step === 5)
            <div>
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center size-16 rounded-full bg-green-100 mb-4">
                        <flux:icon.check class="size-8 text-green-600" />
                    </div>
                    <h2 class="text-2xl font-bold text-zinc-900 mb-2">Vos résultats, {{ $prenom }} !</h2>
                    <p class="text-zinc-600">Voici l'estimation de vos économies d'impôts avec le Statut du Bailleur Privé.</p>
                </div>

                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="bg-zinc-900 rounded-2xl p-6 text-center text-white">
                        <div class="text-sm text-zinc-400 mb-1">Économie annuelle</div>
                        <div class="text-4xl font-bold">{{ number_format($resultats['economieAnnuelle'] ?? 0, 0, ',', ' ') }} EUR</div>
                    </div>
                    <div class="bg-gradient-to-br from-zinc-900 to-zinc-700 rounded-2xl p-6 text-center text-white">
                        <div class="text-sm text-zinc-300 mb-1">Économie sur 9 ans</div>
                        <div class="text-4xl font-bold">{{ number_format($resultats['economieTotale'] ?? 0, 0, ',', ' ') }} EUR</div>
                    </div>
                </div>

                <div class="bg-zinc-50 rounded-2xl p-6 mb-8">
                    <h3 class="font-semibold text-zinc-900 mb-4">Détail du calcul</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Prix du bien</span>
                            <span class="font-semibold text-zinc-900">{{ number_format($prixBien ?? 0, 0, ',', ' ') }} EUR</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Base amortissable (80%)</span>
                            <span class="font-semibold text-zinc-900">{{ number_format($resultats['baseAmortissable'] ?? 0, 0, ',', ' ') }} EUR</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Taux d'amortissement</span>
                            <span class="font-semibold text-zinc-900">{{ $resultats['taux'] ?? 0 }}%</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Amortissement annuel</span>
                            <span class="font-semibold text-zinc-900">{{ number_format($resultats['amortissementAnnuel'] ?? 0, 0, ',', ' ') }} EUR</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-zinc-600">TMI</span>
                            <span class="font-semibold text-zinc-900">{{ $tmi }}%</span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-green-50 rounded-xl border border-green-200 mb-6">
                    <div class="flex items-start gap-3">
                        <flux:icon.envelope class="size-5 text-green-600 shrink-0 mt-0.5" />
                        <div>
                            <p class="text-sm text-green-800 font-medium">Simulation envoyée par email !</p>
                            <p class="text-sm text-green-700 mt-1">Vous allez recevoir votre simulation détaillée en PDF à l'adresse <strong>{{ $email }}</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-amber-50 rounded-xl border border-amber-200">
                    <div class="flex items-start gap-3">
                        <flux:icon.exclamation-triangle class="size-5 text-amber-600 shrink-0 mt-0.5" />
                        <p class="text-sm text-amber-800"><strong>Simulation indicative :</strong> Consultez un professionnel pour valider votre situation.</p>
                    </div>
                </div>
            </div>
        @endif

        {{-- Navigation --}}
        <div class="flex justify-between mt-8 pt-6 border-t border-zinc-200">
            @if($step > 1 && $step < 5)
                <button wire:click="previousStep" class="inline-flex items-center gap-2 px-6 py-3 text-zinc-700 font-medium rounded-xl hover:bg-zinc-100 transition-colors">
                    <flux:icon.arrow-left class="size-5" /> Retour
                </button>
            @elseif($step === 5)
                <button wire:click="recommencer" class="inline-flex items-center gap-2 px-6 py-3 text-zinc-700 font-medium rounded-xl hover:bg-zinc-100 transition-colors">
                    <flux:icon.arrow-path class="size-5" /> Nouvelle simulation
                </button>
            @else
                <div></div>
            @endif

            @if($step < 4)
                <button wire:click="nextStep" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    Continuer <flux:icon.arrow-right class="size-5" />
                </button>
            @elseif($step === 4)
                <button wire:click="nextStep" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    <flux:icon.paper-airplane class="size-5" /> Recevoir ma simulation
                </button>
            @else
                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    <flux:icon.phone class="size-5" /> Prendre rendez-vous
                </a>
            @endif
        </div>
    </div>
</div>
