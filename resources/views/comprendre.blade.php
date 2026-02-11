<x-layouts.app title="Qu'est-ce que le Bailleur Privé ? - BailleurPrive.io">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-40"></div>
        {{-- Decorative gradient orbs --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-zinc-500/10 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                        <flux:icon.light-bulb class="size-4" />
                        Comprendre le dispositif
                    </div>
                    <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6 leading-tight">
                        Qu'est-ce que le Statut du Bailleur Privé ?
                    </flux:heading>
                    <flux:text class="text-zinc-300 text-lg sm:text-xl leading-relaxed mb-8">
                        Un nouveau dispositif fiscal inscrit dans la loi de finances 2026, conçu pour répondre à la crise du logement tout en offrant des avantages fiscaux attractifs aux investisseurs.
                    </flux:text>
                    <div class="flex flex-wrap gap-3">
                        <a href="/simulateur" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white text-zinc-900 font-medium rounded-lg hover:bg-zinc-100 transition-colors">
                            <flux:icon.calculator class="size-5" />
                            Simuler mon investissement
                        </a>
                        <a href="/comparatif" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 text-white font-medium rounded-lg hover:bg-white/20 transition-colors backdrop-blur-sm">
                            Comparer les dispositifs
                            <flux:icon.arrow-right class="size-4" />
                        </a>
                    </div>
                </div>
                {{-- Key highlights --}}
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-emerald-500/20 flex items-center justify-center mb-4">
                            <flux:icon.banknotes class="size-6 text-emerald-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">5,5%</div>
                        <div class="text-zinc-400 text-sm">Amortissement annuel max.</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-blue-500/20 flex items-center justify-center mb-4">
                            <flux:icon.calendar class="size-6 text-blue-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">9 ans</div>
                        <div class="text-zinc-400 text-sm">Engagement minimum</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-amber-500/20 flex items-center justify-center mb-4">
                            <flux:icon.home class="size-6 text-amber-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">Neuf</div>
                        <div class="text-zinc-400 text-sm">& ancien rénové éligibles</div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-sm rounded-2xl p-6 border border-white/10">
                        <div class="size-12 rounded-xl bg-purple-500/20 flex items-center justify-center mb-4">
                            <flux:icon.clock class="size-6 text-purple-400" />
                        </div>
                        <div class="text-3xl font-bold text-white mb-1">2028</div>
                        <div class="text-zinc-400 text-sm">Date limite d'acquisition</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Définition --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Définition
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Un <strong class="text-zinc-900">bailleur privé</strong> est un propriétaire (personne physique ou société civile) qui met en location un bien immobilier <strong class="text-zinc-900">sans exercer l'activité de loueur professionnel</strong>.
                    </flux:text>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed">
                        Le Statut du Bailleur Privé est un cadre fiscal spécifique qui permet à ces propriétaires de bénéficier d'avantages fiscaux en échange d'un engagement de location à loyer modéré.
                    </flux:text>
                </div>
                <div class="bg-zinc-100 rounded-3xl p-8">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="size-16 rounded-2xl bg-zinc-900 flex items-center justify-center">
                            <flux:icon.user class="size-8 text-white" />
                        </div>
                        <div>
                            <flux:heading class="!text-xl font-bold text-zinc-900">Bailleur Privé</flux:heading>
                            <flux:text class="text-zinc-500">Propriétaire non-professionnel</flux:text>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 bg-white rounded-xl p-4">
                            <flux:icon.check-circle class="size-6 text-emerald-500" />
                            <span class="text-zinc-700">Personne physique</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white rounded-xl p-4">
                            <flux:icon.check-circle class="size-6 text-emerald-500" />
                            <span class="text-zinc-700">Société civile (SCI)</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white rounded-xl p-4">
                            <flux:icon.x-circle class="size-6 text-red-500" />
                            <span class="text-zinc-700">Loueur professionnel exclu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Le Principe --}}
    <section class="py-16 sm:py-24 bg-zinc-50 overflow-hidden">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-16">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-200 text-zinc-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.sparkles class="size-4" />
                    Comment ça marche ?
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Le Principe en 4 étapes
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Un mécanisme d'<strong class="text-zinc-900">amortissement fiscal</strong> simple et efficace.
                </flux:text>
            </div>

            {{-- Timeline Desktop --}}
            <div class="hidden lg:block relative">
                {{-- Ligne de connexion --}}
                <div class="absolute top-16 left-[12.5%] right-[12.5%] h-1 bg-gradient-to-r from-zinc-300 via-zinc-400 to-emerald-400 rounded-full"></div>

                <div class="grid grid-cols-4 gap-8">
                    {{-- Etape 1 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="relative z-10 size-32 rounded-3xl bg-white shadow-lg border border-zinc-200 flex items-center justify-center mb-6 group-hover:shadow-xl group-hover:scale-105 transition-all duration-300">
                            <div class="absolute -top-3 -right-3 size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold shadow-lg">1</div>
                            <flux:icon.building-storefront class="size-12 text-zinc-700" />
                        </div>
                        <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Vous achetez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm leading-relaxed">
                            Un bien immobilier <strong class="text-zinc-800">neuf</strong> ou <strong class="text-zinc-800">rénové</strong> éligible au dispositif.
                        </flux:text>
                    </div>

                    {{-- Etape 2 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="relative z-10 size-32 rounded-3xl bg-white shadow-lg border border-zinc-200 flex items-center justify-center mb-6 group-hover:shadow-xl group-hover:scale-105 transition-all duration-300">
                            <div class="absolute -top-3 -right-3 size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold shadow-lg">2</div>
                            <flux:icon.key class="size-12 text-zinc-700" />
                        </div>
                        <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Vous louez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm leading-relaxed">
                            Location <strong class="text-zinc-800">nue</strong> pendant <strong class="text-zinc-800">9 ans minimum</strong>, en résidence principale.
                        </flux:text>
                    </div>

                    {{-- Etape 3 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="relative z-10 size-32 rounded-3xl bg-white shadow-lg border border-zinc-200 flex items-center justify-center mb-6 group-hover:shadow-xl group-hover:scale-105 transition-all duration-300">
                            <div class="absolute -top-3 -right-3 size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold shadow-lg">3</div>
                            <flux:icon.calculator class="size-12 text-zinc-700" />
                        </div>
                        <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Vous déduisez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm leading-relaxed">
                            Chaque année, jusqu'à <strong class="text-zinc-800">5,5%</strong> de la valeur du bien de vos revenus.
                        </flux:text>
                    </div>

                    {{-- Etape 4 --}}
                    <div class="relative flex flex-col items-center text-center group">
                        <div class="relative z-10 size-32 rounded-3xl bg-gradient-to-br from-emerald-500 to-emerald-600 shadow-lg flex items-center justify-center mb-6 group-hover:shadow-xl group-hover:scale-105 transition-all duration-300">
                            <div class="absolute -top-3 -right-3 size-8 rounded-full bg-emerald-700 text-white flex items-center justify-center text-sm font-bold shadow-lg">4</div>
                            <flux:icon.banknotes class="size-12 text-white" />
                        </div>
                        <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Vous économisez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm leading-relaxed">
                            Réduction de votre <strong class="text-emerald-600">base imposable</strong> et donc de vos impôts.
                        </flux:text>
                    </div>
                </div>
            </div>

            {{-- Timeline Mobile/Tablet --}}
            <div class="lg:hidden space-y-6">
                {{-- Etape 1 --}}
                <div class="flex items-start gap-4">
                    <div class="relative shrink-0">
                        <div class="size-16 rounded-2xl bg-white shadow-lg border border-zinc-200 flex items-center justify-center">
                            <flux:icon.building-storefront class="size-8 text-zinc-700" />
                        </div>
                        <div class="absolute -top-2 -right-2 size-6 rounded-full bg-zinc-900 text-white flex items-center justify-center text-xs font-bold">1</div>
                        <div class="absolute top-full left-1/2 -translate-x-1/2 w-0.5 h-6 bg-zinc-300"></div>
                    </div>
                    <div class="pt-2">
                        <flux:heading class="!text-lg font-bold text-zinc-900 mb-1">Vous achetez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm">Un bien immobilier neuf ou rénové éligible au dispositif.</flux:text>
                    </div>
                </div>

                {{-- Etape 2 --}}
                <div class="flex items-start gap-4">
                    <div class="relative shrink-0">
                        <div class="size-16 rounded-2xl bg-white shadow-lg border border-zinc-200 flex items-center justify-center">
                            <flux:icon.key class="size-8 text-zinc-700" />
                        </div>
                        <div class="absolute -top-2 -right-2 size-6 rounded-full bg-zinc-900 text-white flex items-center justify-center text-xs font-bold">2</div>
                        <div class="absolute top-full left-1/2 -translate-x-1/2 w-0.5 h-6 bg-zinc-300"></div>
                    </div>
                    <div class="pt-2">
                        <flux:heading class="!text-lg font-bold text-zinc-900 mb-1">Vous louez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm">Location nue pendant 9 ans minimum, en résidence principale.</flux:text>
                    </div>
                </div>

                {{-- Etape 3 --}}
                <div class="flex items-start gap-4">
                    <div class="relative shrink-0">
                        <div class="size-16 rounded-2xl bg-white shadow-lg border border-zinc-200 flex items-center justify-center">
                            <flux:icon.calculator class="size-8 text-zinc-700" />
                        </div>
                        <div class="absolute -top-2 -right-2 size-6 rounded-full bg-zinc-900 text-white flex items-center justify-center text-xs font-bold">3</div>
                        <div class="absolute top-full left-1/2 -translate-x-1/2 w-0.5 h-6 bg-gradient-to-b from-zinc-300 to-emerald-400"></div>
                    </div>
                    <div class="pt-2">
                        <flux:heading class="!text-lg font-bold text-zinc-900 mb-1">Vous déduisez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm">Chaque année, jusqu'à 5,5% de la valeur du bien de vos revenus.</flux:text>
                    </div>
                </div>

                {{-- Etape 4 --}}
                <div class="flex items-start gap-4">
                    <div class="relative shrink-0">
                        <div class="size-16 rounded-2xl bg-gradient-to-br from-emerald-500 to-emerald-600 shadow-lg flex items-center justify-center">
                            <flux:icon.banknotes class="size-8 text-white" />
                        </div>
                        <div class="absolute -top-2 -right-2 size-6 rounded-full bg-emerald-700 text-white flex items-center justify-center text-xs font-bold">4</div>
                    </div>
                    <div class="pt-2">
                        <flux:heading class="!text-lg font-bold text-zinc-900 mb-1">Vous économisez</flux:heading>
                        <flux:text class="text-zinc-600 text-sm">Réduction de votre base imposable et donc de vos impôts.</flux:text>
                    </div>
                </div>
            </div>

            {{-- Encart récapitulatif --}}
            <div class="mt-16 bg-white rounded-3xl border border-zinc-200 p-8 shadow-sm">
                <div class="flex flex-col md:flex-row items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center">
                            <flux:icon.light-bulb class="size-7 text-zinc-700" />
                        </div>
                        <div>
                            <flux:heading class="!text-lg font-bold text-zinc-900">Contrairement au Pinel</flux:heading>
                            <flux:text class="text-zinc-600 text-sm">Pas de réduction d'impôt directe, mais un amortissement fiscal annuel</flux:text>
                        </div>
                    </div>
                    <a href="/comparatif" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors whitespace-nowrap">
                        Voir le comparatif complet
                        <flux:icon.arrow-right class="size-4" />
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Contexte --}}
    <section class="py-16 sm:py-20 bg-zinc-900">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6">
                        <flux:icon.information-circle class="size-4" />
                        Le contexte
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-6">
                        Pourquoi ce dispositif ?
                    </flux:heading>
                    <flux:text class="text-zinc-300 text-lg leading-relaxed mb-6">
                        La France fait face à une <strong class="text-white">pénurie critique de logements locatifs</strong>. Ce dispositif vise à inciter les investisseurs privés à contribuer à l'offre de logements accessibles.
                    </flux:text>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-red-500/20 flex items-center justify-center shrink-0">
                                <flux:icon.exclamation-triangle class="size-5 text-red-400" />
                            </div>
                            <div>
                                <flux:text class="text-white font-semibold">600 000 logements</flux:text>
                                <flux:text class="text-zinc-400 text-sm">manquants sur le territoire français</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-amber-500/20 flex items-center justify-center shrink-0">
                                <flux:icon.x-circle class="size-5 text-amber-400" />
                            </div>
                            <div>
                                <flux:text class="text-white font-semibold">Fin du Pinel</flux:text>
                                <flux:text class="text-zinc-400 text-sm">Dispositif supprimé en 2024</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-blue-500/20 flex items-center justify-center shrink-0">
                                <flux:icon.building-office-2 class="size-5 text-blue-400" />
                            </div>
                            <div>
                                <flux:text class="text-white font-semibold">Crise de la construction</flux:text>
                                <flux:text class="text-zinc-400 text-sm">Besoins croissants en logements accessibles</flux:text>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                    <div class="text-center mb-8">
                        <flux:icon.flag class="size-12 text-white mx-auto mb-4" />
                        <flux:heading class="!text-2xl font-bold text-white">L'objectif gouvernemental</flux:heading>
                    </div>
                    <div class="bg-white/10 rounded-2xl p-6 text-center">
                        <div class="text-5xl font-bold text-white mb-2">50 000</div>
                        <div class="text-zinc-300">nouveaux logements par an</div>
                        <div class="text-zinc-400 text-sm mt-2">grâce à ce dispositif</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Période d'Application --}}
    <section class="py-16 sm:py-20 bg-white" id="calendrier">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900">
                    Période d'application
                </flux:heading>
                <flux:text class="text-zinc-600 mt-4 text-lg max-w-2xl mx-auto">
                    Les biens acquis entre la publication de la loi et le 31 décembre 2028 sont éligibles.
                </flux:text>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="relative">
                    {{-- Timeline line --}}
                    <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-zinc-200"></div>

                    {{-- 2026 --}}
                    <div class="relative flex items-center mb-12">
                        <div class="w-1/2 pr-8 text-right">
                            <flux:heading class="!text-xl font-bold text-zinc-900">2026</flux:heading>
                            <flux:text class="text-zinc-600">Entrée en vigueur</flux:text>
                            <flux:text class="text-zinc-500 text-sm">Loi de finances</flux:text>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 size-6 bg-emerald-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8">
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium">
                                <flux:icon.check class="size-4" />
                                Début
                            </div>
                        </div>
                    </div>

                    {{-- 2028 --}}
                    <div class="relative flex items-center">
                        <div class="w-1/2 pr-8 text-right">
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium">
                                <flux:icon.clock class="size-4" />
                                Date limite
                            </div>
                        </div>
                        <div class="absolute left-1/2 transform -translate-x-1/2 size-6 bg-amber-500 rounded-full border-4 border-white shadow-lg"></div>
                        <div class="w-1/2 pl-8">
                            <flux:heading class="!text-xl font-bold text-zinc-900">31/12/2028</flux:heading>
                            <flux:text class="text-zinc-600">Date limite d'acquisition</flux:text>
                            <flux:text class="text-zinc-500 text-sm">Pour être éligible</flux:text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Types de Biens --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900">
                    Types de biens concernés
                </flux:heading>
                <flux:text class="text-zinc-600 mt-4 text-lg max-w-2xl mx-auto">
                    Deux catégories de biens sont éligibles au Statut du Bailleur Privé.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                {{-- Logements Neufs --}}
                <flux:card class="!bg-white !border-zinc-200 p-8 hover:shadow-lg transition-shadow">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="size-14 rounded-2xl bg-zinc-900 flex items-center justify-center">
                            <flux:icon.building-office class="size-7 text-white" />
                        </div>
                        <flux:heading class="!text-2xl font-bold text-zinc-900">Logements Neufs</flux:heading>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <flux:icon.check-circle class="size-5 text-emerald-500 shrink-0 mt-0.5" />
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Conformes aux normes RE2020</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Réglementation environnementale en vigueur</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <flux:icon.check-circle class="size-5 text-emerald-500 shrink-0 mt-0.5" />
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Performance énergétique optimale</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Bâtiments basse consommation</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <flux:icon.star class="size-5 text-amber-500 shrink-0 mt-0.5" />
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Taux d'amortissement avantageux</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Jusqu'à 5,5% par an</flux:text>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 bg-zinc-100 rounded-xl p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-zinc-600">Amortissement max</span>
                            <span class="text-2xl font-bold text-zinc-900">5,5%</span>
                        </div>
                    </div>
                </flux:card>

                {{-- Logements Anciens Rénovés --}}
                <flux:card class="!bg-white !border-zinc-200 p-8 hover:shadow-lg transition-shadow">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="size-14 rounded-2xl bg-green-600 flex items-center justify-center">
                            <flux:icon.wrench-screwdriver class="size-7 text-white" />
                        </div>
                        <flux:heading class="!text-2xl font-bold text-zinc-900">Logements Anciens Rénovés</flux:heading>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-start gap-3">
                            <flux:icon.check-circle class="size-5 text-emerald-500 shrink-0 mt-0.5" />
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Travaux de rénovation énergétique</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Documentés et justifiés</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <flux:icon.check-circle class="size-5 text-emerald-500 shrink-0 mt-0.5" />
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Amélioration significative du DPE</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Diagnostic de performance énergétique</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <flux:icon.bolt class="size-5 text-amber-500 shrink-0 mt-0.5" />
                            <div>
                                <flux:text class="text-zinc-900 font-medium">Taux selon niveau de rénovation</flux:text>
                                <flux:text class="text-zinc-500 text-sm">De 3% à 4% selon les travaux</flux:text>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 bg-green-50 rounded-xl p-4">
                        <div class="flex justify-between items-center">
                            <span class="text-zinc-600">Amortissement</span>
                            <span class="text-2xl font-bold text-green-600">3% - 4%</span>
                        </div>
                    </div>
                </flux:card>
            </div>
        </div>
    </section>

    {{-- Section Comparatif Pinel --}}
    <section class="py-16 sm:py-20 bg-white" id="comparatif">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900">
                    Ce qui change par rapport au Pinel
                </flux:heading>
                <flux:text class="text-zinc-600 mt-4 text-lg max-w-2xl mx-auto">
                    Le Statut du Bailleur Privé apporte des évolutions significatives par rapport à l'ancien dispositif.
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto bg-zinc-100 rounded-3xl overflow-hidden">
                {{-- Header --}}
                <div class="grid grid-cols-3 bg-zinc-900 text-white">
                    <div class="p-5 font-semibold">Aspect</div>
                    <div class="p-5 font-semibold text-center bg-zinc-800">Pinel</div>
                    <div class="p-5 font-semibold text-center">Bailleur Privé</div>
                </div>

                {{-- Rows --}}
                <div class="divide-y divide-zinc-200">
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Mécanisme</div>
                        <div class="p-5 text-center bg-zinc-50 text-zinc-600">Réduction d'impôt</div>
                        <div class="p-5 text-center text-zinc-900 font-semibold">Amortissement fiscal</div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Durée d'engagement</div>
                        <div class="p-5 text-center bg-zinc-50 text-zinc-600">6, 9 ou 12 ans</div>
                        <div class="p-5 text-center text-zinc-900 font-semibold">9 ans minimum</div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Ancien rénové</div>
                        <div class="p-5 text-center bg-zinc-50">
                            <span class="inline-flex items-center gap-1 text-red-600">
                                <flux:icon.x-mark class="size-5" />
                                Non éligible
                            </span>
                        </div>
                        <div class="p-5 text-center">
                            <span class="inline-flex items-center gap-1 text-emerald-600 font-semibold">
                                <flux:icon.check class="size-5" />
                                Éligible
                            </span>
                        </div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Flexibilité loyers</div>
                        <div class="p-5 text-center bg-zinc-50 text-zinc-600">Plafonds stricts</div>
                        <div class="p-5 text-center text-zinc-900 font-semibold">3 niveaux au choix</div>
                    </div>
                    <div class="grid grid-cols-3">
                        <div class="p-5 text-zinc-700 font-medium">Statut</div>
                        <div class="p-5 text-center bg-zinc-50">
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium">
                                <flux:icon.x-circle class="size-4" />
                                Supprimé
                            </span>
                        </div>
                        <div class="p-5 text-center">
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium">
                                <flux:icon.check-circle class="size-4" />
                                Actif jusqu'en 2028
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Résumé --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 to-zinc-800">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white">
                    En résumé
                </flux:heading>
                <flux:text class="text-zinc-300 mt-4 text-lg max-w-2xl mx-auto">
                    Le Statut du Bailleur Privé est une opportunité d'investissement qui combine plusieurs avantages.
                </flux:text>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="size-14 rounded-2xl bg-white/20 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.banknotes class="size-7 text-white" />
                    </div>
                    <flux:text class="text-white font-semibold">Avantages fiscaux significatifs</flux:text>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="size-14 rounded-2xl bg-white/20 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.home class="size-7 text-white" />
                    </div>
                    <flux:text class="text-white font-semibold">Contribution à la crise du logement</flux:text>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="size-14 rounded-2xl bg-white/20 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.building-library class="size-7 text-white" />
                    </div>
                    <flux:text class="text-white font-semibold">Patrimoine immobilier de qualité</flux:text>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 text-center border border-white/20">
                    <div class="size-14 rounded-2xl bg-green-500/30 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.globe-europe-africa class="size-7 text-green-400" />
                    </div>
                    <flux:text class="text-white font-semibold">Engagement environnemental</flux:text>
                </div>
            </div>

            <div class="mt-12 text-center">
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ url('/avantages-fiscaux') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-zinc-900 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                        <flux:icon.presentation-chart-line class="size-5" />
                        Voir les avantages fiscaux
                    </a>
                    <a href="{{ url('/simulateur') }}" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-transparent text-white font-semibold rounded-xl border border-white/30 hover:bg-white/10 transition-colors">
                        <flux:icon.calculator class="size-5" />
                        Simuler mon investissement
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
