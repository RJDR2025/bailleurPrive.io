# Simulateur Bailleur Privé - Documentation

## Vue d'ensemble

Le simulateur permet aux utilisateurs de calculer leurs économies d'impôts potentielles avec le Statut du Bailleur Privé.

> Source : Documentation officielle dans `docs/pages/`

---

## Variables d'entrée

### 1. Informations sur le bien

| Variable | Type | Description | Exemple |
|----------|------|-------------|---------|
| `prixBien` | number | Prix d'achat du bien immobilier | 200 000 € |
| `typeBien` | enum | Type de bien | "neuf" \| "renove" |
| `surface` | number | Surface en m² | 45 m² |
| `zone` | enum | Zone géographique (pour plafonds de loyers) | "tendue" \| "non_tendue" |

### 2. Niveau de loyer choisi

> Source : `docs/pages/04-eligibilite.md`

| Niveau | Taux d'amortissement (Neuf) | Plafond annuel | Sur 9 ans | Description |
|--------|----------------------------|----------------|-----------|-------------|
| `intermediaire` | 3,5% | 8 000 € | 72 000 € | Loyers légèrement sous le marché |
| `social` | 4,5% | 10 000 € | 90 000 € | Loyers conventionnés sociaux |
| `tres_social` | 5,5% | 12 000 € | 108 000 € | Loyers très accessibles |

### 3. Taux pour logements rénovés

> Source : `docs/pages/03-avantages-fiscaux.md`

| Niveau | Taux d'amortissement (Ancien rénové) |
|--------|-------------------------------------|
| Selon catégorie | 3% à 4% |

### 4. Situation fiscale de l'investisseur

| Variable | Type | Description | Valeurs possibles |
|----------|------|-------------|-------------------|
| `tmi` | number | Tranche Marginale d'Imposition | 0%, 11%, 30%, 41%, 45% |
| `revenusLocatifs` | number | Revenus locatifs annuels actuels | 0 - 15 000 € |
| `regimeFiscal` | enum | Régime fiscal choisi | "micro_foncier" \| "reel" |

---

## Formules de calcul

### 1. Amortissement annuel

> Source : `docs/pages/03-avantages-fiscaux.md`

```
baseAmortissable = prixBien × 0.80  // 80% du prix du bien (hors terrain)

amortissementBrut = baseAmortissable × tauxAmortissement

// Plafonné selon le niveau de loyer :
amortissementAnnuel = min(amortissementBrut, plafondAnnuel)
```

**Exemple (tiré de la documentation) :**
```
prixBien = 200 000 €
niveau = social (4,5%)
plafond = 10 000 €

baseAmortissable = 200 000 × 0.80 = 160 000 €
amortissementBrut = 160 000 × 0.045 = 7 200 €
amortissementAnnuel = min(7 200, 10 000) = 7 200 €
```

### 2. Économie d'impôt annuelle

```
economieAnnuelle = amortissementAnnuel × tmi
```

**Exemple :**
```
amortissementAnnuel = 7 200 €
tmi = 30%

economieAnnuelle = 7 200 × 0.30 = 2 160 €
```

### 3. Économie totale sur 9 ans

```
economieTotale = economieAnnuelle × 9
```

**Exemple :**
```
economieAnnuelle = 2 160 €

economieTotale = 2 160 × 9 = 19 440 €
```

---

## Les 3 leviers fiscaux cumulables

> Source : `docs/pages/03-avantages-fiscaux.md`

### Levier 1 : Amortissement du bien

| Type de bien | Taux min | Taux max | Plafond max/an |
|--------------|----------|----------|----------------|
| Neuf RE2020 | 3,5% | 5,5% | 12 000 € |
| Ancien rénové | 3% | 4% | - |

### Levier 2 : Régime Micro-Foncier Amélioré

| Situation | Abattement forfaitaire |
|-----------|------------------------|
| **Avant** (régime actuel) | 30% |
| **Avec le dispositif** | 50% |

Conditions : revenus locatifs < 15 000 €/an

**Exemple :**
```
Revenus fonciers = 10 000 €

Avant (30%) : 10 000 - 3 000 = 7 000 € imposables
Après (50%) : 10 000 - 5 000 = 5 000 € imposables

Économie sur base imposable = 2 000 €
```

### Levier 3 : Déficit Foncier Renforcé

| Situation | Plafond annuel |
|-----------|----------------|
| **Actuellement** | 10 700 € |
| **Avec le dispositif** | Jusqu'à 40 000 € |

```
// Si charges > revenus locatifs
deficit = charges - revenusLocatifs

// Déductible du revenu global (plafonné)
deficitDeductible = min(deficit, 40000)
economieDeficit = deficitDeductible × tmi
```

---

## Tableau récapitulatif des taux

> Source : `docs/pages/03-avantages-fiscaux.md` et `docs/pages/04-eligibilite.md`

### Logements Neufs (RE2020)

| Niveau de Loyer | Taux Annuel | Plafond Annuel | Sur 9 ans |
|-----------------|-------------|----------------|-----------|
| Intermédiaire | 3,5% | 8 000 € | 72 000 € |
| Social | 4,5% | 10 000 € | 90 000 € |
| Très Social | 5,5% | 12 000 € | 108 000 € |

### Logements Anciens Rénovés

| Niveau de Loyer | Taux Annuel |
|-----------------|-------------|
| Selon catégorie | 3% à 4% |

---

## Scénarios de simulation

### Scénario 1 : Investissement Neuf TMI 30%

> Source : `docs/pages/03-avantages-fiscaux.md` - Cas Pratique

```javascript
const simulation = {
  prixBien: 200000,
  typeBien: "neuf",
  niveauLoyer: "social",
  tmi: 0.30,
  duree: 9
};

// Résultats
const resultats = {
  baseAmortissable: 160000,      // 200k × 80%
  tauxAmortissement: 0.045,      // 4,5%
  amortissementAnnuel: 7200,     // 160k × 4,5%
  economieAnnuelle: 2160,        // 7200 × 30%
  economieTotale: 19440          // 2160 × 9 ans
};
```

### Scénario 2 : Investissement TMI 41% - Très Social

```javascript
const simulation = {
  prixBien: 250000,
  typeBien: "neuf",
  niveauLoyer: "tres_social",
  tmi: 0.41,
  duree: 9
};

// Résultats
const resultats = {
  baseAmortissable: 200000,      // 250k × 80%
  tauxAmortissement: 0.055,      // 5,5%
  amortissementBrut: 11000,      // 200k × 5,5%
  amortissementAnnuel: 11000,    // < plafond 12k, pas de plafonnement
  economieAnnuelle: 4510,        // 11000 × 41%
  economieTotale: 40590          // 4510 × 9 ans
};
```

### Scénario 3 : Bien cher avec plafonnement

```javascript
const simulation = {
  prixBien: 400000,
  typeBien: "neuf",
  niveauLoyer: "tres_social",
  tmi: 0.41,
  duree: 9
};

// Résultats
const resultats = {
  baseAmortissable: 320000,      // 400k × 80%
  tauxAmortissement: 0.055,      // 5,5%
  amortissementBrut: 17600,      // 320k × 5,5%
  amortissementAnnuel: 12000,    // Plafonné à 12k
  economieAnnuelle: 4920,        // 12000 × 41%
  economieTotale: 44280          // 4920 × 9 ans
};
```

---

## Récapitulatif des avantages maximums

> Source : `docs/pages/03-avantages-fiscaux.md`

| Levier Fiscal | Avantage Maximum |
|---------------|------------------|
| **Amortissement neuf** | 5,5% / 12 000 € par an |
| **Amortissement rénové** | 4% par an |
| **Micro-foncier** | Abattement 50% |
| **Déficit foncier** | Jusqu'à 40 000 €/an |

---

## Conditions d'éligibilité

> Source : `docs/pages/04-eligibilite.md`

| Critère | Exigence |
|---------|----------|
| Durée d'engagement | **9 ans minimum** |
| Type de location | Location **nue** (non meublée) |
| Usage | **Résidence principale** du locataire |
| Date limite d'acquisition | **31 décembre 2028** |
| Bien neuf | Conforme aux normes **RE2020** |
| Bien ancien | Travaux de rénovation énergétique documentés |

### Restrictions

- Interdiction de louer aux ascendants/descendants (jusqu'au 2ème degré)
- Ne pas être inscrit au RCS comme loueur professionnel

---

## Interface du simulateur

### Étapes du formulaire

1. **Étape 1 : Le bien**
   - Prix d'achat
   - Type (neuf/rénové)
   - Surface
   - Localisation (zone tendue ou non)

2. **Étape 2 : Le niveau de loyer**
   - Choix parmi les 3 niveaux
   - Affichage du taux correspondant
   - Estimation du loyer mensuel

3. **Étape 3 : Votre situation**
   - TMI (sélection ou calcul automatique)
   - Revenus locatifs existants (pour micro-foncier)
   - Régime fiscal préféré

4. **Étape 4 : Résultats**
   - Amortissement annuel
   - Économie d'impôt annuelle
   - Économie totale sur 9 ans
   - Comparaison avec/sans dispositif

### Structure Livewire suggérée

```
resources/
└── views/
    └── livewire/
        └── simulateur/
            ├── simulateur-form.blade.php
            ├── step-bien.blade.php
            ├── step-loyer.blade.php
            ├── step-situation.blade.php
            └── step-resultats.blade.php

app/
└── Livewire/
    └── Simulateur/
        ├── SimulateurForm.php
        └── Services/
            └── CalculateurFiscal.php
```

---

## Validation des données

```php
// Règles de validation
$rules = [
    'prixBien' => 'required|numeric|min:50000|max:2000000',
    'typeBien' => 'required|in:neuf,renove',
    'surface' => 'required|numeric|min:9|max:500',
    'niveauLoyer' => 'required|in:intermediaire,social,tres_social',
    'tmi' => 'required|in:0,11,30,41,45',
];
```

---

## Points d'attention

> Source : Documentation officielle

1. **Base amortissable** : Toujours 80% du prix (le terrain n'est pas amortissable)
2. **Plafonnement** : L'amortissement est toujours plafonné selon le niveau de loyer choisi
3. **Durée minimum** : 9 ans d'engagement obligatoire
4. **Cumul** : Les 3 leviers peuvent se cumuler (amortissement + micro-foncier amélioré ou déficit foncier)
5. **Simulation indicative** : Rappeler que c'est une estimation et que l'utilisateur doit consulter un professionnel

---

## Prochaines étapes

- [ ] Créer le composant Livewire `SimulateurForm`
- [ ] Implémenter le service `CalculateurFiscal`
- [ ] Ajouter les animations de transition entre étapes
- [ ] Créer le PDF d'export
- [ ] Ajouter les graphiques de projection
- [ ] Tests unitaires des calculs
