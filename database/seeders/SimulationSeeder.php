<?php

namespace Database\Seeders;

use App\Models\Simulation;
use Illuminate\Database\Seeder;

class SimulationSeeder extends Seeder
{
    protected array $tauxNeuf = [
        'intermediaire' => 0.035,
        'social' => 0.045,
        'tres_social' => 0.055,
    ];

    protected array $tauxRenove = [
        'intermediaire' => 0.030,
        'social' => 0.040,
        'tres_social' => 0.045,
    ];

    protected array $plafonds = [
        'intermediaire' => 8000,
        'social' => 10000,
        'tres_social' => 12000,
    ];

    public function run(): void
    {
        $prospects = [
            ['prenom' => 'Jean', 'nom' => 'Dupont', 'email' => 'jean.dupont@gmail.com'],
            ['prenom' => 'Marie', 'nom' => 'Martin', 'email' => 'marie.martin@outlook.fr'],
            ['prenom' => 'Pierre', 'nom' => 'Bernard', 'email' => 'p.bernard@orange.fr'],
            ['prenom' => 'Sophie', 'nom' => 'Dubois', 'email' => 'sophie.dubois@yahoo.fr'],
            ['prenom' => 'Laurent', 'nom' => 'Moreau', 'email' => 'l.moreau@free.fr'],
            ['prenom' => 'Isabelle', 'nom' => 'Lefebvre', 'email' => 'isabelle.lefebvre@gmail.com'],
            ['prenom' => 'Nicolas', 'nom' => 'Roux', 'email' => 'nicolas.roux@hotmail.fr'],
            ['prenom' => 'Catherine', 'nom' => 'Fournier', 'email' => 'c.fournier@sfr.fr'],
            ['prenom' => 'Philippe', 'nom' => 'Girard', 'email' => 'philippe.girard@gmail.com'],
            ['prenom' => 'Nathalie', 'nom' => 'Bonnet', 'email' => 'n.bonnet@laposte.net'],
            ['prenom' => 'Francois', 'nom' => 'Lambert', 'email' => 'francois.lambert@outlook.fr'],
            ['prenom' => 'Valerie', 'nom' => 'Rousseau', 'email' => 'v.rousseau@gmail.com'],
            ['prenom' => 'Michel', 'nom' => 'Mercier', 'email' => 'michel.mercier@orange.fr'],
            ['prenom' => 'Christine', 'nom' => 'Blanc', 'email' => 'christine.blanc@yahoo.fr'],
            ['prenom' => 'Alain', 'nom' => 'Guerin', 'email' => 'a.guerin@free.fr'],
        ];

        $typesBien = ['neuf', 'renove'];
        $niveauxLoyer = ['intermediaire', 'social', 'tres_social'];
        $tmis = [0, 11, 30, 41, 45];

        foreach ($prospects as $index => $prospect) {
            $prixBien = rand(10, 80) * 10000; // 100k - 800k
            $typeBien = $typesBien[array_rand($typesBien)];
            $niveauLoyer = $niveauxLoyer[array_rand($niveauxLoyer)];
            $tmi = $tmis[array_rand($tmis)];
            $surface = rand(20, 120);

            // Calculs
            $baseAmortissable = $prixBien * 0.80;
            $taux = $typeBien === 'neuf'
                ? $this->tauxNeuf[$niveauLoyer]
                : $this->tauxRenove[$niveauLoyer];
            $amortissementBrut = $baseAmortissable * $taux;
            $plafond = $this->plafonds[$niveauLoyer];
            $estPlafonne = $amortissementBrut > $plafond;
            $amortissementAnnuel = min($amortissementBrut, $plafond);
            $economieAnnuelle = $amortissementAnnuel * ($tmi / 100);
            $economieTotale = $economieAnnuelle * 9;

            Simulation::create([
                'prenom' => $prospect['prenom'],
                'nom' => $prospect['nom'],
                'email' => $prospect['email'],
                'telephone' => '06' . str_pad(rand(10000000, 99999999), 8, '0', STR_PAD_LEFT),
                'accepte_contact' => true,
                'prix_bien' => $prixBien,
                'type_bien' => $typeBien,
                'surface' => $surface,
                'niveau_loyer' => $niveauLoyer,
                'tmi' => $tmi,
                'base_amortissable' => $baseAmortissable,
                'taux_amortissement' => $taux,
                'amortissement_brut' => $amortissementBrut,
                'plafond' => $plafond,
                'est_plafonne' => $estPlafonne,
                'amortissement_annuel' => $amortissementAnnuel,
                'economie_annuelle' => $economieAnnuelle,
                'economie_totale' => $economieTotale,
                'ip_address' => '192.168.1.' . rand(1, 254),
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36',
                'created_at' => now()->subDays(rand(0, 30))->subHours(rand(0, 23)),
            ]);
        }
    }
}
