<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Simulation;

class Simulateur extends Component
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

    public function render()
    {
        return view('livewire.simulateur');
    }
}
