<x-layouts.app title="Micro-Foncier Amélioré - BailleurPrive.io">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-40"></div>
        {{-- Decorative gradient orbs --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                        <flux:icon.receipt-percent class="size-4" />
                        Levier fiscal n°2
                    </div>
                    <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6 leading-tight">
                        Le Régime Micro-Foncier Amélioré
                    </flux:heading>
                    <flux:text class="text-zinc-300 text-lg sm:text-xl leading-relaxed mb-8">
                        Une déclaration simplifiée avec un abattement forfaitaire porté de <strong class="text-white">30% à 50%</strong> sur vos revenus fonciers.
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
                        <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-500/20 text-blue-400 rounded-full text-sm font-medium mb-4">
                            <flux:icon.arrow-trending-up class="size-4" />
                            Abattement augmenté
                        </div>
                        <div class="flex items-center justify-center gap-6">
                            <div class="text-center">
                                <div class="text-zinc-500 text-sm mb-1">Avant</div>
                                <div class="text-4xl font-bold text-zinc-400 line-through">30%</div>
                            </div>
                            <flux:icon.arrow-right class="size-8 text-emerald-400" />
                            <div class="text-center">
                                <div class="text-emerald-400 text-sm mb-1">Maintenant</div>
                                <div class="text-5xl font-bold text-white">50%</div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 pt-6 border-t border-white/10">
                        <div class="flex items-center gap-3">
                            <div class="size-8 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <flux:icon.check class="size-4 text-emerald-400" />
                            </div>
                            <span class="text-zinc-300">Déclaration simplifiée</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="size-8 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <flux:icon.check class="size-4 text-emerald-400" />
                            </div>
                            <span class="text-zinc-300">Revenus fonciers < 15 000/an</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="size-8 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <flux:icon.check class="size-4 text-emerald-400" />
                            </div>
                            <span class="text-zinc-300">Idéal pour les petits revenus locatifs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Qu'est-ce que le Micro-Foncier --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Qu'est-ce que le régime Micro-Foncier ?
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Le régime micro-foncier est un <strong class="text-zinc-900">mode de déclaration simplifié</strong> pour les revenus fonciers. Au lieu de déclarer vos charges réelles, vous bénéficiez d'un abattement forfaitaire sur vos loyers perçus.
                    </flux:text>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Ce régime est accessible aux propriétaires dont les revenus fonciers bruts annuels ne dépassent pas <strong class="text-zinc-900">15 000</strong>.
                    </flux:text>
                    <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-blue-500 flex items-center justify-center shrink-0">
                                <flux:icon.light-bulb class="size-5 text-white" />
                            </div>
                            <div>
                                <flux:text class="text-blue-900 font-semibold mb-1">Avantage principal</flux:text>
                                <flux:text class="text-blue-700 text-sm">
                                    Aucun justificatif de charges à fournir. L'abattement forfaitaire couvre toutes vos dépenses (travaux, assurances, gestion...).
                                </flux:text>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-100 rounded-3xl p-8">
                    <flux:heading class="!text-xl font-bold text-zinc-900 mb-6">Conditions d'éligibilité</flux:heading>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 bg-white rounded-xl p-4">
                            <div class="size-10 rounded-xl bg-emerald-100 flex items-center justify-center shrink-0">
                                <flux:icon.banknotes class="size-5 text-emerald-600" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Revenus fonciers bruts</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Inférieurs à 15 000 par an</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 bg-white rounded-xl p-4">
                            <div class="size-10 rounded-xl bg-blue-100 flex items-center justify-center shrink-0">
                                <flux:icon.home class="size-5 text-blue-600" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Location nue</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Non meublée, à usage d'habitation</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-4 bg-white rounded-xl p-4">
                            <div class="size-10 rounded-xl bg-amber-100 flex items-center justify-center shrink-0">
                                <flux:icon.user class="size-5 text-amber-600" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Propriétaire direct</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Ou via une SCI soumise à l'IR</flux:text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Comparaison Avant/Après --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Ce qui change avec le Statut du Bailleur Privé
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    L'abattement forfaitaire passe de 30% à 50%, soit une réduction significative de votre base imposable.
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
                            <flux:icon.receipt-percent class="size-10 text-zinc-400" />
                        </div>
                        <div class="text-5xl font-bold text-zinc-400 mb-2">30%</div>
                        <div class="text-zinc-500 text-lg mb-6">d'abattement forfaitaire</div>
                        <div class="bg-zinc-50 rounded-xl p-4">
                            <div class="text-zinc-500 text-sm mb-1">Sur 10 000 de loyers</div>
                            <div class="text-2xl font-bold text-zinc-600">7 000 imposables</div>
                        </div>
                    </div>
                </div>
                {{-- Après --}}
                <div class="bg-gradient-to-br from-blue-50 to-emerald-50 rounded-3xl p-8 text-center relative border-2 border-emerald-300">
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.star class="size-3" />
                            Bailleur Privé
                        </span>
                    </div>
                    <div class="pt-8">
                        <div class="size-20 rounded-2xl bg-emerald-500 flex items-center justify-center mx-auto mb-6">
                            <flux:icon.receipt-percent class="size-10 text-white" />
                        </div>
                        <div class="text-5xl font-bold text-emerald-600 mb-2">50%</div>
                        <div class="text-zinc-700 text-lg mb-6">d'abattement forfaitaire</div>
                        <div class="bg-white rounded-xl p-4">
                            <div class="text-zinc-500 text-sm mb-1">Sur 10 000 de loyers</div>
                            <div class="text-2xl font-bold text-emerald-600">5 000 imposables</div>
                        </div>
                        <div class="mt-4">
                            <span class="inline-flex items-center gap-1.5 px-4 py-2 bg-emerald-500 text-white rounded-full text-sm font-bold">
                                <flux:icon.arrow-down class="size-4" />
                                2 000 de moins
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Flèche centrale --}}
            <div class="flex justify-center mb-12">
                <div class="inline-flex items-center gap-3 px-6 py-3 bg-zinc-900 text-white rounded-full">
                    <span class="text-sm font-medium">Gain d'abattement</span>
                    <span class="text-2xl font-bold">+20 points</span>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Exemples Concrets --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.calculator class="size-4" />
                    Simulations
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Exemples Concrets d'Économie
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Voyez concrètement l'impact sur votre imposition selon vos revenus fonciers.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                {{-- Exemple 1 --}}
                <div class="bg-zinc-50 rounded-3xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-zinc-200 text-zinc-700 rounded-full text-sm font-medium mb-4">
                            Petit propriétaire
                        </div>
                        <div class="text-3xl font-bold text-zinc-900">6 000</div>
                        <div class="text-zinc-500 text-sm">de revenus fonciers/an</div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-500 text-sm">Avant (30%)</span>
                            <span class="text-zinc-700">4 200 imposables</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-500 text-sm">Après (50%)</span>
                            <span class="text-emerald-600 font-semibold">3 000 imposables</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-zinc-700 font-medium">Économie</span>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full font-bold">
                                1 200
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Exemple 2 --}}
                <div class="bg-blue-50 rounded-3xl p-6 border-2 border-blue-200 hover:shadow-lg transition-shadow relative">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-blue-500 text-white text-xs font-bold rounded-full shadow-lg">
                            Cas typique
                        </span>
                    </div>
                    <div class="text-center mb-6 pt-2">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-4">
                            Propriétaire standard
                        </div>
                        <div class="text-3xl font-bold text-zinc-900">10 000</div>
                        <div class="text-zinc-500 text-sm">de revenus fonciers/an</div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-blue-200">
                            <span class="text-zinc-500 text-sm">Avant (30%)</span>
                            <span class="text-zinc-700">7 000 imposables</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-blue-200">
                            <span class="text-zinc-500 text-sm">Après (50%)</span>
                            <span class="text-emerald-600 font-semibold">5 000 imposables</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-zinc-700 font-medium">Économie</span>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-500 text-white rounded-full font-bold">
                                2 000
                            </span>
                        </div>
                    </div>
                </div>

                {{-- Exemple 3 --}}
                <div class="bg-zinc-50 rounded-3xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-zinc-200 text-zinc-700 rounded-full text-sm font-medium mb-4">
                            Plafond micro-foncier
                        </div>
                        <div class="text-3xl font-bold text-zinc-900">15 000</div>
                        <div class="text-zinc-500 text-sm">de revenus fonciers/an</div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-500 text-sm">Avant (30%)</span>
                            <span class="text-zinc-700">10 500 imposables</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-500 text-sm">Après (50%)</span>
                            <span class="text-emerald-600 font-semibold">7 500 imposables</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-zinc-700 font-medium">Économie</span>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full font-bold">
                                3 000
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Impact sur l'Impôt --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6">
                    <flux:icon.chart-bar class="size-4" />
                    Impact réel
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Économie d'Impôt Selon Votre TMI
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg max-w-2xl mx-auto">
                    L'économie réelle dépend de votre tranche marginale d'imposition (TMI).
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                    <div class="text-center mb-8">
                        <flux:text class="text-zinc-400 text-sm mb-2">Exemple avec 10 000 de revenus fonciers</flux:text>
                        <flux:text class="text-white text-lg">Base imposable réduite de <strong class="text-emerald-400">2 000</strong></flux:text>
                    </div>
                    <div class="grid sm:grid-cols-4 gap-4">
                        <div class="bg-white/10 rounded-2xl p-5 text-center">
                            <div class="text-zinc-400 text-sm mb-2">TMI 11%</div>
                            <div class="text-2xl font-bold text-white mb-1">220</div>
                            <div class="text-emerald-400 text-sm">d'économie/an</div>
                        </div>
                        <div class="bg-white/10 rounded-2xl p-5 text-center">
                            <div class="text-zinc-400 text-sm mb-2">TMI 30%</div>
                            <div class="text-2xl font-bold text-white mb-1">600</div>
                            <div class="text-emerald-400 text-sm">d'économie/an</div>
                        </div>
                        <div class="bg-white/10 rounded-2xl p-5 text-center border border-emerald-500/50">
                            <div class="text-emerald-400 text-sm mb-2">TMI 41%</div>
                            <div class="text-3xl font-bold text-white mb-1">820</div>
                            <div class="text-emerald-400 text-sm">d'économie/an</div>
                        </div>
                        <div class="bg-white/10 rounded-2xl p-5 text-center">
                            <div class="text-zinc-400 text-sm mb-2">TMI 45%</div>
                            <div class="text-2xl font-bold text-white mb-1">900</div>
                            <div class="text-emerald-400 text-sm">d'économie/an</div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-white/10 text-center">
                        <flux:text class="text-zinc-400 text-sm">
                            + Prélèvements sociaux (17,2%) : économie supplémentaire de <strong class="text-white">344</strong>/an
                        </flux:text>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Micro-Foncier vs Régime Réel --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Micro-Foncier ou Régime Réel ?
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Choisissez le régime le plus avantageux selon votre situation.
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto bg-zinc-50 rounded-3xl overflow-hidden border border-zinc-200">
                {{-- Header --}}
                <div class="grid grid-cols-3 bg-zinc-900 text-white">
                    <div class="p-5 font-semibold">Critère</div>
                    <div class="p-5 font-semibold text-center bg-blue-600">Micro-Foncier</div>
                    <div class="p-5 font-semibold text-center">Régime Réel</div>
                </div>
                {{-- Rows --}}
                <div class="divide-y divide-zinc-200">
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Simplicité</div>
                        <div class="p-5 text-center bg-blue-50">
                            <span class="inline-flex items-center gap-1 text-emerald-600 font-semibold">
                                <flux:icon.check class="size-5" />
                                Très simple
                            </span>
                        </div>
                        <div class="p-5 text-center text-zinc-600">Comptabilité requise</div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Charges déductibles</div>
                        <div class="p-5 text-center bg-blue-50 text-zinc-600">Abattement 50%</div>
                        <div class="p-5 text-center text-zinc-900 font-semibold">Charges réelles</div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Idéal si</div>
                        <div class="p-5 text-center bg-blue-50 text-zinc-900 font-semibold">Charges < 50%</div>
                        <div class="p-5 text-center text-zinc-600">Charges > 50%</div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Plafond revenus</div>
                        <div class="p-5 text-center bg-blue-50 text-zinc-600">15 000/an</div>
                        <div class="p-5 text-center text-zinc-900 font-semibold">Illimité</div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Déficit foncier</div>
                        <div class="p-5 text-center bg-blue-50">
                            <span class="inline-flex items-center gap-1 text-red-600">
                                <flux:icon.x-mark class="size-5" />
                                Non
                            </span>
                        </div>
                        <div class="p-5 text-center">
                            <span class="inline-flex items-center gap-1 text-emerald-600 font-semibold">
                                <flux:icon.check class="size-5" />
                                Oui
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 max-w-4xl mx-auto">
                <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                    <div class="flex items-start gap-4">
                        <div class="size-10 rounded-xl bg-blue-500 flex items-center justify-center shrink-0">
                            <flux:icon.light-bulb class="size-5 text-white" />
                        </div>
                        <div>
                            <flux:text class="text-blue-900 font-semibold mb-1">Notre conseil</flux:text>
                            <flux:text class="text-blue-700">
                                Avec l'abattement porté à 50%, le régime micro-foncier devient encore plus attractif. Optez pour ce régime si vos charges réelles représentent moins de 50% de vos loyers.
                            </flux:text>
                        </div>
                    </div>
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

                {{-- Déficit Foncier --}}
                <a href="/amortissement#deficit-foncier" class="bg-white rounded-2xl p-6 border border-zinc-200 hover:shadow-lg hover:border-amber-300 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="size-14 rounded-2xl bg-amber-100 flex items-center justify-center shrink-0 group-hover:bg-amber-500 transition-colors">
                            <flux:icon.arrow-trending-up class="size-7 text-amber-600 group-hover:text-white transition-colors" />
                        </div>
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <flux:heading class="!text-lg font-bold text-zinc-900">Le Déficit Foncier</flux:heading>
                                <span class="px-2 py-0.5 bg-amber-100 text-amber-700 text-xs font-medium rounded-full">Levier n°3</span>
                            </div>
                            <flux:text class="text-zinc-600 text-sm mb-3">
                                Plafond porté à 40 000/an pour les travaux de rénovation énergétique.
                            </flux:text>
                            <span class="inline-flex items-center gap-1 text-amber-600 text-sm font-medium group-hover:gap-2 transition-all">
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
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-3xl p-8 sm:p-12 text-center">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Estimez votre économie d'impôt
                </flux:heading>
                <flux:text class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                    Utilisez notre simulateur pour calculer précisément l'avantage fiscal du micro-foncier amélioré.
                </flux:text>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/simulateur" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-blue-600 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                        <flux:icon.calculator class="size-5" />
                        Lancer la simulation
                    </a>
                    <a href="/contact" class="inline-flex items-center gap-2 px-8 py-4 bg-blue-700 text-white font-semibold rounded-xl hover:bg-blue-800 transition-colors">
                        Contacter un conseiller
                        <flux:icon.arrow-right class="size-5" />
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
