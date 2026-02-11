<x-layouts.app title="Conditions d'Éligibilité - BailleurPrive.io">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-40"></div>
        {{-- Decorative gradient orbs --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                        <flux:icon.check-badge class="size-4" />
                        Conditions d'éligibilité
                    </div>
                    <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6 leading-tight">
                        Suis-je éligible au Statut du Bailleur Privé ?
                    </flux:heading>
                    <flux:text class="text-zinc-300 text-lg sm:text-xl leading-relaxed mb-8">
                        Vérifiez en quelques minutes si vous remplissez <strong class="text-white">toutes les conditions</strong> pour bénéficier des avantages fiscaux du dispositif.
                    </flux:text>
                    <div class="flex flex-wrap gap-3">
                        <a href="/simulateur" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white text-zinc-900 font-medium rounded-lg hover:bg-zinc-100 transition-colors">
                            <flux:icon.calculator class="size-5" />
                            Simuler mon investissement
                        </a>
                        <a href="/amortissement" class="inline-flex items-center gap-2 px-5 py-2.5 bg-white/10 text-white font-medium rounded-lg hover:bg-white/20 transition-colors backdrop-blur-sm">
                            Voir les avantages fiscaux
                            <flux:icon.arrow-right class="size-4" />
                        </a>
                    </div>
                </div>
                {{-- Quick check --}}
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                    <div class="text-center mb-6">
                        <div class="size-16 rounded-2xl bg-emerald-500/20 flex items-center justify-center mx-auto mb-4">
                            <flux:icon.clipboard-document-check class="size-8 text-emerald-400" />
                        </div>
                        <flux:heading class="!text-xl font-bold text-white">4 catégories de critères</flux:heading>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center gap-3 bg-white/10 rounded-xl p-4">
                            <div class="size-8 rounded-lg bg-blue-500/20 flex items-center justify-center">
                                <flux:icon.user class="size-4 text-blue-400" />
                            </div>
                            <span class="text-zinc-300">Conditions sur l'investisseur</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white/10 rounded-xl p-4">
                            <div class="size-8 rounded-lg bg-amber-500/20 flex items-center justify-center">
                                <flux:icon.home class="size-4 text-amber-400" />
                            </div>
                            <span class="text-zinc-300">Conditions sur le bien</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white/10 rounded-xl p-4">
                            <div class="size-8 rounded-lg bg-purple-500/20 flex items-center justify-center">
                                <flux:icon.key class="size-4 text-purple-400" />
                            </div>
                            <span class="text-zinc-300">Conditions de location</span>
                        </div>
                        <div class="flex items-center gap-3 bg-white/10 rounded-xl p-4">
                            <div class="size-8 rounded-lg bg-emerald-500/20 flex items-center justify-center">
                                <flux:icon.calendar class="size-4 text-emerald-400" />
                            </div>
                            <span class="text-zinc-300">Conditions temporelles</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Conditions Investisseur --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.user class="size-4" />
                        Critère n°1
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Conditions sur l'investisseur
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Vous devez être <strong class="text-zinc-900">bailleur non-professionnel</strong>, c'est-à-dire que la location immobilière ne constitue pas votre activité principale.
                    </flux:text>
                    <div class="space-y-4">
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-red-100 flex items-center justify-center shrink-0">
                                <flux:icon.x-mark class="size-5 text-red-600" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-semibold">Non inscrit au RCS</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Vous ne devez pas être inscrit au Registre du Commerce comme loueur professionnel</flux:text>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="size-10 rounded-xl bg-red-100 flex items-center justify-center shrink-0">
                                <flux:icon.x-mark class="size-5 text-red-600" />
                            </div>
                            <div>
                                <flux:text class="text-zinc-900 font-semibold">Revenus locatifs non majoritaires</flux:text>
                                <flux:text class="text-zinc-500 text-sm">Les revenus locatifs ne doivent pas constituer votre activité principale</flux:text>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-zinc-50 rounded-3xl p-8 border border-zinc-200">
                    <flux:heading class="!text-xl font-bold text-zinc-900 mb-6">Qui peut investir ?</flux:heading>
                    <div class="space-y-4">
                        <div class="flex items-center justify-between bg-white rounded-xl p-4 border border-zinc-200">
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-xl bg-blue-100 flex items-center justify-center">
                                    <flux:icon.user class="size-5 text-blue-600" />
                                </div>
                                <span class="text-zinc-900 font-medium">Personne physique</span>
                            </div>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium">
                                <flux:icon.check class="size-4" />
                                Éligible
                            </span>
                        </div>
                        <div class="flex items-center justify-between bg-white rounded-xl p-4 border border-zinc-200">
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-xl bg-purple-100 flex items-center justify-center">
                                    <flux:icon.building-office class="size-5 text-purple-600" />
                                </div>
                                <span class="text-zinc-900 font-medium">Société civile (SCI)</span>
                            </div>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium">
                                <flux:icon.check class="size-4" />
                                Éligible
                            </span>
                        </div>
                        <div class="flex items-center justify-between bg-zinc-100 rounded-xl p-4 border border-zinc-200">
                            <div class="flex items-center gap-3">
                                <div class="size-10 rounded-xl bg-zinc-200 flex items-center justify-center">
                                    <flux:icon.briefcase class="size-5 text-zinc-500" />
                                </div>
                                <span class="text-zinc-500 font-medium">Loueur professionnel</span>
                            </div>
                            <span class="inline-flex items-center gap-1 px-3 py-1 bg-red-100 text-red-700 rounded-full text-sm font-medium">
                                <flux:icon.x-mark class="size-4" />
                                Non éligible
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Conditions sur le Bien --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-100 text-amber-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.home class="size-4" />
                    Critère n°2
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Conditions sur le bien
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Le bien immobilier doit respecter des critères précis de type, d'usage et de performance énergétique.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto mb-12">
                {{-- Type de location --}}
                <div class="bg-white rounded-2xl p-6 border border-zinc-200 text-center">
                    <div class="size-16 rounded-2xl bg-amber-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.home class="size-8 text-amber-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Type de location</flux:heading>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-50 text-amber-800 rounded-full font-semibold">
                        Location nue
                    </div>
                    <flux:text class="text-zinc-500 text-sm mt-3">
                        Non meublée uniquement
                    </flux:text>
                </div>

                {{-- Usage --}}
                <div class="bg-white rounded-2xl p-6 border border-zinc-200 text-center">
                    <div class="size-16 rounded-2xl bg-blue-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.user-group class="size-8 text-blue-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Usage du bien</flux:heading>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 text-blue-800 rounded-full font-semibold">
                        Résidence principale
                    </div>
                    <flux:text class="text-zinc-500 text-sm mt-3">
                        Du locataire exclusivement
                    </flux:text>
                </div>

                {{-- État --}}
                <div class="bg-white rounded-2xl p-6 border border-zinc-200 text-center">
                    <div class="size-16 rounded-2xl bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                        <flux:icon.sparkles class="size-8 text-emerald-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">État du bien</flux:heading>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-emerald-50 text-emerald-800 rounded-full font-semibold">
                        Neuf ou rénové
                    </div>
                    <flux:text class="text-zinc-500 text-sm mt-3">
                        Avec performances énergétiques
                    </flux:text>
                </div>
            </div>

            {{-- Performance énergétique --}}
            <div class="max-w-4xl mx-auto">
                <flux:heading class="!text-xl font-bold text-zinc-900 mb-6 text-center">Exigences de performance énergétique</flux:heading>
                <div class="grid md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-2xl p-6 border border-zinc-200">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="size-12 rounded-xl bg-zinc-900 flex items-center justify-center">
                                <flux:icon.building-office-2 class="size-6 text-white" />
                            </div>
                            <flux:heading class="!text-lg font-bold text-zinc-900">Logement Neuf</flux:heading>
                        </div>
                        <div class="bg-zinc-50 rounded-xl p-4">
                            <div class="flex items-center gap-3">
                                <flux:icon.check-circle class="size-5 text-emerald-500" />
                                <span class="text-zinc-700">Conforme aux normes <strong class="text-zinc-900">RE2020</strong></span>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded-2xl p-6 border border-zinc-200">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="size-12 rounded-xl bg-green-600 flex items-center justify-center">
                                <flux:icon.wrench-screwdriver class="size-6 text-white" />
                            </div>
                            <flux:heading class="!text-lg font-bold text-zinc-900">Logement Ancien</flux:heading>
                        </div>
                        <div class="bg-green-50 rounded-xl p-4">
                            <div class="flex items-center gap-3">
                                <flux:icon.check-circle class="size-5 text-emerald-500" />
                                <span class="text-zinc-700">Travaux de <strong class="text-zinc-900">rénovation énergétique</strong> documentés</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Conditions de Location --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-start">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-purple-100 text-purple-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.key class="size-4" />
                        Critère n°3
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Conditions de location
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-8">
                        Vous vous engagez à louer le bien pendant une durée minimale et à respecter des plafonds de loyers selon la zone géographique.
                    </flux:text>

                    {{-- Durée d'engagement --}}
                    <div class="bg-purple-50 rounded-2xl p-6 border border-purple-100 mb-6">
                        <div class="flex items-center gap-4">
                            <div class="size-16 rounded-2xl bg-purple-500 flex items-center justify-center">
                                <span class="text-2xl font-bold text-white">9</span>
                            </div>
                            <div>
                                <flux:heading class="!text-xl font-bold text-zinc-900">ans minimum</flux:heading>
                                <flux:text class="text-zinc-600">de location continue obligatoire</flux:text>
                            </div>
                        </div>
                    </div>

                    {{-- Plafonds de loyers --}}
                    <div class="bg-zinc-50 rounded-2xl p-6 border border-zinc-200">
                        <flux:heading class="!text-lg font-bold text-zinc-900 mb-4">Plafonds de loyers</flux:heading>
                        <flux:text class="text-zinc-600 mb-4">
                            Les loyers doivent respecter des plafonds déterminés selon :
                        </flux:text>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3">
                                <flux:icon.map-pin class="size-5 text-purple-500" />
                                <span class="text-zinc-700">La <strong class="text-zinc-900">zone géographique</strong> (tendue ou non)</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <flux:icon.adjustments-horizontal class="size-5 text-purple-500" />
                                <span class="text-zinc-700">Le <strong class="text-zinc-900">niveau de loyer</strong> choisi</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Restrictions --}}
                <div>
                    <div class="bg-red-50 rounded-2xl p-6 border border-red-100 mb-6">
                        <div class="flex items-start gap-4">
                            <div class="size-12 rounded-xl bg-red-500 flex items-center justify-center shrink-0">
                                <flux:icon.exclamation-triangle class="size-6 text-white" />
                            </div>
                            <div>
                                <flux:heading class="!text-lg font-bold text-red-900 mb-2">Restriction familiale</flux:heading>
                                <flux:text class="text-red-700">
                                    La location aux <strong>ascendants</strong> (parents, grands-parents) et <strong>descendants</strong> (enfants, petits-enfants) jusqu'au 2ème degré est <strong>interdite</strong>.
                                </flux:text>
                            </div>
                        </div>
                    </div>

                    <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                        <div class="flex items-start gap-4">
                            <div class="size-12 rounded-xl bg-blue-500 flex items-center justify-center shrink-0">
                                <flux:icon.home class="size-6 text-white" />
                            </div>
                            <div>
                                <flux:heading class="!text-lg font-bold text-blue-900 mb-2">Résidence principale</flux:heading>
                                <flux:text class="text-blue-700">
                                    Le bien doit obligatoirement constituer la <strong>résidence principale</strong> du locataire. Pas de location saisonnière ou secondaire.
                                </flux:text>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Conditions Temporelles --}}
    <section class="py-16 sm:py-20 bg-zinc-900">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6">
                    <flux:icon.calendar class="size-4" />
                    Critère n°4
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Conditions temporelles
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg max-w-2xl mx-auto">
                    Seuls les biens acquis pendant la période d'application du dispositif sont éligibles.
                </flux:text>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                    <div class="flex items-center justify-between gap-8">
                        <div class="text-center flex-1">
                            <div class="size-20 rounded-2xl bg-emerald-500/20 flex items-center justify-center mx-auto mb-4">
                                <flux:icon.play class="size-10 text-emerald-400" />
                            </div>
                            <div class="text-3xl font-bold text-white mb-1">2026</div>
                            <div class="text-zinc-400">Publication de la loi</div>
                            <div class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-500/20 text-emerald-400 rounded-full text-sm font-medium mt-3">
                                <flux:icon.check class="size-3.5" />
                                Début
                            </div>
                        </div>
                        <div class="flex-1 flex items-center justify-center">
                            <div class="w-full h-2 bg-gradient-to-r from-emerald-500 to-amber-500 rounded-full"></div>
                        </div>
                        <div class="text-center flex-1">
                            <div class="size-20 rounded-2xl bg-amber-500/20 flex items-center justify-center mx-auto mb-4">
                                <flux:icon.flag class="size-10 text-amber-400" />
                            </div>
                            <div class="text-3xl font-bold text-white mb-1">31/12/2028</div>
                            <div class="text-zinc-400">Date limite d'acquisition</div>
                            <div class="inline-flex items-center gap-1 px-3 py-1 bg-amber-500/20 text-amber-400 rounded-full text-sm font-medium mt-3">
                                <flux:icon.clock class="size-3.5" />
                                Fin
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Les 3 Niveaux de Loyers --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Les 3 niveaux de loyers
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Vous choisissez le niveau de loyer qui détermine votre avantage fiscal. Plus le loyer est accessible, plus l'avantage est important.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                {{-- Intermédiaire --}}
                <div class="bg-zinc-50 rounded-3xl p-6 border border-zinc-200 hover:shadow-lg transition-shadow">
                    <div class="text-center mb-6">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium mb-4">
                            Intermédiaire
                        </div>
                        <div class="text-4xl font-bold text-zinc-900 mb-1">3,5%</div>
                        <div class="text-zinc-500 text-sm">d'amortissement annuel</div>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between py-2 border-b border-zinc-200">
                            <span class="text-zinc-600 text-sm">Plafond annuel</span>
                            <span class="text-zinc-900 font-semibold">8 000</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-zinc-200">
                            <span class="text-zinc-600 text-sm">Sur 9 ans</span>
                            <span class="text-zinc-900 font-semibold">72 000</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <span class="text-zinc-600 text-sm">Public cible</span>
                            <span class="text-zinc-700 text-sm">Revenus moyens</span>
                        </div>
                    </div>
                    <div class="bg-blue-50 rounded-xl p-4 text-center">
                        <flux:text class="text-blue-700 text-sm">Loyers légèrement sous le marché</flux:text>
                    </div>
                </div>

                {{-- Social --}}
                <div class="bg-amber-50 rounded-3xl p-6 border-2 border-amber-200 hover:shadow-lg transition-shadow relative">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-amber-500 text-white text-xs font-bold rounded-full shadow-lg">
                            Populaire
                        </span>
                    </div>
                    <div class="text-center mb-6 pt-2">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium mb-4">
                            Social
                        </div>
                        <div class="text-4xl font-bold text-zinc-900 mb-1">4,5%</div>
                        <div class="text-zinc-500 text-sm">d'amortissement annuel</div>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between py-2 border-b border-amber-200">
                            <span class="text-zinc-600 text-sm">Plafond annuel</span>
                            <span class="text-zinc-900 font-semibold">10 000</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-amber-200">
                            <span class="text-zinc-600 text-sm">Sur 9 ans</span>
                            <span class="text-zinc-900 font-semibold">90 000</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <span class="text-zinc-600 text-sm">Public cible</span>
                            <span class="text-zinc-700 text-sm">Revenus modestes</span>
                        </div>
                    </div>
                    <div class="bg-amber-100 rounded-xl p-4 text-center">
                        <flux:text class="text-amber-800 text-sm">Loyers conventionnés sociaux</flux:text>
                    </div>
                </div>

                {{-- Très Social --}}
                <div class="bg-emerald-50 rounded-3xl p-6 border-2 border-emerald-300 hover:shadow-lg transition-shadow relative">
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2">
                        <span class="inline-flex items-center gap-1 px-3 py-1 bg-emerald-500 text-white text-xs font-bold rounded-full shadow-lg">
                            <flux:icon.star class="size-3" />
                            Meilleur avantage
                        </span>
                    </div>
                    <div class="text-center mb-6 pt-2">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mb-4">
                            Très Social
                        </div>
                        <div class="text-4xl font-bold text-emerald-600 mb-1">5,5%</div>
                        <div class="text-zinc-500 text-sm">d'amortissement annuel</div>
                    </div>
                    <div class="space-y-3 mb-6">
                        <div class="flex items-center justify-between py-2 border-b border-emerald-200">
                            <span class="text-zinc-600 text-sm">Plafond annuel</span>
                            <span class="text-emerald-700 font-bold">12 000</span>
                        </div>
                        <div class="flex items-center justify-between py-2 border-b border-emerald-200">
                            <span class="text-zinc-600 text-sm">Sur 9 ans</span>
                            <span class="text-emerald-700 font-bold">108 000</span>
                        </div>
                        <div class="flex items-center justify-between py-2">
                            <span class="text-zinc-600 text-sm">Public cible</span>
                            <span class="text-zinc-700 text-sm">Revenus très modestes</span>
                        </div>
                    </div>
                    <div class="bg-emerald-100 rounded-xl p-4 text-center">
                        <flux:text class="text-emerald-800 text-sm">Loyers très accessibles</flux:text>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Checklist --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6">
                    <flux:icon.clipboard-document-check class="size-4" />
                    Auto-évaluation
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Checklist d'éligibilité
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg max-w-2xl mx-auto">
                    Vérifiez que vous cochez toutes les cases pour bénéficier du dispositif.
                </flux:text>
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-white/10">
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">Je suis une personne physique ou une SCI</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">Je ne suis pas loueur professionnel</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">Le bien sera loué <strong>nu</strong> (non meublé)</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">Le bien sera la <strong>résidence principale</strong> du locataire</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">Je m'engage sur <strong>9 ans minimum</strong></span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">Je n'ai pas l'intention de louer à ma famille proche</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">J'achète le bien <strong>avant le 31/12/2028</strong></span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/10 rounded-xl p-4 hover:bg-white/15 transition-colors">
                            <div class="size-8 rounded-lg bg-emerald-500 flex items-center justify-center shrink-0">
                                <flux:icon.check class="size-5 text-white" />
                            </div>
                            <span class="text-white">Le bien est neuf (RE2020) ou ancien rénové (DPE amélioré)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Cas Particuliers --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Cas particuliers
                </flux:heading>
            </div>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                {{-- Location famille --}}
                <div class="bg-red-50 rounded-2xl p-6 border border-red-100">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="size-12 rounded-xl bg-red-500 flex items-center justify-center">
                            <flux:icon.user-group class="size-6 text-white" />
                        </div>
                        <flux:heading class="!text-lg font-bold text-red-900">Location à un membre de la famille</flux:heading>
                    </div>
                    <flux:text class="text-red-700 mb-4">
                        La location aux ascendants (parents, grands-parents) et descendants (enfants, petits-enfants) jusqu'au 2ème degré est <strong>strictement interdite</strong>.
                    </flux:text>
                    <div class="bg-red-100 rounded-xl p-4">
                        <div class="flex items-center gap-2 text-red-800 text-sm font-medium">
                            <flux:icon.exclamation-triangle class="size-4" />
                            Non-respect = perte des avantages fiscaux
                        </div>
                    </div>
                </div>

                {{-- Changement de situation --}}
                <div class="bg-amber-50 rounded-2xl p-6 border border-amber-100">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="size-12 rounded-xl bg-amber-500 flex items-center justify-center">
                            <flux:icon.arrow-path class="size-6 text-white" />
                        </div>
                        <flux:heading class="!text-lg font-bold text-amber-900">Changement de situation</flux:heading>
                    </div>
                    <flux:text class="text-amber-700 mb-4">
                        En cas de non-respect des conditions pendant la durée d'engagement, les conséquences sont :
                    </flux:text>
                    <div class="space-y-2">
                        <div class="flex items-center gap-2 text-amber-800 text-sm">
                            <flux:icon.exclamation-circle class="size-4" />
                            Remise en cause partielle des avantages fiscaux
                        </div>
                        <div class="flex items-center gap-2 text-amber-800 text-sm">
                            <flux:icon.information-circle class="size-4" />
                            Possibilité de régularisation selon les cas
                        </div>
                    </div>
                </div>
            </div>

            {{-- Conseil --}}
            <div class="mt-12 max-w-4xl mx-auto">
                <div class="bg-blue-50 rounded-2xl p-6 border border-blue-100">
                    <div class="flex items-start gap-4">
                        <div class="size-12 rounded-xl bg-blue-500 flex items-center justify-center shrink-0">
                            <flux:icon.light-bulb class="size-6 text-white" />
                        </div>
                        <div>
                            <flux:heading class="!text-lg font-bold text-blue-900 mb-2">Vous avez un doute ?</flux:heading>
                            <flux:text class="text-blue-700">
                                Consultez un conseiller en gestion de patrimoine ou un expert-comptable pour valider votre éligibilité avant d'investir. Chaque situation est unique.
                            </flux:text>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Final --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 rounded-3xl p-8 sm:p-12 text-center">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                    Vous êtes éligible ?
                </flux:heading>
                <flux:text class="text-emerald-100 text-lg mb-8 max-w-2xl mx-auto">
                    Simulez dès maintenant votre investissement pour découvrir votre avantage fiscal personnalisé.
                </flux:text>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="/simulateur" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-emerald-600 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                        <flux:icon.calculator class="size-5" />
                        Lancer la simulation
                    </a>
                    <a href="/contact" class="inline-flex items-center gap-2 px-8 py-4 bg-emerald-700 text-white font-semibold rounded-xl hover:bg-emerald-800 transition-colors">
                        Contacter un conseiller
                        <flux:icon.arrow-right class="size-5" />
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
