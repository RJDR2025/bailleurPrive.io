<x-layouts.app title="Déficit Foncier Renforcé - BailleurPrive.io">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-40"></div>
        {{-- Decorative gradient orbs --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-orange-500/10 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                        <flux:icon.arrow-trending-up class="size-4" />
                        Levier fiscal n°3
                    </div>
                    <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6 leading-tight">
                        Le Déficit Foncier Renforcé
                    </flux:heading>
                    <flux:text class="text-zinc-300 text-lg sm:text-xl leading-relaxed mb-8">
                        Un plafond de déduction porté de <strong class="text-white">10 700 à 40 000</strong> par an pour les travaux de rénovation énergétique.
                    </flux:text>
                    <div class="flex flex-wrap gap-3">
                        <a href="/simulateur" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white text-zinc-900 font-medium rounded-lg hover:bg-zinc-100 transition-colors">
                            <flux:icon.calculator class="size-5" />
                            Simuler mon investissement
                        </a>
                        <a href="/amortissement" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 text-white font-medium rounded-lg hover:bg-white/20 transition-colors backdrop-blur-sm">
                            Voir tous les avantages
                            <flux:icon.arrow-right class="size-4" />
                        </a>
                    </div>
                </div>
                {{-- Key highlight --}}
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                    <div class="text-center mb-8">
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-500/20 text-amber-400 rounded-full text-sm font-medium mb-4">
                            <flux:icon.arrow-trending-up class="size-4" />
                            Plafond multiplié par 3,7
                        </div>
                        <div class="flex items-center justify-center gap-6">
                            <div class="text-center">
                                <div class="text-zinc-500 text-sm mb-1">Avant</div>
                                <div class="text-3xl font-bold text-zinc-400 line-through">10 700</div>
                            </div>
                            <flux:icon.arrow-right class="size-8 text-amber-400" />
                            <div class="text-center">
                                <div class="text-amber-400 text-sm mb-1">Maintenant</div>
                                <div class="text-4xl font-bold text-white">40 000</div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 pt-6 border-t border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="size-8 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <flux:icon.check class="size-4 text-emerald-400" />
                            </div>
                            <span class="text-zinc-300">Déductible du revenu global</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="size-8 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <flux:icon.check class="size-4 text-emerald-400" />
                            </div>
                            <span class="text-zinc-300">Idéal pour la rénovation énergétique</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="size-8 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <flux:icon.check class="size-4 text-emerald-400" />
                            </div>
                            <span class="text-zinc-300">Report possible sur 10 ans</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Qu'est-ce que le Déficit Foncier --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Qu'est-ce que le déficit foncier ?
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Le déficit foncier se crée lorsque vos <strong class="text-zinc-900">charges déductibles</strong> (travaux, intérêts d'emprunt, assurances, gestion...) dépassent vos <strong class="text-zinc-900">revenus fonciers</strong>.
                    </flux:text>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Ce déficit peut alors être <strong class="text-zinc-900">imputé sur votre revenu global</strong>, réduisant ainsi votre base imposable totale, et pas seulement vos revenus fonciers.
                    </flux:text>
                    <div class="bg-amber-50 rounded-2xl p-6 border border-amber-100">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-amber-500 flex items-center justify-center shrink-0">
                                <flux:icon.light-bulb class="size-5 text-white" />
                            </div>
                            <div>
                                <flux:text class="text-amber-900 font-semibold mb-1">Double avantage</flux:text>
                                <flux:text class="text-amber-700 text-sm">
                                    Vous améliorez votre bien tout en réduisant vos impôts. Les travaux de rénovation énergétique augmentent la valeur de votre patrimoine.
                                </flux:text>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-100 rounded-3xl p-8">
                    <flux:heading class="!text-xl font-bold text-zinc-900 mb-6">Mécanisme simplifié</flux:heading>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 bg-white rounded-xl p-4">
                            <div class="size-12 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                                <span class="text-blue-600 font-bold text-lg">1</span>
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Revenus fonciers</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Loyers perçus dans l'année</flux:text>
                            </div>
                            <div class="ml-auto text-zinc-900 font-bold">8 000</div>
                        </div>
                        <div class="flex items-center gap-4 bg-white rounded-xl p-4">
                            <div class="size-12 rounded-xl bg-red-100 flex items-center justify-center shrink-0">
                                <span class="text-red-600 font-bold text-lg">2</span>
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Charges déductibles</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Travaux, intérêts, gestion...</flux:text>
                            </div>
                            <div class="ml-auto text-red-600 font-bold">- 25 000</div>
                        </div>
                        <div class="border-t-2 border-dashed border-zinc-300 my-2"></div>
                        <div class="flex items-center gap-4 bg-amber-100 rounded-xl p-4">
                            <div class="size-12 rounded-xl bg-amber-500 flex items-center justify-center shrink-0">
                                <flux:icon.equals class="size-6 text-white" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Déficit foncier</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Imputable sur revenu global</flux:text>
                            </div>
                            <div class="ml-auto text-amber-700 font-bold text-lg">17 000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Comparaison Plafonds --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Un plafond considérablement augmenté
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Le Statut du Bailleur Privé multiplie par 3,7 le plafond de déficit foncier imputable sur le revenu global.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-12">
                {{-- Avant --}}
                <div class="bg-white rounded-3xl p-8 text-center relative border border-zinc-200">
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-zinc-200 text-zinc-600 text-xs font-bold rounded-full">
                            Régime actuel
                        </span>
                    </div>
                    <div class="pt-8">
                        <div class="size-20 rounded-2xl bg-zinc-100 flex items-center justify-center mx-auto mb-6">
                            <flux:icon.banknotes class="size-10 text-zinc-400" />
                        </div>
                        <div class="text-5xl font-bold text-zinc-400 mb-2">10 700</div>
                        <div class="text-zinc-500 text-lg mb-4">par an maximum</div>
                        <div class="bg-zinc-50 rounded-xl p-4 text-left">
                            <div class="text-zinc-500 text-sm mb-2">Exemple avec TMI 30%</div>
                            <div class="flex justify-between items-center">
                                <span class="text-zinc-600">Économie d'impôt max</span>
                                <span class="text-zinc-700 font-bold">3 210/an</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Après --}}
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 rounded-3xl p-8 text-center relative border-2 border-amber-300">
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-amber-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.star class="size-3" />
                            Bailleur Privé
                        </span>
                    </div>
                    <div class="pt-8">
                        <div class="size-20 rounded-2xl bg-amber-500 flex items-center justify-center mx-auto mb-6">
                            <flux:icon.banknotes class="size-10 text-white" />
                        </div>
                        <div class="text-5xl font-bold text-amber-600 mb-2">40 000</div>
                        <div class="text-zinc-700 text-lg mb-4">par an maximum</div>
                        <div class="bg-white rounded-xl p-4 text-left">
                            <div class="text-zinc-500 text-sm mb-2">Exemple avec TMI 30%</div>
                            <div class="flex justify-between items-center">
                                <span class="text-zinc-600">Économie d'impôt max</span>
                                <span class="text-amber-600 font-bold text-lg">12 000/an</span>
                            </div>
                        </div>
                        <div class="mt-4">
                            <span class="inline-flex items-center gap-1.5 px-4 py-2 bg-amber-500 text-white rounded-full text-sm font-bold">
                                <flux:icon.arrow-up class="size-4" />
                                +8 790/an d'économie
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Gain total --}}
            <div class="flex justify-center">
                <div class="inline-flex items-center gap-4 px-8 py-4 bg-zinc-900 text-white rounded-2xl">
                    <div class="text-center">
                        <div class="text-zinc-400 text-sm">Gain de plafond</div>
                        <div class="text-2xl font-bold">+29 300/an</div>
                    </div>
                    <div class="w-px h-12 bg-zinc-700"></div>
                    <div class="text-center">
                        <div class="text-zinc-400 text-sm">Multiplicateur</div>
                        <div class="text-2xl font-bold text-amber-400">x3,7</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Charges Déductibles --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 text-amber-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.document-check class="size-4" />
                    Charges éligibles
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Quelles charges créent du déficit foncier ?
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Toutes les dépenses liées à l'entretien, la réparation et l'amélioration de votre bien sont déductibles.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 max-w-5xl mx-auto">
                {{-- Travaux de rénovation --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-amber-100 flex items-center justify-center mb-4">
                        <flux:icon.wrench-screwdriver class="size-7 text-amber-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Travaux de rénovation</flux:heading>
                    <flux:text class="text-zinc-600 text-sm mb-4">
                        Réfection de toiture, ravalement, plomberie, électricité, menuiseries...
                    </flux:text>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-medium">
                        <flux:icon.check class="size-3" />
                        100% déductible
                    </span>
                </div>

                {{-- Rénovation énergétique --}}
                <div class="bg-amber-50 rounded-2xl p-6 border-2 border-amber-200 hover:shadow-lg transition-shadow relative">
                    <div class="absolute -top-2 right-4">
                        <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-amber-500 text-white text-xs font-bold rounded-full">
                            Prioritaire
                        </span>
                    </div>
                    <div class="size-14 rounded-2xl bg-amber-500 flex items-center justify-center mb-4">
                        <flux:icon.bolt class="size-7 text-white" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Rénovation énergétique</flux:heading>
                    <flux:text class="text-zinc-600 text-sm mb-4">
                        Isolation, pompe à chaleur, double vitrage, système de chauffage...
                    </flux:text>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-amber-200 text-amber-800 rounded-full text-xs font-medium">
                        <flux:icon.star class="size-3" />
                        Plafond 40 000
                    </span>
                </div>

                {{-- Frais de gestion --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-blue-100 flex items-center justify-center mb-4">
                        <flux:icon.clipboard-document-list class="size-7 text-blue-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Frais de gestion</flux:heading>
                    <flux:text class="text-zinc-600 text-sm mb-4">
                        Honoraires de gestion locative, frais de syndic, comptabilité...
                    </flux:text>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-medium">
                        <flux:icon.check class="size-3" />
                        100% déductible
                    </span>
                </div>

                {{-- Intérêts d'emprunt --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-purple-100 flex items-center justify-center mb-4">
                        <flux:icon.banknotes class="size-7 text-purple-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Intérêts d'emprunt</flux:heading>
                    <flux:text class="text-zinc-600 text-sm mb-4">
                        Intérêts du prêt immobilier, frais de dossier, assurance emprunteur...
                    </flux:text>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-purple-100 text-purple-700 rounded-full text-xs font-medium">
                        <flux:icon.information-circle class="size-3" />
                        Revenus fonciers uniquement
                    </span>
                </div>

                {{-- Assurances --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-green-100 flex items-center justify-center mb-4">
                        <flux:icon.shield-check class="size-7 text-green-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Assurances</flux:heading>
                    <flux:text class="text-zinc-600 text-sm mb-4">
                        Assurance PNO, garantie loyers impayés, protection juridique...
                    </flux:text>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-medium">
                        <flux:icon.check class="size-3" />
                        100% déductible
                    </span>
                </div>

                {{-- Taxes --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-red-100 flex items-center justify-center mb-4">
                        <flux:icon.document-text class="size-7 text-red-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Taxes foncières</flux:heading>
                    <flux:text class="text-zinc-600 text-sm mb-4">
                        Taxe foncière (hors TEOM refacturée au locataire)...
                    </flux:text>
                    <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-xs font-medium">
                        <flux:icon.check class="size-3" />
                        100% déductible
                    </span>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Cas Pratique --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6">
                    <flux:icon.calculator class="size-4" />
                    Exemple concret
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Simulation d'un projet de rénovation
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg max-w-2xl mx-auto">
                    Voyez l'impact réel du déficit foncier sur votre imposition.
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                    <div class="grid md:grid-cols-2 gap-8">
                        {{-- Situation --}}
                        <div>
                            <flux:heading class="!text-lg font-bold text-white mb-6">Votre situation</flux:heading>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">Revenu global annuel</span>
                                    <span class="text-white font-semibold">60 000</span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">TMI (Tranche Marginale)</span>
                                    <span class="text-white font-semibold">30%</span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">Loyers perçus</span>
                                    <span class="text-white font-semibold">8 000/an</span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">Travaux de rénovation</span>
                                    <span class="text-amber-400 font-semibold">35 000</span>
                                </div>
                                <div class="flex items-center justify-between py-3">
                                    <span class="text-zinc-400">Autres charges</span>
                                    <span class="text-white font-semibold">5 000</span>
                                </div>
                            </div>
                        </div>
                        {{-- Résultats --}}
                        <div class="bg-amber-500/20 rounded-2xl p-6 border border-amber-500/30">
                            <flux:heading class="!text-lg font-bold text-amber-400 mb-6">Calcul du déficit</flux:heading>
                            <div class="space-y-4">
                                <div class="flex justify-between items-center py-2">
                                    <span class="text-zinc-300">Revenus fonciers</span>
                                    <span class="text-white font-medium">8 000</span>
                                </div>
                                <div class="flex justify-between items-center py-2">
                                    <span class="text-zinc-300">Charges totales</span>
                                    <span class="text-red-400 font-medium">- 40 000</span>
                                </div>
                                <div class="border-t border-white/20 pt-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-white font-semibold">Déficit foncier</span>
                                        <span class="text-amber-400 font-bold text-xl">32 000</span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-6 pt-6 border-t border-white/20">
                                <div class="text-center p-4 bg-emerald-500 rounded-xl">
                                    <div class="text-emerald-100 text-sm mb-1">Économie d'impôt</div>
                                    <div class="text-3xl font-bold text-white">9 600</div>
                                    <div class="text-emerald-100 text-sm">32 000 × 30%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Note sur le report --}}
                <div class="mt-8 bg-white/10 rounded-2xl p-6 border border-white/10">
                    <div class="flex items-start gap-4">
                        <div class="size-10 rounded-xl bg-blue-500/20 flex items-center justify-center shrink-0">
                            <flux:icon.information-circle class="size-5 text-blue-400" />
                        </div>
                        <div>
                            <flux:text class="text-white font-semibold mb-1">Report du déficit</flux:text>
                            <flux:text class="text-zinc-400 text-sm">
                                Si votre déficit dépasse le plafond annuel de 40 000, l'excédent est reportable sur vos revenus fonciers des <strong class="text-white">10 années suivantes</strong>.
                            </flux:text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Pour qui --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Le déficit foncier est fait pour vous si...
                </flux:heading>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                {{-- Profil 1 --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 text-center hover:shadow-lg transition-shadow">
                    <div class="size-16 rounded-2xl bg-amber-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.bolt class="size-8 text-amber-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-3">Rénovation énergétique</flux:heading>
                    <flux:text class="text-zinc-600 text-sm">
                        Vous souhaitez améliorer le DPE de votre bien et réduire son empreinte carbone tout en bénéficiant d'avantages fiscaux.
                    </flux:text>
                </div>

                {{-- Profil 2 --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 text-center hover:shadow-lg transition-shadow">
                    <div class="size-16 rounded-2xl bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.chart-bar class="size-8 text-emerald-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-3">Forte imposition</flux:heading>
                    <flux:text class="text-zinc-600 text-sm">
                        Vous êtes dans une tranche marginale élevée (30%, 41% ou 45%) et souhaitez optimiser votre fiscalité.
                    </flux:text>
                </div>

                {{-- Profil 3 --}}
                <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200 text-center hover:shadow-lg transition-shadow">
                    <div class="size-16 rounded-2xl bg-blue-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.home class="size-8 text-blue-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-3">Ancien à rénover</flux:heading>
                    <flux:text class="text-zinc-600 text-sm">
                        Vous investissez dans un bien ancien nécessitant des travaux importants de remise aux normes ou de modernisation.
                    </flux:text>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Les Autres Leviers --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Découvrez les autres leviers fiscaux
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Le Statut du Bailleur Privé offre 3 leviers fiscaux cumulables.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                {{-- Amortissement --}}
                <a href="/amortissement" class="bg-white rounded-2xl p-6 border border-zinc-200 hover:shadow-lg hover:border-emerald-300 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="size-14 rounded-2xl bg-emerald-100 flex items-center justify-center shrink-0 group-hover:bg-emerald-500 transition-colors">
                            <flux:icon.presentation-chart-line class="size-7 text-emerald-600 group-hover:text-white transition-colors" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <flux:heading class="!text-lg font-bold text-zinc-900">L'Amortissement</flux:heading>
                                <span class="px-2 py-0.5 bg-emerald-100 text-emerald-700 text-xs font-medium rounded-full">Levier n°1</span>
                            </div>
                            <flux:text class="text-zinc-600 text-sm mb-3">
                                Déduisez jusqu'à 5,5% de la valeur de votre bien chaque année de vos revenus fonciers.
                            </flux:text>
                            <span class="inline-flex items-center gap-1 text-emerald-600 text-sm font-medium group-hover:gap-2 transition-all">
                                En savoir plus
                                <flux:icon.arrow-right class="size-4" />
                            </span>
                        </div>
                    </div>
                </a>

                {{-- Micro-Foncier --}}
                <a href="/micro-foncier" class="bg-white rounded-2xl p-6 border border-zinc-200 hover:shadow-lg hover:border-blue-300 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="size-14 rounded-2xl bg-blue-100 flex items-center justify-center shrink-0 group-hover:bg-blue-500 transition-colors">
                            <flux:icon.receipt-percent class="size-7 text-blue-600 group-hover:text-white transition-colors" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <flux:heading class="!text-lg font-bold text-zinc-900">Micro-Foncier Amélioré</flux:heading>
                                <span class="px-2 py-0.5 bg-blue-100 text-blue-700 text-xs font-medium rounded-full">Levier n°2</span>
                            </div>
                            <flux:text class="text-zinc-600 text-sm mb-3">
                                Abattement forfaitaire porté à 50% pour une déclaration simplifiée.
                            </flux:text>
                            <span class="inline-flex items-center gap-1 text-blue-600 text-sm font-medium group-hover:gap-2 transition-all">
                                En savoir plus
                                <flux:icon.arrow-right class="size-4" />
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- CTA Final --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bg-gradient-to-r from-amber-500 to-orange-500 rounded-3xl p-8 sm:p-12 text-center">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Calculez votre déficit foncier
                </flux:heading>
                <flux:text class="text-amber-100 text-lg mb-8 max-w-2xl mx-auto">
                    Estimez l'économie d'impôt que vous pourriez réaliser grâce au déficit foncier renforcé.
                </flux:text>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/simulateur" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-amber-600 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                        <flux:icon.calculator class="size-5" />
                        Lancer la simulation
                    </a>
                    <a href="/contact" class="inline-flex items-center gap-2 px-8 py-4 bg-amber-700 text-white font-semibold rounded-xl hover:bg-amber-800 transition-colors">
                        Contacter un conseiller
                        <flux:icon.arrow-right class="size-5" />
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
