<x-layouts.app title="Calendrier du Dispositif - BailleurPrive.io">
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\"30\" height=\"30\" viewBox=\"0 0 30 30\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z\" fill=\"rgba(255,255,255,0.05)\"%3E%3C/path%3E%3C/svg%3E')] opacity-40"></div>
        {{-- Decorative gradient orbs --}}
        <div class="absolute top-0 right-0 w-80 h-80 bg-amber-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 text-white rounded-full text-sm font-medium mb-6 backdrop-blur-sm">
                        <flux:icon.calendar class="size-4" />
                        Calendrier
                    </div>
                    <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6 leading-tight">
                        Calendrier du Dispositif
                    </flux:heading>
                    <flux:text class="text-zinc-300 text-lg sm:text-xl leading-relaxed mb-8">
                        Toutes les dates clés du Statut du Bailleur Privé, de son entrée en vigueur jusqu'à la date limite d'acquisition.
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
                {{-- Key dates visualization --}}
                <div class="bg-white/5 backdrop-blur-sm rounded-3xl p-6 sm:p-8 border border-white/10">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="size-10 rounded-xl bg-amber-500/20 flex items-center justify-center">
                            <flux:icon.clock class="size-5 text-amber-400" />
                        </div>
                        <div>
                            <div class="text-white font-semibold">Fenêtre d'opportunité</div>
                            <div class="text-zinc-400 text-sm">3 ans pour investir</div>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 size-12 rounded-xl bg-emerald-500/20 flex items-center justify-center">
                                <span class="text-emerald-400 font-bold">2026</span>
                            </div>
                            <div class="flex-1 h-1 bg-gradient-to-r from-emerald-500 to-amber-500 rounded-full"></div>
                            <div class="flex-shrink-0 size-12 rounded-xl bg-amber-500/20 flex items-center justify-center">
                                <span class="text-amber-400 font-bold">2028</span>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-4 pt-2">
                            <div class="text-center">
                                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-emerald-500/20 text-emerald-400 rounded-full text-sm font-medium">
                                    <flux:icon.play class="size-3.5" />
                                    Début du dispositif
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-amber-500/20 text-amber-400 rounded-full text-sm font-medium">
                                    <flux:icon.flag class="size-3.5" />
                                    Date limite
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 pt-6 border-t border-white/10">
                        <div class="flex items-center justify-between">
                            <div class="text-zinc-400 text-sm">Engagement minimum</div>
                            <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-zinc-800 text-white rounded-lg font-semibold">
                                <flux:icon.lock-closed class="size-4 text-zinc-400" />
                                9 ans de location
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Période d'éligibilité --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Période d'éligibilité
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Les biens acquis entre la publication de la loi de finances 2026 et le 31 décembre 2028 sont éligibles au dispositif.
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-r from-emerald-500 to-amber-500 rounded-3xl p-1">
                    <div class="bg-white rounded-[22px] p-8 sm:p-12">
                        <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                            {{-- Date début --}}
                            <div class="text-center">
                                <div class="size-20 rounded-2xl bg-emerald-100 flex items-center justify-center mx-auto mb-4">
                                    <flux:icon.play class="size-10 text-emerald-600" />
                                </div>
                                <div class="text-4xl font-bold text-zinc-900 mb-1">2026</div>
                                <div class="text-zinc-600">Entrée en vigueur</div>
                                <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-medium mt-3">
                                    <flux:icon.check class="size-4" />
                                    Début du dispositif
                                </div>
                            </div>

                            {{-- Flèche --}}
                            <div class="hidden md:flex items-center flex-1 px-4">
                                <div class="h-1 flex-1 bg-gradient-to-r from-emerald-400 to-amber-400 rounded-full relative">
                                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-white px-4 py-2 rounded-xl border border-zinc-200 shadow-sm">
                                        <span class="text-sm font-bold text-zinc-900">3 ans</span>
                                    </div>
                                </div>
                            </div>
                            <div class="md:hidden flex items-center justify-center">
                                <flux:icon.arrow-down class="size-8 text-zinc-300" />
                            </div>

                            {{-- Date fin --}}
                            <div class="text-center">
                                <div class="size-20 rounded-2xl bg-amber-100 flex items-center justify-center mx-auto mb-4">
                                    <flux:icon.clock class="size-10 text-amber-600" />
                                </div>
                                <div class="text-4xl font-bold text-zinc-900 mb-1">31/12/2028</div>
                                <div class="text-zinc-600">Date limite d'acquisition</div>
                                <div class="inline-flex items-center gap-1.5 px-3 py-1 bg-amber-100 text-amber-700 rounded-full text-sm font-medium mt-3">
                                    <flux:icon.exclamation-triangle class="size-4" />
                                    Fin du dispositif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Timeline détaillée --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Les étapes clés
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Chronologie détaillée du dispositif et des actions à entreprendre.
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto">
                {{-- Timeline --}}
                <div class="relative">
                    {{-- Ligne verticale --}}
                    <div class="absolute left-8 md:left-1/2 md:-translate-x-1/2 top-0 bottom-0 w-1 bg-zinc-200"></div>

                    {{-- 2024 - Fin du Pinel --}}
                    <div class="relative flex items-start gap-6 md:gap-0 mb-12">
                        <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                            <div class="bg-white rounded-2xl p-6 border border-zinc-200 shadow-sm md:ml-auto md:mr-0">
                                <div class="inline-flex items-center gap-2 px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-bold mb-3">
                                    <flux:icon.x-circle class="size-3" />
                                    Contexte
                                </div>
                                <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Fin du dispositif Pinel</flux:heading>
                                <flux:text class="text-zinc-600 text-sm">
                                    Le dispositif Pinel prend fin le 31 décembre 2024, laissant un vide fiscal pour les investisseurs immobiliers.
                                </flux:text>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 -translate-x-1/2 size-6 bg-red-500 rounded-full border-4 border-white shadow-lg z-10 order-1 md:order-2"></div>
                        <div class="md:w-1/2 md:pl-12 order-3">
                            <div class="text-sm font-bold text-zinc-500 md:mt-4">2024</div>
                        </div>
                    </div>

                    {{-- 2025 - Préparation --}}
                    <div class="relative flex items-start gap-6 md:gap-0 mb-12">
                        <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                            <div class="text-sm font-bold text-zinc-500 md:mt-4 hidden md:block">2025</div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 -translate-x-1/2 size-6 bg-blue-500 rounded-full border-4 border-white shadow-lg z-10 order-1"></div>
                        <div class="md:w-1/2 md:pl-12 order-3 md:order-3">
                            <div class="text-sm font-bold text-zinc-500 mb-2 md:hidden">2025</div>
                            <div class="bg-white rounded-2xl p-6 border border-zinc-200 shadow-sm">
                                <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-xs font-bold mb-3">
                                    <flux:icon.document-text class="size-3" />
                                    Préparation
                                </div>
                                <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Vote de la loi de finances</flux:heading>
                                <flux:text class="text-zinc-600 text-sm">
                                    Discussion et adoption du Statut du Bailleur Privé dans le cadre de la loi de finances pour 2026.
                                </flux:text>
                            </div>
                        </div>
                    </div>

                    {{-- 2026 - Entrée en vigueur --}}
                    <div class="relative flex items-start gap-6 md:gap-0 mb-12">
                        <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                            <div class="bg-emerald-50 rounded-2xl p-6 border-2 border-emerald-200 shadow-sm md:ml-auto md:mr-0">
                                <div class="inline-flex items-center gap-2 px-3 py-1 bg-emerald-500 text-white rounded-full text-xs font-bold mb-3">
                                    <flux:icon.rocket-launch class="size-3" />
                                    Lancement
                                </div>
                                <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Entrée en vigueur</flux:heading>
                                <flux:text class="text-zinc-600 text-sm mb-4">
                                    Le dispositif devient opérationnel. Les acquisitions réalisées à partir de cette date sont éligibles.
                                </flux:text>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2 text-sm text-emerald-700">
                                        <flux:icon.check class="size-4" />
                                        <span>Logements neufs éligibles</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-emerald-700">
                                        <flux:icon.check class="size-4" />
                                        <span>Logements anciens rénovés éligibles</span>
                                    </div>
                                    <div class="flex items-center gap-2 text-sm text-emerald-700">
                                        <flux:icon.check class="size-4" />
                                        <span>Amortissement applicable</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 -translate-x-1/2 size-8 bg-emerald-500 rounded-full border-4 border-white shadow-lg z-10 flex items-center justify-center order-1 md:order-2">
                            <flux:icon.star class="size-4 text-white" />
                        </div>
                        <div class="md:w-1/2 md:pl-12 order-3">
                            <div class="text-lg font-bold text-emerald-600 md:mt-4">2026</div>
                            <div class="text-sm text-zinc-500">Début du dispositif</div>
                        </div>
                    </div>

                    {{-- 2027 - Plein régime --}}
                    <div class="relative flex items-start gap-6 md:gap-0 mb-12">
                        <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                            <div class="text-sm font-bold text-zinc-500 md:mt-4 hidden md:block">2027</div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 -translate-x-1/2 size-6 bg-zinc-400 rounded-full border-4 border-white shadow-lg z-10 order-1"></div>
                        <div class="md:w-1/2 md:pl-12 order-3">
                            <div class="text-sm font-bold text-zinc-500 mb-2 md:hidden">2027</div>
                            <div class="bg-white rounded-2xl p-6 border border-zinc-200 shadow-sm">
                                <div class="inline-flex items-center gap-2 px-3 py-1 bg-zinc-200 text-zinc-700 rounded-full text-xs font-bold mb-3">
                                    <flux:icon.arrow-trending-up class="size-3" />
                                    En cours
                                </div>
                                <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Dispositif en plein régime</flux:heading>
                                <flux:text class="text-zinc-600 text-sm">
                                    Le marché s'adapte au nouveau dispositif. C'est le moment idéal pour investir et bénéficier des avantages fiscaux sur la durée maximale.
                                </flux:text>
                            </div>
                        </div>
                    </div>

                    {{-- 2028 - Dernière année --}}
                    <div class="relative flex items-start gap-6 md:gap-0">
                        <div class="md:w-1/2 md:pr-12 md:text-right order-2 md:order-1">
                            <div class="bg-amber-50 rounded-2xl p-6 border-2 border-amber-200 shadow-sm md:ml-auto md:mr-0">
                                <div class="inline-flex items-center gap-2 px-3 py-1 bg-amber-500 text-white rounded-full text-xs font-bold mb-3">
                                    <flux:icon.clock class="size-3" />
                                    Attention
                                </div>
                                <flux:heading class="!text-xl font-bold text-zinc-900 mb-2">Dernière année d'acquisition</flux:heading>
                                <flux:text class="text-zinc-600 text-sm mb-4">
                                    Dernière opportunité pour acquérir un bien éligible. L'acte authentique doit être signé avant le 31 décembre 2028.
                                </flux:text>
                                <div class="bg-amber-100 rounded-xl p-4">
                                    <div class="flex items-center gap-3">
                                        <flux:icon.exclamation-triangle class="size-6 text-amber-600" />
                                        <div>
                                            <div class="font-bold text-amber-800">Date limite : 31/12/2028</div>
                                            <div class="text-sm text-amber-700">Signature de l'acte authentique</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="absolute left-8 md:left-1/2 -translate-x-1/2 size-8 bg-amber-500 rounded-full border-4 border-white shadow-lg z-10 flex items-center justify-center order-1 md:order-2">
                            <flux:icon.clock class="size-4 text-white" />
                        </div>
                        <div class="md:w-1/2 md:pl-12 order-3">
                            <div class="text-lg font-bold text-amber-600 md:mt-4">2028</div>
                            <div class="text-sm text-zinc-500">Fin du dispositif</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Engagement de location --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Durée d'engagement
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Une fois le bien acquis, vous vous engagez à le louer pendant une durée minimale.
                </flux:text>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="bg-zinc-900 rounded-3xl p-8 sm:p-12 text-center">
                    <div class="inline-flex items-center gap-3 px-6 py-3 bg-white/10 rounded-2xl mb-8">
                        <flux:icon.key class="size-6 text-white" />
                        <span class="text-white font-medium">Location nue en résidence principale</span>
                    </div>

                    <div class="text-7xl sm:text-8xl font-bold text-white mb-4">9 ans</div>
                    <div class="text-2xl text-zinc-300 mb-8">minimum</div>

                    <div class="grid sm:grid-cols-3 gap-6 max-w-3xl mx-auto">
                        <div class="bg-white/10 rounded-2xl p-6">
                            <flux:icon.home class="size-8 text-white mx-auto mb-3" />
                            <div class="text-white font-semibold">Résidence principale</div>
                            <div class="text-zinc-400 text-sm mt-1">du locataire</div>
                        </div>
                        <div class="bg-white/10 rounded-2xl p-6">
                            <flux:icon.user-group class="size-8 text-white mx-auto mb-3" />
                            <div class="text-white font-semibold">Plafonds de ressources</div>
                            <div class="text-zinc-400 text-sm mt-1">du locataire</div>
                        </div>
                        <div class="bg-white/10 rounded-2xl p-6">
                            <flux:icon.currency-euro class="size-8 text-white mx-auto mb-3" />
                            <div class="text-white font-semibold">Loyer plafonné</div>
                            <div class="text-zinc-400 text-sm mt-1">selon le niveau choisi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Actions à entreprendre --}}
    <section class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="text-center mb-12">
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-zinc-900 mb-4">
                    Que faire maintenant ?
                </flux:heading>
                <flux:text class="text-zinc-600 text-lg max-w-2xl mx-auto">
                    Les étapes pour profiter du dispositif avant la date limite.
                </flux:text>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl mx-auto">
                {{-- Étape 1 --}}
                <div class="bg-white rounded-2xl p-6 border border-zinc-200 shadow-sm relative">
                    <div class="absolute -top-3 -left-3 size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold">1</div>
                    <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.calculator class="size-7 text-zinc-700" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Simuler</flux:heading>
                    <flux:text class="text-zinc-600 text-sm">
                        Estimez votre économie d'impôts avec notre simulateur en ligne.
                    </flux:text>
                </div>

                {{-- Étape 2 --}}
                <div class="bg-white rounded-2xl p-6 border border-zinc-200 shadow-sm relative">
                    <div class="absolute -top-3 -left-3 size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold">2</div>
                    <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.magnifying-glass class="size-7 text-zinc-700" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Rechercher</flux:heading>
                    <flux:text class="text-zinc-600 text-sm">
                        Identifiez un bien éligible (neuf RE2020 ou ancien rénové).
                    </flux:text>
                </div>

                {{-- Étape 3 --}}
                <div class="bg-white rounded-2xl p-6 border border-zinc-200 shadow-sm relative">
                    <div class="absolute -top-3 -left-3 size-8 rounded-full bg-zinc-900 text-white flex items-center justify-center text-sm font-bold">3</div>
                    <div class="size-14 rounded-2xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.banknotes class="size-7 text-zinc-700" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Financer</flux:heading>
                    <flux:text class="text-zinc-600 text-sm">
                        Obtenez votre financement et préparez la signature.
                    </flux:text>
                </div>

                {{-- Étape 4 --}}
                <div class="bg-white rounded-2xl p-6 border border-zinc-200 shadow-sm relative">
                    <div class="absolute -top-3 -left-3 size-8 rounded-full bg-emerald-500 text-white flex items-center justify-center text-sm font-bold">4</div>
                    <div class="size-14 rounded-2xl bg-emerald-100 flex items-center justify-center mb-4">
                        <flux:icon.document-check class="size-7 text-emerald-600" />
                    </div>
                    <flux:heading class="!text-lg font-bold text-zinc-900 mb-2">Acquérir</flux:heading>
                    <flux:text class="text-zinc-600 text-sm">
                        Signez l'acte authentique avant le 31/12/2028.
                    </flux:text>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Final --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 to-zinc-800">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="max-w-3xl mx-auto text-center">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-amber-500/20 text-amber-300 rounded-full text-sm font-medium mb-6">
                    <flux:icon.clock class="size-4" />
                    Ne tardez pas
                </div>
                <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-6">
                    Plus que quelques mois pour investir
                </flux:heading>
                <flux:text class="text-zinc-300 text-lg mb-8">
                    La date limite d'acquisition approche. Simulez dès maintenant votre investissement pour profiter des avantages fiscaux du Statut du Bailleur Privé.
                </flux:text>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="/simulateur" class="inline-flex items-center gap-2 px-8 py-4 bg-white text-zinc-900 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                        <flux:icon.calculator class="size-5" />
                        Simuler mon investissement
                    </a>
                    <a href="/contact" class="inline-flex items-center gap-2 px-8 py-4 bg-white/10 text-white font-semibold rounded-xl hover:bg-white/20 transition-colors border border-white/20">
                        <flux:icon.envelope class="size-5" />
                        Nous contacter
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
