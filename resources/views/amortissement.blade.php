<x-layouts.app title="Amortissement et Avantages Fiscaux - BailleurPrive.io">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-40"></div>
        {{-- Decorative gradient orbs --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                        <flux:icon.banknotes class="size-4" />
                        Avantages Fiscaux
                    </div>
                    <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6 leading-tight">
                        L'Amortissement : votre levier fiscal
                    </flux:heading>
                    <flux:text class="text-zinc-300 text-lg sm:text-xl leading-relaxed mb-8">
                        Le Statut du Bailleur Privé offre <strong class="text-white">3 leviers fiscaux cumulables</strong> pour optimiser votre investissement immobilier.
                    </flux:text>
                    <div class="flex flex-wrap gap-3">
                        <a href="/simulateur" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white text-zinc-900 font-medium rounded-lg hover:bg-zinc-100 transition-colors">
                            <flux:icon.calculator class="size-5" />
                            Simuler mon investissement
                        </a>
                        <a href="/comprendre" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 text-white font-medium rounded-lg hover:bg-white/20 transition-colors backdrop-blur-sm">
                            Comprendre le dispositif
                            <flux:icon.arrow-right class="size-4" />
                        </a>
                    </div>
                </div>
                {{-- Key highlights --}}
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-emerald-500/20 flex items-center justify-center mb-4">
                            <flux:icon.arrow-trending-up class="size-6 text-emerald-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">5,5%</div>
                        <div class="text-zinc-400 text-sm">Amortissement annuel max.</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-blue-500/20 flex items-center justify-center mb-4">
                            <flux:icon.receipt-percent class="size-6 text-blue-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">50%</div>
                        <div class="text-zinc-400 text-sm">Abattement micro-foncier</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-amber-500/20 flex items-center justify-center mb-4">
                            <flux:icon.banknotes class="size-6 text-amber-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">12 000</div>
                        <div class="text-zinc-400 text-sm">Plafond annuel</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-purple-500/20 flex items-center justify-center mb-4">
                            <flux:icon.building-office class="size-6 text-purple-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">40 000</div>
                        <div class="text-zinc-400 text-sm">Déficit foncier max.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Amortissement du Bien --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-100 text-emerald-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.chart-bar class="size-4" />
                    Levier n°1
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    L'Amortissement du Bien
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-3xl mx-auto">
                    Vous pouvez déduire chaque année une partie de la valeur de votre bien de vos revenus fonciers. L'amortissement porte sur <strong class="text-zinc-900">80% de la valeur du bien</strong> (hors terrain).
                </flux:text>
            </div>

            {{-- Taux Logements Neufs --}}
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="size-10 rounded-xl bg-zinc-900 flex items-center justify-center">
                        <flux:icon.building-office-2 class="size-5 text-white" />
                    </div>
                    <flux:heading class="!text-2xl font-bold text-zinc-900">Logements Neufs</flux:heading>
                </div>
                <div class="bg-zinc-50 rounded-3xl overflow-hidden border border-zinc-200">
                    {{-- Header --}}
                    <div class="grid grid-cols-4 bg-zinc-900 text-white">
                        <div class="p-5 font-semibold">Niveau de Loyer</div>
                        <div class="p-5 font-semibold text-center">Taux Annuel</div>
                        <div class="p-5 font-semibold text-center">Plafond Annuel</div>
                        <div class="p-5 font-semibold text-center">Sur 9 ans</div>
                    </div>
                    {{-- Rows --}}
                    <div class="divide-y divide-zinc-200">
                        <div class="grid grid-cols-4 hover:bg-zinc-100 transition-colors">
                            <div class="p-5 flex items-center gap-3">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                    Intermédiaire
                                </span>
                            </div>
                            <div class="p-5 text-center text-zinc-900 font-semibold text-lg">3,5%</div>
                            <div class="p-5 text-center text-zinc-600">8 000 </div>
                            <div class="p-5 text-center text-emerald-600 font-bold">72 000 </div>
                        </div>
                        <div class="grid grid-cols-4 hover:bg-zinc-100 transition-colors">
                            <div class="p-5 flex items-center gap-3">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium">
                                    Social
                                </span>
                            </div>
                            <div class="p-5 text-center text-zinc-900 font-semibold text-lg">4,5%</div>
                            <div class="p-5 text-center text-zinc-600">10 000 </div>
                            <div class="p-5 text-center text-emerald-600 font-bold">90 000 </div>
                        </div>
                        <div class="grid grid-cols-4 bg-emerald-50 hover:bg-emerald-100 transition-colors">
                            <div class="p-5 flex items-center gap-3">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-500 text-white rounded-full text-sm font-medium">
                                    <flux:icon.star class="size-3.5" />
                                    Très Social
                                </span>
                            </div>
                            <div class="p-5 text-center text-emerald-700 font-bold text-lg">5,5%</div>
                            <div class="p-5 text-center text-zinc-600">12 000 </div>
                            <div class="p-5 text-center text-emerald-700 font-bold">108 000 </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Taux Logements Rénovés --}}
            <div class="mb-12">
                <div class="flex items-center gap-3 mb-6">
                    <div class="size-10 rounded-xl bg-green-600 flex items-center justify-center">
                        <flux:icon.wrench-screwdriver class="size-5 text-white" />
                    </div>
                    <flux:heading class="!text-2xl font-bold text-zinc-900">Logements Anciens Rénovés</flux:heading>
                </div>
                <div class="bg-green-50 rounded-3xl p-8 border border-green-200">
                    <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                        <div>
                            <flux:text class="text-zinc-700 text-lg mb-2">
                                Pour les logements anciens avec travaux de rénovation énergétique
                            </flux:text>
                            <flux:text class="text-zinc-500">
                                Le taux varie selon le niveau de rénovation et l'amélioration du DPE
                            </flux:text>
                        </div>
                        <div class="flex items-center gap-4">
                            <div class="text-center px-6 py-4 bg-white rounded-2xl shadow-sm">
                                <div class="text-3xl font-bold text-green-600">3% - 4%</div>
                                <div class="text-zinc-500 text-sm">Taux annuel</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Info Box --}}
            <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-3xl p-8 text-white">
                <div class="flex flex-col md:flex-row items-start gap-6">
                    <div class="size-14 rounded-2xl bg-white/20 flex items-center justify-center shrink-0">
                        <flux:icon.light-bulb class="size-7 text-white" />
                    </div>
                    <div>
                        <flux:heading class="!text-xl font-bold text-white mb-2">Le saviez-vous ?</flux:heading>
                        <flux:text class="text-emerald-100 text-lg">
                            Plus votre loyer est bas (social ou très social), plus votre avantage fiscal est important. C'est un système <strong class="text-white">gagnant-gagnant</strong> : vous payez moins d'impôts et vos locataires paient un loyer accessible.
                        </flux:text>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Micro-Foncier Amélioré --}}
    <section id="micro-foncier" class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.receipt-percent class="size-4" />
                        Levier n°2
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Le Régime Micro-Foncier Amélioré
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Le régime micro-foncier permet une déclaration simplifiée avec un abattement forfaitaire sur vos revenus fonciers.
                    </flux:text>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-zinc-200 flex items-center justify-center shrink-0">
                                <flux:icon.x-mark class="size-5 text-zinc-500" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-500 font-semibold">Régime actuel</flux:text>
                                <flux:text class="text-zinc-400">Abattement forfaitaire de 30%</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-semibold">Avec le Statut Bailleur Privé</flux:text>
                                <flux:text class="text-emerald-600 font-bold text-lg">Abattement forfaitaire de 50%</flux:text>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Exemple concret --}}
                <div class="bg-white rounded-3xl p-8 shadow-lg border border-zinc-200">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="size-10 rounded-xl bg-blue-500 flex items-center justify-center">
                            <flux:icon.calculator class="size-5 text-white" />
                        </div>
                        <flux:heading class="!text-xl font-bold text-zinc-900">Exemple Concret</flux:heading>
                    </div>
                    <div class="space-y-4">
                        {{-- Row 1 --}}
                        <div class="bg-zinc-50 rounded-2xl p-5">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-zinc-600">Revenus fonciers</span>
                                <span class="text-zinc-900 font-bold text-lg">10 000 </span>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center p-3 bg-zinc-200 rounded-xl">
                                    <div class="text-zinc-500 text-sm">Avant (30%)</div>
                                    <div class="text-zinc-700 font-semibold">7 000  imposables</div>
                                </div>
                                <div class="text-center p-3 bg-emerald-100 rounded-xl">
                                    <div class="text-emerald-600 text-sm">Après (50%)</div>
                                    <div class="text-emerald-700 font-bold">5 000  imposables</div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-emerald-500 text-white rounded-full text-sm font-bold">
                                    <flux:icon.arrow-down class="size-4" />
                                    Économie : 2 000
                                </span>
                            </div>
                        </div>
                        {{-- Row 2 --}}
                        <div class="bg-zinc-50 rounded-2xl p-5">
                            <div class="flex items-center justify-between mb-3">
                                <span class="text-zinc-600">Revenus fonciers</span>
                                <span class="text-zinc-900 font-bold text-lg">12 000 </span>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="text-center p-3 bg-zinc-200 rounded-xl">
                                    <div class="text-zinc-500 text-sm">Avant (30%)</div>
                                    <div class="text-zinc-700 font-semibold">8 400  imposables</div>
                                </div>
                                <div class="text-center p-3 bg-emerald-100 rounded-xl">
                                    <div class="text-emerald-600 text-sm">Après (50%)</div>
                                    <div class="text-emerald-700 font-bold">6 000  imposables</div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-emerald-500 text-white rounded-full text-sm font-bold">
                                    <flux:icon.arrow-down class="size-4" />
                                    Économie : 2 400
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Déficit Foncier Renforcé --}}
    <section id="deficit-foncier" class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 text-amber-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.arrow-trending-down class="size-4" />
                    Levier n°3
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Le Déficit Foncier Renforcé
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-3xl mx-auto">
                    Lorsque vos charges (travaux, intérêts d'emprunt, etc.) dépassent vos revenus fonciers, vous créez un <strong class="text-zinc-900">déficit foncier</strong> déductible de votre revenu global.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-12">
                {{-- Actuellement --}}
                <div class="bg-zinc-100 rounded-3xl p-8 text-center relative border border-zinc-200">
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-zinc-300 text-zinc-600 text-xs font-bold rounded-full">
                            Actuellement
                        </span>
                    </div>
                    <div class="pt-8">
                        <div class="size-16 rounded-2xl bg-zinc-200 flex items-center justify-center mx-auto mb-4">
                            <flux:icon.banknotes class="size-8 text-zinc-500" />
                        </div>
                        <div class="text-4xl font-bold text-zinc-500 mb-2">10 700 </div>
                        <div class="text-zinc-400">Plafond annuel</div>
                    </div>
                </div>
                {{-- Avec le dispositif --}}
                <div class="bg-gradient-to-br from-amber-50 to-amber-100 rounded-3xl p-8 text-center relative border-2 border-amber-300">
                    <div class="absolute top-4 left-4">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-amber-500 text-white text-xs font-bold rounded-full">
                            <flux:icon.star class="size-3" />
                            Nouveau
                        </span>
                    </div>
                    <div class="pt-8">
                        <div class="size-16 rounded-2xl bg-amber-500 flex items-center justify-center mx-auto mb-4">
                            <flux:icon.banknotes class="size-8 text-white" />
                        </div>
                        <div class="text-4xl font-bold text-amber-600 mb-2">40 000 </div>
                        <div class="text-amber-700 font-medium">Plafond annuel</div>
                        <div class="mt-4">
                            <span class="inline-flex items-center gap-1.5 px-4 py-2 bg-amber-500 text-white rounded-full text-sm font-bold">
                                <flux:icon.arrow-up class="size-4" />
                                x3,7 le plafond actuel
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Avantages --}}
            <div class="bg-zinc-900 rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="flex items-center gap-3 mb-6">
                    <div class="size-10 rounded-xl bg-white/10 flex items-center justify-center">
                        <flux:icon.check-badge class="size-5 text-white" />
                    </div>
                    <flux:heading class="!text-xl font-bold text-white">Particulièrement intéressant pour :</flux:heading>
                </div>
                <div class="grid sm:grid-cols-3 gap-4">
                    <div class="bg-white/10 rounded-2xl p-5 text-center">
                        <flux:icon.bolt class="size-8 text-amber-400 mx-auto mb-3" />
                        <flux:text class="text-white font-medium">Travaux de rénovation énergétique</flux:text>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-5 text-center">
                        <flux:icon.chart-bar class="size-8 text-emerald-400 mx-auto mb-3" />
                        <flux:text class="text-white font-medium">Amélioration du DPE</flux:text>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-5 text-center">
                        <flux:icon.user class="size-8 text-blue-400 mx-auto mb-3" />
                        <flux:text class="text-white font-medium">Investisseurs à forte imposition</flux:text>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Simulation d'Économie --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6">
                    <flux:icon.calculator class="size-4" />
                    Simulation
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Exemple d'Économie
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg max-w-2xl mx-auto">
                    Cas pratique d'un investissement dans un logement neuf
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                    <div class="grid md:grid-cols-2 gap-8">
                        {{-- Paramètres --}}
                        <div>
                            <flux:heading class="!text-lg font-bold text-white mb-6">Paramètres</flux:heading>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">Prix du bien</span>
                                    <span class="text-white font-semibold">200 000 </span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">Base amortissable (80%)</span>
                                    <span class="text-white font-semibold">160 000 </span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">Niveau de loyer</span>
                                    <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-500/20 text-amber-400 rounded-full text-sm font-medium">
                                        Social (4,5%)
                                    </span>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b border-white/10">
                                    <span class="text-zinc-400">Amortissement annuel</span>
                                    <span class="text-white font-semibold">7 200 </span>
                                </div>
                                <div class="flex items-center justify-between py-3">
                                    <span class="text-zinc-400">TMI investisseur</span>
                                    <span class="text-white font-semibold">30%</span>
                                </div>
                            </div>
                        </div>
                        {{-- Résultats --}}
                        <div class="bg-emerald-500/20 rounded-2xl p-6 border border-emerald-500/30">
                            <flux:heading class="!text-lg font-bold text-emerald-400 mb-6">Économie d'Impôt</flux:heading>
                            <div class="space-y-6">
                                <div class="text-center p-6 bg-white/10 rounded-2xl">
                                    <div class="text-zinc-400 text-sm mb-2">Économie annuelle</div>
                                    <div class="text-4xl font-bold text-white mb-1">2 160 </div>
                                    <div class="text-zinc-500 text-sm">7 200 × 30%</div>
                                </div>
                                <div class="text-center p-6 bg-emerald-500 rounded-2xl">
                                    <div class="text-emerald-100 text-sm mb-2">Sur 9 ans</div>
                                    <div class="text-5xl font-bold text-white mb-1">19 440 </div>
                                    <div class="text-emerald-100 text-sm">d'économie totale</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- CTA --}}
                <div class="mt-8 text-center">
                    <a href="/simulateur" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-zinc-900 font-semibold rounded-xl hover:bg-zinc-100 transition-colors text-lg">
                        <flux:icon.calculator class="size-6" />
                        Simuler avec mes propres chiffres
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Récapitulatif --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Récapitulatif des Avantages
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Les différents avantages fiscaux peuvent se <strong class="text-zinc-900">cumuler</strong> selon votre situation.
                </flux:text>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto mb-12">
                <div class="bg-zinc-50 rounded-2xl p-6 text-center border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.building-office-2 class="size-7 text-emerald-600" />
                    </div>
                    <flux:text class="text-zinc-500 text-sm mb-1">Amortissement neuf</flux:text>
                    <flux:text class="text-zinc-900 font-bold text-xl">5,5% / 12 000/an</flux:text>
                </div>
                <div class="bg-zinc-50 rounded-2xl p-6 text-center border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-green-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.wrench-screwdriver class="size-7 text-green-600" />
                    </div>
                    <flux:text class="text-zinc-500 text-sm mb-1">Amortissement rénové</flux:text>
                    <flux:text class="text-zinc-900 font-bold text-xl">4% par an</flux:text>
                </div>
                <div class="bg-zinc-50 rounded-2xl p-6 text-center border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-blue-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.receipt-percent class="size-7 text-blue-600" />
                    </div>
                    <flux:text class="text-zinc-500 text-sm mb-1">Micro-foncier</flux:text>
                    <flux:text class="text-zinc-900 font-bold text-xl">Abattement 50%</flux:text>
                </div>
                <div class="bg-zinc-50 rounded-2xl p-6 text-center border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-amber-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.banknotes class="size-7 text-amber-600" />
                    </div>
                    <flux:text class="text-zinc-500 text-sm mb-1">Déficit foncier</flux:text>
                    <flux:text class="text-zinc-900 font-bold text-xl">Jusqu'à 40 000/an</flux:text>
                </div>
            </div>

            {{-- Cumul des avantages --}}
            <div class="bg-zinc-900 rounded-3xl p-8 max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="size-14 rounded-2xl bg-white/10 flex items-center justify-center">
                            <flux:icon.puzzle-piece class="size-7 text-white" />
                        </div>
                        <div>
                            <flux:heading class="!text-lg font-bold text-white">Cumul des Avantages</flux:heading>
                            <flux:text class="text-zinc-400">Amortissement + Déficit foncier = Double optimisation</flux:text>
                        </div>
                    </div>
                    <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-zinc-900 font-medium rounded-xl hover:bg-zinc-100 transition-colors whitespace-nowrap">
                        Consulter un conseiller
                        <flux:icon.arrow-right class="size-4" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Final --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-3xl p-8 sm:p-12 text-center">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Prêt à calculer votre économie ?
                </flux:heading>
                <flux:text class="text-emerald-100 text-lg mb-8 max-w-2xl mx-auto">
                    Utilisez notre simulateur pour estimer votre avantage fiscal personnalisé.
                </flux:text>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/simulateur" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-emerald-600 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                        <flux:icon.calculator class="size-5" />
                        Lancer la simulation
                    </a>
                    <a href="/eligibilite" class="inline-flex items-center gap-2 px-8 py-4 bg-emerald-700 text-white font-semibold rounded-xl hover:bg-emerald-800 transition-colors">
                        Suis-je éligible ?
                        <flux:icon.arrow-right class="size-5" />
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
