<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Statut du Bailleur Privé - Dispositif Fiscal 2026' }}</title>
    <meta name="description" content="{{ $description ?? 'Découvrez le nouveau dispositif fiscal 2026 pour les investisseurs immobiliers. Jusqu\'à 5,5% d\'amortissement annuel sur votre investissement.' }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Force light mode -->
    <script>
        localStorage.setItem('flux_theme', 'light');
        document.documentElement.classList.remove('dark');
    </script>
    @fluxAppearance
</head>

<body class="bg-white antialiased overflow-x-hidden">
    @include('components.navbar')

    <main>
        {{ $slot }}
    </main>

    @include('components.footer')

    @fluxScripts
</body>

</html>
