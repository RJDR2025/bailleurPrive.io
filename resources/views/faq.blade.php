<x-layouts.app>
    {{-- Hero Section --}}
    <section class="relative bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900 py-16 sm:py-24 overflow-hidden">
        {{-- Background decorations --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500/10 rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 max-w-7xl relative">
            <div class="text-center max-w-4xl mx-auto">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full text-white/80 text-sm font-medium mb-6">
                    <flux:icon.question-mark-circle class="size-4" />
                    Questions Fréquentes
                </div>

                <flux:heading class="!text-4xl sm:!text-5xl lg:!text-6xl font-bold text-white mb-6">
                    Toutes vos questions sur le<br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">Statut du Bailleur Privé</span>
                </flux:heading>

                <flux:text class="text-lg sm:text-xl text-zinc-300 mb-10 max-w-2xl mx-auto">
                    Retrouvez les réponses aux questions les plus fréquentes sur le dispositif fiscal 2026-2028.
                </flux:text>

                {{-- Navigation rapide --}}
                <div class="flex flex-wrap justify-center gap-3">
                    <a href="#generales" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-sm transition-colors">
                        Questions générales
                    </a>
                    <a href="#eligibilite" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-sm transition-colors">
                        Éligibilité
                    </a>
                    <a href="#fiscalite" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-sm transition-colors">
                        Fiscalité
                    </a>
                    <a href="#engagement" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-sm transition-colors">
                        Engagement
                    </a>
                    <a href="#loyers" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-sm transition-colors">
                        Loyers
                    </a>
                    <a href="#pratique" class="px-4 py-2 bg-white/10 hover:bg-white/20 text-white rounded-full text-sm transition-colors">
                        Pratique
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Questions Générales --}}
    <section id="generales" class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="size-12 rounded-xl bg-zinc-100 flex items-center justify-center">
                    <flux:icon.light-bulb class="size-6 text-zinc-900" />
                </div>
                <flux:heading class="!text-2xl sm:!text-3xl font-bold text-zinc-900">
                    Questions Générales
                </flux:heading>
            </div>

            <div class="space-y-4" x-data="{ openQuestion: null }">
                {{-- Question 1 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Qu'est-ce que le Statut du Bailleur Privé ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 1 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 1" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            C'est un nouveau dispositif fiscal inscrit dans la loi de finances 2026 qui permet aux propriétaires de déduire une partie de la valeur de leur bien immobilier de leurs revenus imposables via un mécanisme d'amortissement.
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Quand entre-t-il en vigueur ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 2 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 2" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            Le dispositif entre en vigueur avec la loi de finances 2026. Les acquisitions sont éligibles jusqu'au <strong class="text-zinc-900">31 décembre 2028</strong>.
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 3 ? null : 3" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Le Pinel existe-t-il encore ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 3 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 3" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            Non, le dispositif Pinel a pris fin en 2024. Le Statut du Bailleur Privé vient le remplacer avec un mécanisme différent (amortissement vs réduction d'impôt).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Éligibilité --}}
    <section id="eligibilite" class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="size-12 rounded-xl bg-emerald-100 flex items-center justify-center">
                    <flux:icon.check-badge class="size-6 text-emerald-600" />
                </div>
                <flux:heading class="!text-2xl sm:!text-3xl font-bold text-zinc-900">
                    Questions sur l'Éligibilité
                </flux:heading>
            </div>

            <div class="space-y-4" x-data="{ openQuestion: null }">
                {{-- Question 1 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Puis-je investir via une SCI ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 1 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 1" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-emerald-100 text-emerald-700 rounded text-sm font-medium mb-2">Oui</span>
                            <p>Les sociétés civiles (SCI) sont éligibles au dispositif, à condition de ne pas être des loueurs professionnels.</p>
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Puis-je louer à mes enfants ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 2 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 2" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-red-100 text-red-700 rounded text-sm font-medium mb-2">Non</span>
                            <p>La location aux descendants (enfants, petits-enfants) et ascendants (parents, grands-parents) jusqu'au 2ème degré est interdite.</p>
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 3 ? null : 3" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Puis-je louer en meublé ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 3 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 3" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-red-100 text-red-700 rounded text-sm font-medium mb-2">Non</span>
                            <p>Le dispositif concerne uniquement la location <strong>nue</strong> (non meublée). Pour le meublé, orientez-vous vers le LMNP.</p>
                        </div>
                    </div>
                </div>

                {{-- Question 4 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 4 ? null : 4" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Les logements anciens sont-ils éligibles ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 4 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 4" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-emerald-100 text-emerald-700 rounded text-sm font-medium mb-2">Oui</span>
                            <p>Les logements anciens sont éligibles à condition d'avoir réalisé des <strong>travaux de rénovation énergétique</strong> documentés et améliorant le DPE.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Fiscalité --}}
    <section id="fiscalite" class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="size-12 rounded-xl bg-blue-100 flex items-center justify-center">
                    <flux:icon.calculator class="size-6 text-blue-600" />
                </div>
                <flux:heading class="!text-2xl sm:!text-3xl font-bold text-zinc-900">
                    Questions sur la Fiscalité
                </flux:heading>
            </div>

            <div class="space-y-4" x-data="{ openQuestion: null }">
                {{-- Question 1 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Comment fonctionne l'amortissement ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 1 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 1" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <p>L'amortissement permet de déduire chaque année un pourcentage de la valeur du bien (hors terrain, soit 80%) de vos revenus fonciers. Le taux varie de <strong>3,5% à 5,5%</strong> selon le niveau de loyer choisi.</p>
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Quel est le plafond de déduction ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 2 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 2" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <p class="mb-3">Le plafond annuel varie selon le niveau de loyer :</p>
                            <div class="space-y-2">
                                <div class="flex justify-between items-center p-3 bg-zinc-50 rounded-lg">
                                    <span>Intermédiaire</span>
                                    <span class="font-bold text-zinc-900">8 000€/an</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-zinc-50 rounded-lg">
                                    <span>Social</span>
                                    <span class="font-bold text-zinc-900">10 000€/an</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-zinc-50 rounded-lg">
                                    <span>Très Social</span>
                                    <span class="font-bold text-zinc-900">12 000€/an</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 3 ? null : 3" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Puis-je cumuler avec le déficit foncier ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 3 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 3" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-emerald-100 text-emerald-700 rounded text-sm font-medium mb-2">Oui</span>
                            <p>L'amortissement et le déficit foncier sont cumulables. Le plafond du déficit foncier est potentiellement porté à <strong>40 000€/an</strong> (contre 10 700€ actuellement).</p>
                        </div>
                    </div>
                </div>

                {{-- Question 4 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 4 ? null : 4" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">L'amortissement impacte-t-il la plus-value à la revente ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 4 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 4" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-amber-100 text-amber-700 rounded text-sm font-medium mb-2">Attention</span>
                            <p>Oui, l'amortissement pratiqué augmente la base imposable lors de la revente du bien. C'est un point de vigilance à intégrer dans votre stratégie.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Engagement --}}
    <section id="engagement" class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="size-12 rounded-xl bg-purple-100 flex items-center justify-center">
                    <flux:icon.clock class="size-6 text-purple-600" />
                </div>
                <flux:heading class="!text-2xl sm:!text-3xl font-bold text-zinc-900">
                    Questions sur l'Engagement
                </flux:heading>
            </div>

            <div class="space-y-4" x-data="{ openQuestion: null }">
                {{-- Question 1 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Quelle est la durée d'engagement ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 1 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 1" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            L'engagement de location est de <strong>9 ans minimum</strong>. Cette durée est incompressible.
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Que se passe-t-il si je revends avant 9 ans ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 2 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 2" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-red-100 text-red-700 rounded text-sm font-medium mb-2">Risque</span>
                            <p>En cas de revente anticipée, les avantages fiscaux obtenus peuvent être <strong>partiellement ou totalement remis en cause</strong>. Des clauses de rappel s'appliquent.</p>
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 3 ? null : 3" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Puis-je changer de locataire pendant les 9 ans ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 3 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 3" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-emerald-100 text-emerald-700 rounded text-sm font-medium mb-2">Oui</span>
                            <p>Vous pouvez changer de locataire. L'important est que le bien reste <strong>loué en continu</strong> pendant toute la durée d'engagement.</p>
                        </div>
                    </div>
                </div>

                {{-- Question 4 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 4 ? null : 4" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Que se passe-t-il en cas de vacance locative ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 4 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 4" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            Une vacance locative temporaire (entre deux locataires) est tolérée. En revanche, une vacance prolongée peut remettre en cause le dispositif.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Loyers --}}
    <section id="loyers" class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="size-12 rounded-xl bg-amber-100 flex items-center justify-center">
                    <flux:icon.banknotes class="size-6 text-amber-600" />
                </div>
                <flux:heading class="!text-2xl sm:!text-3xl font-bold text-zinc-900">
                    Questions sur les Loyers
                </flux:heading>
            </div>

            <div class="space-y-4" x-data="{ openQuestion: null }">
                {{-- Question 1 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Comment sont déterminés les plafonds de loyers ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 1 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 1" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <p class="mb-3">Les plafonds de loyers dépendent de :</p>
                            <ul class="space-y-2">
                                <li class="flex items-center gap-2">
                                    <flux:icon.map-pin class="size-4 text-zinc-400" />
                                    La <strong>zone géographique</strong> (tendue ou non)
                                </li>
                                <li class="flex items-center gap-2">
                                    <flux:icon.tag class="size-4 text-zinc-400" />
                                    Le <strong>niveau de loyer</strong> choisi (intermédiaire, social, très social)
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Pourquoi choisir un loyer social plutôt qu'intermédiaire ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 2 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 2" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <p class="mb-3">Plus le loyer est bas, plus l'avantage fiscal est important :</p>
                            <div class="space-y-2 mb-4">
                                <div class="flex justify-between items-center p-3 bg-zinc-50 rounded-lg">
                                    <span>Intermédiaire</span>
                                    <span class="font-bold text-zinc-900">3,5% d'amortissement</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-zinc-50 rounded-lg">
                                    <span>Social</span>
                                    <span class="font-bold text-zinc-900">4,5% d'amortissement</span>
                                </div>
                                <div class="flex justify-between items-center p-3 bg-zinc-50 rounded-lg">
                                    <span>Très Social</span>
                                    <span class="font-bold text-zinc-900">5,5% d'amortissement</span>
                                </div>
                            </div>
                            <p class="text-sm text-zinc-500">C'est un arbitrage entre <strong>rendement locatif</strong> et <strong>avantage fiscal</strong>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Pratique --}}
    <section id="pratique" class="py-16 sm:py-20 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="size-12 rounded-xl bg-teal-100 flex items-center justify-center">
                    <flux:icon.wrench-screwdriver class="size-6 text-teal-600" />
                </div>
                <flux:heading class="!text-2xl sm:!text-3xl font-bold text-zinc-900">
                    Questions Pratiques
                </flux:heading>
            </div>

            <div class="space-y-4" x-data="{ openQuestion: null }">
                {{-- Question 1 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 1 ? null : 1" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Comment déclarer mes revenus ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 1 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 1" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            Les revenus sont déclarés en <strong>revenus fonciers</strong> (régime réel ou micro-foncier selon votre situation).
                        </div>
                    </div>
                </div>

                {{-- Question 2 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 2 ? null : 2" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Faut-il un intermédiaire (Anah, etc.) ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 2 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 2" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-emerald-100 text-emerald-700 rounded text-sm font-medium mb-2">Non</span>
                            <p>Contrairement à d'autres dispositifs comme Loc'Avantages, le Statut du Bailleur Privé ne nécessite pas d'intermédiaire.</p>
                        </div>
                    </div>
                </div>

                {{-- Question 3 --}}
                <div class="bg-white border border-zinc-200 rounded-2xl overflow-hidden">
                    <button @click="openQuestion = openQuestion === 3 ? null : 3" class="w-full flex items-center justify-between p-5 text-left hover:bg-zinc-50 transition-colors">
                        <span class="font-semibold text-zinc-900">Le dispositif peut-il évoluer ?</span>
                        <svg class="size-5 text-zinc-400 transition-transform duration-200" :class="openQuestion === 3 && 'rotate-180'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div x-show="openQuestion === 3" x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2">
                        <div class="px-5 pb-5 text-zinc-600">
                            <span class="inline-flex items-center gap-1 px-2 py-0.5 bg-amber-100 text-amber-700 rounded text-sm font-medium mb-2">Oui</span>
                            <p>Les conditions précises peuvent évoluer par décrets d'application. Il est conseillé de se tenir informé des évolutions réglementaires.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Points de Vigilance --}}
    <section class="py-16 sm:py-20 bg-white">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="flex items-center gap-3 mb-8">
                <div class="size-12 rounded-xl bg-red-100 flex items-center justify-center">
                    <flux:icon.exclamation-triangle class="size-6 text-red-600" />
                </div>
                <flux:heading class="!text-2xl sm:!text-3xl font-bold text-zinc-900">
                    Points de Vigilance
                </flux:heading>
            </div>

            {{-- Risques --}}
            <div class="bg-red-50 border border-red-200 rounded-2xl p-6 mb-8">
                <h3 class="font-semibold text-red-900 mb-4">Quels sont les risques ?</h3>
                <div class="grid sm:grid-cols-2 gap-4">
                    <div class="bg-white rounded-xl p-4 border border-red-100">
                        <div class="font-medium text-zinc-900 mb-1">Revente anticipée</div>
                        <div class="text-sm text-zinc-600">Rappel des avantages fiscaux</div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-red-100">
                        <div class="font-medium text-zinc-900 mb-1">Vacance locative prolongée</div>
                        <div class="text-sm text-zinc-600">Remise en cause du dispositif</div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-red-100">
                        <div class="font-medium text-zinc-900 mb-1">Non-respect des conditions</div>
                        <div class="text-sm text-zinc-600">Perte partielle des avantages</div>
                    </div>
                    <div class="bg-white rounded-xl p-4 border border-red-100">
                        <div class="font-medium text-zinc-900 mb-1">Évolutions législatives</div>
                        <div class="text-sm text-zinc-600">Modification des règles</div>
                    </div>
                </div>
            </div>

            {{-- Checklist --}}
            <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-6">
                <h3 class="font-semibold text-emerald-900 mb-4">Que vérifier avant d'investir ?</h3>
                <div class="space-y-3">
                    <div class="flex items-center gap-3">
                        <div class="size-6 rounded-full bg-emerald-500 flex items-center justify-center">
                            <flux:icon.check class="size-4 text-white" />
                        </div>
                        <span class="text-zinc-700">Votre éligibilité personnelle</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="size-6 rounded-full bg-emerald-500 flex items-center justify-center">
                            <flux:icon.check class="size-4 text-white" />
                        </div>
                        <span class="text-zinc-700">La conformité du bien (RE2020 ou rénovation)</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="size-6 rounded-full bg-emerald-500 flex items-center justify-center">
                            <flux:icon.check class="size-4 text-white" />
                        </div>
                        <span class="text-zinc-700">Les plafonds de loyers dans votre zone</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="size-6 rounded-full bg-emerald-500 flex items-center justify-center">
                            <flux:icon.check class="size-4 text-white" />
                        </div>
                        <span class="text-zinc-700">Votre capacité à vous engager sur 9 ans</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="size-6 rounded-full bg-emerald-500 flex items-center justify-center">
                            <flux:icon.check class="size-4 text-white" />
                        </div>
                        <span class="text-zinc-700">L'impact sur votre fiscalité globale</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    <section class="py-16 sm:py-20 bg-gradient-to-br from-zinc-900 via-zinc-800 to-zinc-900">
        <div class="container mx-auto px-4 max-w-4xl text-center">
            <flux:heading class="!text-3xl sm:!text-4xl font-bold text-white mb-4">
                Vous avez une autre question ?
            </flux:heading>
            <flux:text class="text-lg text-zinc-300 mb-8 max-w-2xl mx-auto">
                Contactez-nous ou consultez un conseiller en gestion de patrimoine pour obtenir des réponses personnalisées à votre situation.
            </flux:text>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-white text-zinc-900 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                    <flux:icon.envelope class="size-5" />
                    Nous contacter
                </a>
                <a href="/simulateur" class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-zinc-700 text-white font-semibold rounded-xl hover:bg-zinc-600 transition-colors">
                    <flux:icon.calculator class="size-5" />
                    Simuler mon investissement
                </a>
            </div>
        </div>
    </section>
</x-layouts.app>
