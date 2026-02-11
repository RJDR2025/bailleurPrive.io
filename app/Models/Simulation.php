<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Simulation extends Model
{
    protected $fillable = [
        'prenom',
        'nom',
        'email',
        'telephone',
        'accepte_contact',
        'prix_bien',
        'type_bien',
        'surface',
        'niveau_loyer',
        'tmi',
        'base_amortissable',
        'taux_amortissement',
        'amortissement_brut',
        'plafond',
        'est_plafonne',
        'amortissement_annuel',
        'economie_annuelle',
        'economie_totale',
        'ip_address',
        'user_agent',
    ];

    protected $casts = [
        'accepte_contact' => 'boolean',
        'est_plafonne' => 'boolean',
        'prix_bien' => 'decimal:2',
        'surface' => 'decimal:2',
        'tmi' => 'decimal:2',
        'base_amortissable' => 'decimal:2',
        'taux_amortissement' => 'decimal:4',
        'amortissement_brut' => 'decimal:2',
        'plafond' => 'decimal:2',
        'amortissement_annuel' => 'decimal:2',
        'economie_annuelle' => 'decimal:2',
        'economie_totale' => 'decimal:2',
    ];

    public function getNomCompletAttribute(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }
}
