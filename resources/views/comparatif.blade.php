<x-layouts.app title="Comparatif des Dispositifs Fiscaux - BailleurPrive.io">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-40"></div>
        {{-- Decorative gradient orbs --}}
        <div class="absolute top-0 left-1/4 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="text-center max-w-4xl mx-auto mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                    <flux:icon.arrows-right-left class="size-4" />
                    Comparatif
                </div>
                <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6 leading-tight">
                    Comparatif des Dispositifs Fiscaux
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg sm:text-xl leading-relaxed mb-8">
                    Comment le Statut du Bailleur Privé se positionne face aux autres dispositifs d'investissement locatif ?
                </flux:text>
            </div>
            {{-- Quick comparison cards --}}
            <div class="grid sm:grid-cols-3 gap-4 max-w-4xl mx-auto">
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 text-center">
                    <div class="size-14 rounded-xl bg-red-500/20 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.x-circle class="size-7 text-red-400" />
                    </div>
                    <div class="text-xl font-bold text-white mb-1">Pinel</div>
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-red-500/20 text-red-400 rounded-full text-sm font-medium">
                        <flux:icon.x-mark class="size-3.5" />
                        Supprimé fin 2024
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 text-center relative">
                    <div class="absolute -top-2 left-1/2 -translate-x-1/2">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full shadow-lg">
                            Recommandé
                        </span>
                    </div>
                    <div class="size-14 rounded-xl bg-emerald-500/20 flex items-center justify-center mx-auto mb-4 mt-2">
                        <flux:icon.check-badge class="size-7 text-emerald-400" />
                    </div>
                    <div class="text-xl font-bold text-white mb-1">Bailleur Privé</div>
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-sm font-medium">
                        <flux:icon.check class="size-3.5" />
                        Actif 2026-2028
                    </div>
                </div>
                <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10 text-center">
                    <div class="size-14 rounded-xl bg-blue-500/20 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.building-storefront class="size-7 text-blue-400" />
                    </div>
                    <div class="text-xl font-bold text-white mb-1">LMNP</div>
                    <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-500/20 text-blue-400 rounded-full text-sm font-medium">
                        <flux:icon.check class="size-3.5" />
                        Meublé uniquement
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Vue d'ensemble --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Vue d'ensemble
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Les principaux dispositifs fiscaux pour l'investissement locatif en France.
                </flux:text>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-5 gap-4">
                {{-- Bailleur Privé --}}
                <div class="bg-zinc-900 rounded-2xl p-6 text-center relative overflow-hidden">
                    <div class="absolute top-3 right-3">
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.check class="size-3" />
                            Actif
                        </span>
                    </div>
                    <div class="size-14 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.home-modern class="size-7 text-white" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-white mb-2">Bailleur Privé</flux:heading>
                    <flux:text class="text-zinc-400 text-sm mb-3">Amortissement</flux:text>
                    <flux:text class="text-zinc-300 text-xs">Investissement locatif nu</flux:text>
                </div>

                {{-- Pinel --}}
                <div class="bg-zinc-100 rounded-2xl p-6 text-center relative opacity-60">
                    <div class="absolute top-3 right-3">
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-red-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.x-mark class="size-3" />
                            Supprimé
                        </span>
                    </div>
                    <div class="size-14 rounded-2xl bg-zinc-200 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.building-office class="size-7 text-zinc-500" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-500 mb-2">Pinel</flux:heading>
                    <flux:text class="text-zinc-400 text-sm mb-3">Réduction d'impôt</flux:text>
                    <flux:text class="text-zinc-400 text-xs">Fin en 2024</flux:text>
                </div>

                {{-- LMNP --}}
                <div class="bg-zinc-50 rounded-2xl p-6 text-center relative border border-zinc-200">
                    <div class="absolute top-3 right-3 flex items-center gap-2">
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.check class="size-3" />
                            Actif
                        </span>
                    </div>
                    <div class="size-14 rounded-2xl bg-zinc-200 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.home class="size-7 text-zinc-700" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">LMNP</flux:heading>
                    <flux:text class="text-zinc-500 text-sm mb-3">Amortissement</flux:text>
                    <flux:text class="text-zinc-500 text-xs mb-3">Location meublée</flux:text>
                    <a href="https://lmnp.ai" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-zinc-900 text-white text-sm font-medium rounded-md hover:bg-zinc-800 transition-colors mt-2">
                        Découvrir lmnp.ai
                        <flux:icon.arrow-top-right-on-square class="size-3.5" />
                    </a>
                </div>

                {{-- Denormandie --}}
                <div class="bg-zinc-50 rounded-2xl p-6 text-center relative border border-zinc-200">
                    <div class="absolute top-3 right-3">
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.check class="size-3" />
                            Actif
                        </span>
                    </div>
                    <div class="size-14 rounded-2xl bg-zinc-200 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.wrench-screwdriver class="size-7 text-zinc-700" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Denormandie</flux:heading>
                    <flux:text class="text-zinc-500 text-sm mb-3">Réduction d'impôt</flux:text>
                    <flux:text class="text-zinc-500 text-xs mb-3">Ancien à rénover</flux:text>
                    <a href="https://www.hagnere-patrimoine.fr/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-zinc-900 text-white text-sm font-medium rounded-md hover:bg-zinc-800 transition-colors mt-2">
                        Hagnéré Patrimoine
                        <flux:icon.arrow-top-right-on-square class="size-3.5" />
                    </a>
                </div>

                {{-- Loc'Avantages --}}
                <div class="bg-zinc-50 rounded-2xl p-6 text-center relative border border-zinc-200">
                    <div class="absolute top-3 right-3">
                        <span class="inline-flex items-center gap-1 px-2 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.check class="size-3" />
                            Actif
                        </span>
                    </div>
                    <div class="size-14 rounded-2xl bg-zinc-200 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.hand-thumb-up class="size-7 text-zinc-700" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Loc'Avantages</flux:heading>
                    <flux:text class="text-zinc-500 text-sm mb-3">Réduction d'impôt</flux:text>
                    <flux:text class="text-zinc-500 text-xs mb-3">Location conventionnée</flux:text>
                    <a href="https://www.hagnere-patrimoine.fr/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-zinc-900 text-white text-sm font-medium rounded-md hover:bg-zinc-800 transition-colors mt-2">
                        Hagnéré Patrimoine
                        <flux:icon.arrow-top-right-on-square class="size-3.5" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Bailleur Privé vs Pinel --}}
    <section class="py-16 sm:py-20 bg-zinc-50" id="vs-pinel">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-200 text-zinc-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.scale class="size-4" />
                        Comparatif principal
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Bailleur Privé vs Pinel
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Le dispositif Pinel a pris fin en 2024. Le Statut du Bailleur Privé vient le remplacer avec des caractéristiques différentes.
                    </flux:text>
                    <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                <flux:icon.trophy class="size-5 text-emerald-600" />
                            </div>
                            <div>
                                <flux:heading class="!text-lg font-bold text-emerald-800 mb-2">Verdict</flux:heading>
                                <flux:text class="text-emerald-700 text-sm">
                                    Le Bailleur Privé offre plus de <strong>flexibilité</strong> (neuf et ancien) et un mécanisme d'<strong>amortissement</strong> potentiellement plus avantageux sur le long terme.
                                </flux:text>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-zinc-200 overflow-hidden shadow-sm">
                    <div class="grid grid-cols-3 bg-zinc-900 text-white">
                        <div class="p-4 font-semibold text-sm">Critère</div>
                        <div class="p-4 font-semibold text-sm text-center bg-zinc-800/50">Pinel</div>
                        <div class="p-4 font-semibold text-sm text-center">Bailleur Privé</div>
                    </div>
                    <div class="divide-y divide-zinc-100">
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Statut</div>
                            <div class="p-4 text-center bg-zinc-50">
                                <span class="inline-flex items-center gap-1 text-red-600 text-sm">
                                    <flux:icon.x-circle class="size-4" />
                                    Supprimé
                                </span>
                            </div>
                            <div class="p-4 text-center">
                                <span class="inline-flex items-center gap-1 text-emerald-600 text-sm font-semibold">
                                    <flux:icon.check-circle class="size-4" />
                                    Actif
                                </span>
                            </div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Mécanisme</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Réduction d'impôt</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Amortissement</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Durée</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">6, 9 ou 12 ans</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">9 ans minimum</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Neuf</div>
                            <div class="p-4 text-center bg-zinc-50">
                                <flux:icon.check class="size-5 text-emerald-500 mx-auto" />
                            </div>
                            <div class="p-4 text-center">
                                <flux:icon.check class="size-5 text-emerald-500 mx-auto" />
                            </div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Ancien rénové</div>
                            <div class="p-4 text-center bg-zinc-50">
                                <flux:icon.x-mark class="size-5 text-red-500 mx-auto" />
                            </div>
                            <div class="p-4 text-center">
                                <flux:icon.check class="size-5 text-emerald-500 mx-auto" />
                            </div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Avantage max</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">21% sur 12 ans</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">5,5%/an + déficit</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Loyers</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Plafonds stricts</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">3 niveaux au choix</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bailleur Privé vs LMNP --}}
    <section class="py-16 sm:py-20 bg-white" id="vs-lmnp">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 bg-white rounded-3xl border border-zinc-200 overflow-hidden shadow-sm">
                    <div class="grid grid-cols-3 bg-zinc-900 text-white">
                        <div class="p-4 font-semibold text-sm">Critère</div>
                        <div class="p-4 font-semibold text-sm text-center bg-zinc-800/50">LMNP</div>
                        <div class="p-4 font-semibold text-sm text-center">Bailleur Privé</div>
                    </div>
                    <div class="divide-y divide-zinc-100">
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Type de location</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Meublée</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Nue</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Mécanisme</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Amortissement</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Amortissement</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Engagement</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Aucun</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">9 ans minimum</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Régime fiscal</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">BIC</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Revenus fonciers</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Revente</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Totale liberté</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Après 9 ans</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Gestion</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Plus lourde</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Plus simple</div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-200 text-zinc-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.scale class="size-4" />
                        Location meublée vs nue
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Bailleur Privé vs LMNP
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Le LMNP (Loueur Meublé Non Professionnel) reste actif et fonctionne aussi par amortissement, mais avec des caractéristiques différentes.
                    </flux:text>
                    <div class="bg-blue-50 border border-blue-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                                <flux:icon.light-bulb class="size-5 text-blue-600" />
                            </div>
                            <div>
                                <flux:heading class="!text-lg font-bold text-blue-800 mb-2">Verdict</flux:heading>
                                <flux:text class="text-blue-700 text-sm">
                                    <strong>LMNP</strong> : Plus de liberté, mais gestion plus lourde (meublé).<br>
                                    <strong>Bailleur Privé</strong> : Engagement long, mais gestion simplifiée (nu).
                                </flux:text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bailleur Privé vs Denormandie --}}
    <section class="py-16 sm:py-20 bg-zinc-50" id="vs-denormandie">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-200 text-zinc-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.scale class="size-4" />
                        Rénovation de l'ancien
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Bailleur Privé vs Denormandie
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Le Denormandie cible la rénovation dans l'ancien, comme une partie du dispositif Bailleur Privé.
                    </flux:text>
                    <div class="bg-amber-50 border border-amber-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                                <flux:icon.map-pin class="size-5 text-amber-600" />
                            </div>
                            <div>
                                <flux:heading class="!text-lg font-bold text-amber-800 mb-2">Verdict</flux:heading>
                                <flux:text class="text-amber-700 text-sm">
                                    Le Bailleur Privé est <strong>plus souple géographiquement</strong> et couvre aussi le <strong>neuf</strong>, contrairement au Denormandie limité à certaines villes.
                                </flux:text>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-zinc-200 overflow-hidden shadow-sm">
                    <div class="grid grid-cols-3 bg-zinc-900 text-white">
                        <div class="p-4 font-semibold text-sm">Critère</div>
                        <div class="p-4 font-semibold text-sm text-center bg-zinc-800/50">Denormandie</div>
                        <div class="p-4 font-semibold text-sm text-center">Bailleur Privé</div>
                    </div>
                    <div class="divide-y divide-zinc-100">
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Mécanisme</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Réduction d'impôt</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Amortissement</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Type de bien</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Ancien à rénover</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Neuf + Ancien</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Zones éligibles</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Villes spécifiques</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Tout le territoire</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Travaux exigés</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">25% du coût total</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Rénovation énergétique</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Durée</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">6, 9 ou 12 ans</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">9 ans</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Bailleur Privé vs Loc'Avantages --}}
    <section class="py-16 sm:py-20 bg-white" id="vs-locavantages">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="order-2 lg:order-1 bg-white rounded-3xl border border-zinc-200 overflow-hidden shadow-sm">
                    <div class="grid grid-cols-3 bg-zinc-900 text-white">
                        <div class="p-4 font-semibold text-sm">Critère</div>
                        <div class="p-4 font-semibold text-sm text-center bg-zinc-800/50">Loc'Avantages</div>
                        <div class="p-4 font-semibold text-sm text-center">Bailleur Privé</div>
                    </div>
                    <div class="divide-y divide-zinc-100">
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Mécanisme</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Réduction (65%)</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Amortissement</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Type de bien</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Ancien uniquement</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Neuf + Ancien</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Intermédiaire</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Anah obligatoire</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">Non requis</div>
                        </div>
                        <div class="grid grid-cols-3">
                            <div class="p-4 text-zinc-700 text-sm font-medium">Loyers</div>
                            <div class="p-4 text-center bg-zinc-50 text-zinc-600 text-sm">Conventionnés</div>
                            <div class="p-4 text-center text-zinc-900 text-sm font-semibold">3 niveaux au choix</div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-200 text-zinc-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.scale class="size-4" />
                        Location conventionnée
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Bailleur Privé vs Loc'Avantages
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Loc'Avantages propose aussi des loyers conventionnés avec avantage fiscal.
                    </flux:text>
                    <div class="bg-purple-50 border border-purple-200 rounded-2xl p-6">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-purple-100 flex items-center justify-center shrink-0">
                                <flux:icon.puzzle-piece class="size-5 text-purple-600" />
                            </div>
                            <div>
                                <flux:heading class="!text-lg font-bold text-purple-800 mb-2">Verdict</flux:heading>
                                <flux:text class="text-purple-700 text-sm">
                                    Loc'Avantages peut être <strong>cumulé</strong> avec le Bailleur Privé dans certains cas pour l'ancien. Une combinaison potentiellement très avantageuse.
                                </flux:text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Tableau récapitulatif complet --}}
    <section class="py-16 sm:py-20 bg-zinc-900" id="recap">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Tableau récapitulatif complet
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg max-w-2xl mx-auto">
                    Tous les dispositifs comparés en un coup d'oeil.
                </flux:text>
            </div>

            <div class="overflow-x-auto">
                <div class="bg-white rounded-3xl overflow-hidden min-w-[800px]">
                    <div class="grid grid-cols-5 bg-zinc-900">
                        <div class="p-4 font-semibold text-white text-sm">Critère</div>
                        <div class="p-4 font-semibold text-white text-sm text-center bg-zinc-800">Bailleur Privé</div>
                        <div class="p-4 font-semibold text-white text-sm text-center">LMNP</div>
                        <div class="p-4 font-semibold text-white text-sm text-center bg-zinc-800">Denormandie</div>
                        <div class="p-4 font-semibold text-white text-sm text-center">Loc'Avantages</div>
                    </div>
                    <div class="divide-y divide-zinc-100">
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Neuf</div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Ancien</div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Location nue</div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Location meublée</div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Amortissement</div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Réduction d'impôt</div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.x-mark class="size-5 text-red-500 mx-auto" /></div>
                            <div class="p-4 text-center bg-zinc-100"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                            <div class="p-4 text-center"><flux:icon.check class="size-5 text-emerald-500 mx-auto" /></div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Engagement</div>
                            <div class="p-4 text-center bg-zinc-100 text-zinc-900 text-sm font-semibold">9 ans</div>
                            <div class="p-4 text-center text-zinc-600 text-sm">Non</div>
                            <div class="p-4 text-center bg-zinc-100 text-zinc-600 text-sm">6-12 ans</div>
                            <div class="p-4 text-center text-zinc-600 text-sm">6 ans</div>
                        </div>
                        <div class="grid grid-cols-5">
                            <div class="p-4 text-zinc-700 text-sm font-medium bg-zinc-50">Date limite</div>
                            <div class="p-4 text-center bg-zinc-100 text-zinc-900 text-sm font-semibold">2028</div>
                            <div class="p-4 text-center text-zinc-600 text-sm">Illimité</div>
                            <div class="p-4 text-center bg-zinc-100 text-zinc-600 text-sm">2027</div>
                            <div class="p-4 text-center text-zinc-600 text-sm">Illimité</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Quel dispositif choisir --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-200 text-zinc-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.question-mark-circle class="size-4" />
                    Guide de choix
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Quel dispositif choisir ?
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Chaque dispositif correspond à un profil d'investisseur différent.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Bailleur Privé --}}
                <div class="bg-zinc-900 rounded-3xl p-8 text-white relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div class="relative">
                        <div class="size-14 rounded-2xl bg-white/10 flex items-center justify-center mb-6">
                            <flux:icon.home-modern class="size-7 text-white" />
                        </div>
                        <flux:heading class="!text-2xl font-bold text-white mb-4">Optez pour le Bailleur Privé si :</flux:heading>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-emerald-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-300 text-sm">Vous souhaitez investir dans le <strong class="text-white">neuf ou l'ancien rénové</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-emerald-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-300 text-sm">Vous préférez une <strong class="text-white">location nue</strong> (gestion simplifiée)</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-emerald-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-300 text-sm">Vous cherchez un <strong class="text-white">amortissement fiscal</strong> stable</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-emerald-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-300 text-sm">Vous pouvez vous engager sur <strong class="text-white">9 ans</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- LMNP --}}
                <div class="bg-white rounded-3xl p-8 border border-zinc-200 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-zinc-100 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div class="relative">
                        <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center mb-6">
                            <flux:icon.home class="size-7 text-zinc-700" />
                        </div>
                        <flux:heading class="!text-2xl font-bold text-zinc-900 mb-4">Optez pour le LMNP si :</flux:heading>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-zinc-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-600 text-sm">Vous préférez la <strong class="text-zinc-900">location meublée</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-zinc-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-600 text-sm">Vous voulez une <strong class="text-zinc-900">flexibilité de revente</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-zinc-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-600 text-sm">Vous visez des <strong class="text-zinc-900">rendements locatifs</strong> plus élevés</span>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Denormandie --}}
                <div class="bg-white rounded-3xl p-8 border border-zinc-200 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-zinc-100 rounded-full -translate-y-1/2 translate-x-1/2"></div>
                    <div class="relative">
                        <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center mb-6">
                            <flux:icon.wrench-screwdriver class="size-7 text-zinc-700" />
                        </div>
                        <flux:heading class="!text-2xl font-bold text-zinc-900 mb-4">Optez pour le Denormandie si :</flux:heading>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-zinc-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-600 text-sm">Vous ciblez des <strong class="text-zinc-900">villes éligibles</strong> spécifiques</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-zinc-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-600 text-sm">Vous avez un projet de <strong class="text-zinc-900">rénovation important</strong></span>
                            </li>
                            <li class="flex items-start gap-3">
                                <flux:icon.check-circle class="size-5 text-zinc-400 shrink-0 mt-0.5" />
                                <span class="text-zinc-600 text-sm">Vous préférez une <strong class="text-zinc-900">réduction d'impôt directe</strong></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Final --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 to-zinc-800">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <div class="size-16 rounded-2xl bg-white/10 flex items-center justify-center mx-auto mb-6">
                <flux:icon.chat-bubble-left-right class="size-8 text-white" />
            </div>
            <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-6">
                Besoin d'aide pour choisir ?
            </flux:heading>
            <flux:text class="text-zinc-300 text-lg mb-8 max-w-2xl mx-auto">
                Chaque situation est unique. Consultez un conseiller en gestion de patrimoine pour déterminer le dispositif le plus adapté à votre profil et vos objectifs.
            </flux:text>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ url('/simulateur') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-zinc-900 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                    <flux:icon.calculator class="size-5" />
                    Simuler mon investissement
                </a>
                <a href="{{ url('/contact') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent text-white font-semibold rounded-xl border border-white/30 hover:bg-white/10 transition-colors">
                    <flux:icon.envelope class="size-5" />
                    Nous contacter
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
