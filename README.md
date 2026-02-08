# BailleurPrive.io

Application web pour la gestion de biens immobiliers en location.

## Stack technique

- **Laravel 12** - Framework PHP
- **Livewire 4** - Composants réactifs
- **Flux Pro** - Bibliothèque de composants UI
- **Tailwind CSS 4** - Framework CSS

## Prérequis

- PHP 8.2+
- Composer
- Node.js & npm
- MySQL / SQLite

## Installation

### 1. Cloner le projet

```bash
git clone https://github.com/votre-repo/bailleurPrive.io.git
cd bailleurPrive.io
```

### 2. Configurer Flux Pro

Avant d'installer les dépendances, configurez vos identifiants Flux Pro :

```bash
composer config http-basic.composer.fluxui.dev VOTRE_EMAIL VOTRE_CLE_LICENCE
```

### 3. Installer les dépendances

```bash
composer install
npm install
```

### 4. Configuration de l'environnement

```bash
cp .env.example .env
php artisan key:generate
```

Configurez votre base de données dans le fichier `.env`.

### 5. Migrations

```bash
php artisan migrate
```

### 6. Build des assets

```bash
npm run build
```

## Lancer le projet

### Développement

```bash
composer dev
```

Ou séparément :

```bash
php artisan serve
npm run dev
```

### Production

```bash
npm run build
php artisan serve
```

## Structure des vues

```
resources/views/
├── components/layouts/app.blade.php  # Layout principal
├── livewire/                         # Composants Livewire
├── counter.blade.php                 # Page exemple
└── welcome.blade.php                 # Page d'accueil
```

## Créer un composant Livewire

```bash
php artisan make:livewire NomDuComposant
```

## Documentation

- [Laravel](https://laravel.com/docs)
- [Livewire](https://livewire.laravel.com/docs)
- [Flux UI](https://fluxui.dev/docs)
- [Tailwind CSS](https://tailwindcss.com/docs)
