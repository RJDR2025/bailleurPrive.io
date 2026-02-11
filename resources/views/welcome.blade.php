<x-layouts.app>
    {{-- Hero Section --}}
    @include('components.hero-home')

    {{-- Section Proposition de valeur --}}
    <section class="py-16 sm:py-20 bg-zinc-50" id="proposition">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900">
                    Un dispositif gagnant-gagnant
                </flux:heading>
                <flux:text class="text-zinc-600 mt-4 text-lg max-w-2xl mx-auto">
                    Le Statut du Bailleur Privé bénéficie à tous : investisseurs, locataires et environnement.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                {{-- Pour les Investisseurs --}}
                <flux:card class="!bg-white !border-zinc-200 p-8 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center mb-6">
                        <flux:icon.banknotes class="size-7 text-zinc-900" />
                    </div>
                    <flux:heading class="!text-xl font-bold text-zinc-900 mb-3">Pour les Investisseurs</flux:heading>
                    <flux:text class="text-zinc-600 leading-relaxed">
                        Optimisez votre fiscalité avec un amortissement stable et des plafonds attractifs.
                        Sécurisez votre patrimoine sur 9 ans avec des avantages fiscaux significatifs.
                    </flux:text>
                </flux:card>

                {{-- Pour les Locataires --}}
                <flux:card class="!bg-white !border-zinc-200 p-8 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center mb-6">
                        <flux:icon.home class="size-7 text-zinc-900" />
                    </div>
                    <flux:heading class="!text-xl font-bold text-zinc-900 mb-3">Pour les Locataires</flux:heading>
                    <flux:text class="text-zinc-600 leading-relaxed">
                        Accédez à des logements neufs ou rénovés de qualité, à des loyers encadrés et accessibles.
                        Une solution concrète face à la crise du logement.
                    </flux:text>
                </flux:card>

                {{-- Pour la Planète --}}
                <flux:card class="!bg-white !border-zinc-200 p-8 hover:shadow-lg transition-shadow">
                    <div class="size-14 rounded-2xl bg-green-100 flex items-center justify-center mb-6">
                        <flux:icon.globe-europe-africa class="size-7 text-green-600" />
                    </div>
                    <flux:heading class="!text-xl font-bold text-zinc-900 mb-3">Pour la Planète</flux:heading>
                    <flux:text class="text-zinc-600 leading-relaxed">
                        Participez à la transition écologique avec des logements aux normes RE2020
                        et la rénovation des passoires thermiques.
                    </flux:text>
                </flux:card>
            </div>
        </div>
    </section>

    {{-- Section Comprendre --}}
    <section class="py-16 sm:py-20 bg-white" id="comprendre">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-100 text-zinc-800 rounded-full text-sm font-medium mb-6">
                        <flux:icon.light-bulb class="size-4" />
                        Comprendre le dispositif
                    </div>
                    <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-6">
                        Comment fonctionne le Statut du Bailleur Privé ?
                    </flux:heading>
                    <flux:text class="text-zinc-600 text-lg leading-relaxed mb-6">
                        Contrairement aux anciens dispositifs comme le Pinel qui offraient une réduction d'impôt,
                        le Statut du Bailleur Privé fonctionne sur un mécanisme d'<strong>amortissement fiscal</strong>.
                    </flux:text>

                    <div class="space-y-4">
                        <div class="flex gap-4">
                            <div class="size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold shrink-0">1</div>
                            <div>
                                <flux:text class="text-zinc-900 font-semibold">Vous achetez</flux:text>
                                <flux:text class="text-zinc-600 text-sm">Un bien immobilier neuf ou rénové</flux:text>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold shrink-0">2</div>
                            <div>
                                <flux:text class="text-zinc-900 font-semibold">Vous le mettez en location</flux:text>
                                <flux:text class="text-zinc-600 text-sm">Location nue pendant minimum 9 ans</flux:text>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold shrink-0">3</div>
                            <div>
                                <flux:text class="text-zinc-900 font-semibold">Vous déduisez</flux:text>
                                <flux:text class="text-zinc-600 text-sm">Chaque année une partie du prix du bien de vos revenus</flux:text>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div class="size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold shrink-0">4</div>
                            <div>
                                <flux:text class="text-zinc-900 font-semibold">Vous réduisez</flux:text>
                                <flux:text class="text-zinc-600 text-sm">Ainsi votre base imposable</flux:text>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-zinc-100 rounded-3xl p-8">
                    <flux:heading class="!text-xl font-bold text-zinc-900 mb-6">Comparatif avec le Pinel</flux:heading>
                    <div class="space-y-4">
                        <div class="grid grid-cols-3 gap-4 text-sm font-semibold text-zinc-500 pb-2 border-b border-zinc-200">
                            <div>Aspect</div>
                            <div>Pinel</div>
                            <div class="text-zinc-900">Bailleur Privé</div>
                        </div>
                        <div class="grid grid-cols-3 gap-4 text-sm py-2">
                            <div class="text-zinc-600">Mécanisme</div>
                            <div class="text-zinc-900">Réduction d'impôt</div>
                            <div class="text-zinc-900 font-medium">Amortissement fiscal</div>
                        </div>
                        <div class="grid grid-cols-3 gap-4 text-sm py-2 bg-zinc-50 -mx-4 px-4 rounded-lg">
                            <div class="text-zinc-600">Durée</div>
                            <div class="text-zinc-900">6, 9 ou 12 ans</div>
                            <div class="text-zinc-900 font-medium">9 ans minimum</div>
                        </div>
                        <div class="grid grid-cols-3 gap-4 text-sm py-2">
                            <div class="text-zinc-600">Ancien rénové</div>
                            <div class="text-zinc-900">Non éligible</div>
                            <div class="text-zinc-900 font-medium">Éligible</div>
                        </div>
                        <div class="grid grid-cols-3 gap-4 text-sm py-2 bg-zinc-50 -mx-4 px-4 rounded-lg">
                            <div class="text-zinc-600">Statut</div>
                            <div class="text-red-500">Supprimé</div>
                            <div class="text-zinc-900 font-medium">Actif jusqu'en 2028</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Avantages Fiscaux --}}
    <section class="py-16 sm:py-20 bg-zinc-900" id="avantages">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white">
                    Les avantages fiscaux
                </flux:heading>
                <flux:text class="text-zinc-300 mt-4 text-lg max-w-2xl mx-auto">
                    3 leviers fiscaux cumulables pour optimiser votre investissement immobilier.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                {{-- Amortissement --}}
                <flux:card class="!bg-white !border-0 p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-zinc-100 flex items-center justify-center">
                            <flux:icon.presentation-chart-line class="size-5 text-zinc-900" />
                        </div>
                        <flux:heading class="!text-lg font-bold text-zinc-900">Amortissement du bien</flux:heading>
                    </div>
                    <flux:text class="text-zinc-600 text-sm leading-relaxed mb-4">
                        Déduisez chaque année une partie de la valeur de votre bien de vos revenus fonciers.
                        L'amortissement porte sur 80% de la valeur du bien.
                    </flux:text>
                    <div class="bg-zinc-50 rounded-xl p-4">
                        <div class="grid grid-cols-3 gap-2 text-center">
                            <div>
                                <div class="text-xl font-bold text-zinc-900">3,5%</div>
                                <div class="text-xs text-zinc-500">Intermédiaire</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-zinc-900">4,5%</div>
                                <div class="text-xs text-zinc-500">Social</div>
                            </div>
                            <div>
                                <div class="text-xl font-bold text-zinc-900">5,5%</div>
                                <div class="text-xs text-zinc-500">Très social</div>
                            </div>
                        </div>
                    </div>
                </flux:card>

                {{-- Micro-foncier --}}
                <flux:card class="!bg-white !border-0 p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-zinc-100 flex items-center justify-center">
                            <flux:icon.calculator class="size-5 text-zinc-900" />
                        </div>
                        <flux:heading class="!text-lg font-bold text-zinc-900">Micro-foncier amélioré</flux:heading>
                    </div>
                    <flux:text class="text-zinc-600 text-sm leading-relaxed mb-4">
                        L'abattement forfaitaire passe de 30% à 50% sur les revenus fonciers.
                        Idéal pour les petits revenus locatifs avec une déclaration simplifiée.
                    </flux:text>
                    <div class="bg-zinc-50 rounded-xl p-4">
                        <div class="flex items-center justify-center gap-6">
                            <div class="text-center">
                                <div class="text-xl font-bold text-zinc-400 line-through">30%</div>
                                <div class="text-xs text-zinc-500">Avant</div>
                            </div>
                            <flux:icon.arrow-right class="size-5 text-zinc-400" />
                            <div class="text-center">
                                <div class="text-xl font-bold text-zinc-900">50%</div>
                                <div class="text-xs text-zinc-500">Après</div>
                            </div>
                        </div>
                    </div>
                </flux:card>

                {{-- Deficit foncier --}}
                <flux:card class="!bg-white !border-0 p-6">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="size-10 rounded-xl bg-zinc-200 flex items-center justify-center">
                            <flux:icon.arrow-trending-up class="size-5 text-zinc-700" />
                        </div>
                        <flux:heading class="!text-lg font-bold text-zinc-900">Déficit foncier renforcé</flux:heading>
                    </div>
                    <flux:text class="text-zinc-600 text-sm leading-relaxed mb-4">
                        Le plafond de déficit foncier déductible passe de 10 700€ à 40 000€.
                        Particulièrement intéressant pour les travaux de rénovation énergétique.
                    </flux:text>
                    <div class="bg-zinc-50 rounded-xl p-4">
                        <div class="flex items-center justify-center gap-6">
                            <div class="text-center">
                                <div class="text-xl font-bold text-zinc-400 line-through">10,7k</div>
                                <div class="text-xs text-zinc-500">Avant</div>
                            </div>
                            <flux:icon.arrow-right class="size-5 text-zinc-400" />
                            <div class="text-center">
                                <div class="text-xl font-bold text-zinc-700">40k</div>
                                <div class="text-xs text-zinc-500">Après</div>
                            </div>
                        </div>
                    </div>
                </flux:card>
            </div>

            {{-- Simulation exemple --}}
            <div class="mt-12 bg-white/10 backdrop-blur-sm rounded-3xl p-8 border border-white/20">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <flux:heading class="!text-2xl font-bold text-white mb-4">Exemple de simulation</flux:heading>
                        <flux:text class="text-zinc-300 leading-relaxed">
                            Pour un bien de 200 000€ au niveau social (4,5%), avec une TMI de 30%,
                            vous pouvez économiser jusqu'à <strong class="text-white">19 440€ d'impôts sur 9 ans</strong>.
                        </flux:text>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/20 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-white">200k</div>
                            <div class="text-zinc-300 text-sm">Prix du bien</div>
                        </div>
                        <div class="bg-white/20 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-white">7 200</div>
                            <div class="text-zinc-300 text-sm">Amortissement/an</div>
                        </div>
                        <div class="bg-white/20 rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-white">2 160</div>
                            <div class="text-zinc-300 text-sm">Économie/an</div>
                        </div>
                        <div class="bg-white rounded-xl p-4 text-center">
                            <div class="text-2xl font-bold text-zinc-900">19 440</div>
                            <div class="text-zinc-600 text-sm">Sur 9 ans</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Éligibilité --}}
    <section class="py-16 sm:py-20 bg-white" id="eligibilite">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900">
                    Suis-je éligible ?
                </flux:heading>
                <flux:text class="text-zinc-600 mt-4 text-lg max-w-2xl mx-auto">
                    Vérifiez les conditions d'éligibilité au Statut du Bailleur Privé.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                {{-- Conditions Investisseur --}}
                <flux:card class="!bg-zinc-50 !border-zinc-200 p-6">
                    <div class="size-12 rounded-2xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.user class="size-6 text-zinc-900" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-3">Investisseur</flux:heading>
                    <ul class="space-y-2 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>Personne physique ou SCI</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>Bailleur non-professionnel</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.x-mark class="size-4 text-red-500 shrink-0 mt-0.5" />
                            <span>Loueur professionnel exclu</span>
                        </li>
                    </ul>
                </flux:card>

                {{-- Conditions Bien --}}
                <flux:card class="!bg-zinc-50 !border-zinc-200 p-6">
                    <div class="size-12 rounded-2xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.home class="size-6 text-zinc-900" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-3">Le bien</flux:heading>
                    <ul class="space-y-2 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>Location nue (non meublée)</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>Résidence principale du locataire</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>Neuf RE2020 ou ancien rénové</span>
                        </li>
                    </ul>
                </flux:card>

                {{-- Conditions Location --}}
                <flux:card class="!bg-zinc-50 !border-zinc-200 p-6">
                    <div class="size-12 rounded-2xl bg-zinc-200 flex items-center justify-center mb-4">
                        <flux:icon.document-text class="size-6 text-zinc-700" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-3">Location</flux:heading>
                    <ul class="space-y-2 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>9 ans minimum de location</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>Plafonds de loyers respectés</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.x-mark class="size-4 text-red-500 shrink-0 mt-0.5" />
                            <span>Pas de location a la famille</span>
                        </li>
                    </ul>
                </flux:card>

                {{-- Conditions Temporelles --}}
                <flux:card class="!bg-zinc-50 !border-zinc-200 p-6">
                    <div class="size-12 rounded-2xl bg-amber-100 flex items-center justify-center mb-4">
                        <flux:icon.calendar class="size-6 text-amber-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-3">Calendrier</flux:heading>
                    <ul class="space-y-2 text-sm text-zinc-600">
                        <li class="flex items-start gap-2">
                            <flux:icon.check class="size-4 text-emerald-500 shrink-0 mt-0.5" />
                            <span>Début : Publication loi 2026</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.exclamation-triangle class="size-4 text-amber-500 shrink-0 mt-0.5" />
                            <span>Fin : 31 décembre 2028</span>
                        </li>
                        <li class="flex items-start gap-2">
                            <flux:icon.information-circle class="size-4 text-blue-500 shrink-0 mt-0.5" />
                            <span>Acquisition dans cette période</span>
                        </li>
                    </ul>
                </flux:card>
            </div>

            {{-- Niveaux de loyers --}}
            <div class="mt-12 bg-zinc-900 rounded-3xl p-8">
                <flux:heading class="!text-2xl font-bold text-white mb-6 text-center">
                    Les 3 niveaux de loyers
                </flux:heading>
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="bg-zinc-800 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-white mb-2">3,5%</div>
                        <div class="text-white font-semibold mb-1">Intermédiaire</div>
                        <div class="text-zinc-400 text-sm mb-3">Plafond : 8 000€/an</div>
                        <div class="text-zinc-500 text-xs">Loyers légèrement sous le marché</div>
                    </div>
                    <div class="bg-zinc-800 rounded-2xl p-6 text-center border-2 border-zinc-400">
                        <div class="text-3xl font-bold text-white mb-2">4,5%</div>
                        <div class="text-white font-semibold mb-1">Social</div>
                        <div class="text-zinc-400 text-sm mb-3">Plafond : 10 000€/an</div>
                        <div class="text-zinc-500 text-xs">Loyers conventionnés sociaux</div>
                    </div>
                    <div class="bg-zinc-800 rounded-2xl p-6 text-center">
                        <div class="text-3xl font-bold text-white mb-2">5,5%</div>
                        <div class="text-white font-semibold mb-1">Très social</div>
                        <div class="text-zinc-400 text-sm mb-3">Plafond : 12 000€/an</div>
                        <div class="text-zinc-500 text-xs">Loyers très accessibles</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section FAQ --}}
    <section class="py-16 sm:py-20 bg-zinc-50" id="faq">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-200 text-zinc-800 rounded-full text-sm font-medium mb-6">
                    <flux:icon.question-mark-circle class="size-4" />
                    FAQ
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900">
                    Questions fréquentes
                </flux:heading>
                <flux:text class="text-zinc-600 mt-4 text-lg max-w-2xl mx-auto">
                    Tout ce que vous devez savoir sur le Statut du Bailleur Privé.
                </flux:text>
            </div>

            <div class="bg-white rounded-2xl border border-zinc-200 divide-y divide-zinc-200" x-data="{ open: null }">
                {{-- Question 1 --}}
                <div class="p-0">
                    <button @click="open = open === 1 ? null : 1" class="flex w-full items-center justify-between px-6 py-5 text-left">
                        <span class="text-zinc-900 font-medium text-base sm:text-lg">Quelle est la différence entre le Bailleur Privé et le Pinel ?</span>
                        <flux:icon.chevron-down class="size-5 text-zinc-500 transition-transform duration-200" x-bind:class="open === 1 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="open === 1" x-collapse x-cloak class="px-6 pb-5">
                        <p class="text-zinc-600 leading-relaxed">
                            Le Pinel offrait une réduction d'impôt directe, tandis que le Bailleur Privé fonctionne
                            par amortissement fiscal. De plus, le Bailleur Privé permet d'investir dans l'ancien rénové,
                            ce qui n'était pas possible avec le Pinel. Le Pinel a été supprimé en 2024, remplacé par ce nouveau dispositif.
                        </p>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="p-0">
                    <button @click="open = open === 2 ? null : 2" class="flex w-full items-center justify-between px-6 py-5 text-left">
                        <span class="text-zinc-900 font-medium text-base sm:text-lg">Puis-je cumuler les avantages fiscaux ?</span>
                        <flux:icon.chevron-down class="size-5 text-zinc-500 transition-transform duration-200" x-bind:class="open === 2 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="open === 2" x-collapse x-cloak class="px-6 pb-5">
                        <p class="text-zinc-600 leading-relaxed">
                            Oui, les différents avantages (amortissement, micro-foncier amélioré, déficit foncier renforcé)
                            peuvent se cumuler selon votre situation. Consultez un conseiller fiscal pour optimiser votre stratégie.
                        </p>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="p-0">
                    <button @click="open = open === 3 ? null : 3" class="flex w-full items-center justify-between px-6 py-5 text-left">
                        <span class="text-zinc-900 font-medium text-base sm:text-lg">Que se passe-t-il si je vends avant 9 ans ?</span>
                        <flux:icon.chevron-down class="size-5 text-zinc-500 transition-transform duration-200" x-bind:class="open === 3 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="open === 3" x-collapse x-cloak class="px-6 pb-5">
                        <p class="text-zinc-600 leading-relaxed">
                            En cas de non-respect des conditions pendant la durée d'engagement, vous risquez une remise en cause
                            partielle des avantages fiscaux. Il existe cependant des possibilités de régularisation selon les cas
                            (mutation professionnelle, invalidité, décès...).
                        </p>
                    </div>
                </div>

                {{-- Question 4 --}}
                <div class="p-0">
                    <button @click="open = open === 4 ? null : 4" class="flex w-full items-center justify-between px-6 py-5 text-left">
                        <span class="text-zinc-900 font-medium text-base sm:text-lg">Puis-je louer à un membre de ma famille ?</span>
                        <flux:icon.chevron-down class="size-5 text-zinc-500 transition-transform duration-200" x-bind:class="open === 4 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="open === 4" x-collapse x-cloak class="px-6 pb-5">
                        <p class="text-zinc-600 leading-relaxed">
                            Non, la location aux ascendants (parents, grands-parents) et descendants (enfants, petits-enfants)
                            jusqu'au 2ème degré est interdite pour bénéficier du dispositif.
                        </p>
                    </div>
                </div>

                {{-- Question 5 --}}
                <div class="p-0">
                    <button @click="open = open === 5 ? null : 5" class="flex w-full items-center justify-between px-6 py-5 text-left">
                        <span class="text-zinc-900 font-medium text-base sm:text-lg">Quels types de biens sont éligibles ?</span>
                        <flux:icon.chevron-down class="size-5 text-zinc-500 transition-transform duration-200" x-bind:class="open === 5 ? 'rotate-180' : ''" />
                    </button>
                    <div x-show="open === 5" x-collapse x-cloak class="px-6 pb-5">
                        <p class="text-zinc-600 leading-relaxed">
                            Deux types de biens sont éligibles : les logements neufs conformes aux normes RE2020,
                            et les logements anciens ayant fait l'objet de travaux de rénovation énergétique documentés
                            avec une amélioration significative du DPE.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-zinc-600 mb-4">Vous avez d'autres questions ?</p>
                <a href="{{ url('/contact') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    <flux:icon.envelope class="size-5" />
                    Contactez-nous
                </a>
            </div>
        </div>
    </section>

    {{-- Section CTA Final --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 to-zinc-800" id="contact">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-6">
                Prêt à investir ?
            </flux:heading>
            <flux:text class="text-zinc-300 text-lg mb-8 max-w-2xl mx-auto">
                Consultez un conseiller en gestion de patrimoine ou un expert-comptable
                pour valider votre éligibilité et optimiser votre investissement.
            </flux:text>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <flux:button variant="filled" class="!bg-white !text-zinc-800 hover:!bg-zinc-100 !px-8 !py-3">
                    Prendre rendez-vous
                </flux:button>
                <flux:button variant="ghost" class="!border-white !text-white hover:!bg-white/10 !px-8 !py-3">
                    En savoir plus
                </flux:button>
            </div>
        </div>
    </section>
</x-layouts.app>
