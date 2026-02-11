<style>
    .animated-border-badge {
        position: relative;
        border-radius: 9999px;
        padding: 1.5px;
        background: linear-gradient(90deg, #a1a1aa, #52525b, #71717a, #52525b, #a1a1aa);
        background-size: 300% 100%;
        animation: border-glow 4s ease-in-out infinite;
    }

    .animated-border-badge::before {
        content: '';
        position: absolute;
        inset: 0;
        border-radius: 9999px;
        padding: 1.5px;
        background: linear-gradient(90deg, #a1a1aa, #52525b, #71717a, #52525b, #a1a1aa);
        background-size: 300% 100%;
        animation: border-glow 4s ease-in-out infinite;
        filter: blur(6px);
        opacity: 0.35;
        z-index: -1;
    }

    @keyframes border-glow {
        0% { background-position: 0% 50%; }
        100% { background-position: 300% 50%; }
    }

    .grid-pattern {
        background-image:
            linear-gradient(to right, rgba(0,0,0,0.03) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(0,0,0,0.03) 1px, transparent 1px);
        background-size: 40px 40px;
    }
</style>

<section class="min-h-screen relative bg-white flex items-center">
    {{-- Background Pattern --}}
    <div class="absolute inset-0 grid-pattern"></div>

    <div class="container mx-auto px-4 max-w-7xl relative z-10">
        <div class="flex flex-col items-center justify-center gap-10 lg:flex-row lg:items-center lg:justify-between">
            {{-- Contenu gauche --}}
            <div class="max-w-[28.125rem]">
                {{-- Badge mobile avec bordure animée --}}
                <div class="lg:hidden flex justify-start mb-6">
                    <div class="animated-border-badge relative">
                        <span class="relative z-10 flex items-center gap-2 px-4 py-2 bg-white text-zinc-900 rounded-full font-semibold text-xs">
                            <svg class="w-4 h-4 text-zinc-900" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                            Nouveau dispositif fiscal 2026
                        </span>
                    </div>
                </div>

                {{-- Titre --}}
                <flux:heading class="text-zinc-900 !text-4xl sm:!text-5xl md:!text-5xl lg:!text-6xl font-semibold tracking-tight text-pretty">
                    Le Statut du <span class="bg-gradient-to-r from-violet-600 via-purple-500 to-fuchsia-500 bg-clip-text text-transparent">Bailleur Privé</span>, simple et avantageux
                </flux:heading>

                {{-- Sous-titre --}}
                <flux:text class="text-zinc-600 mt-6 text-lg sm:text-xl leading-relaxed">
                    Investissez dans l'immobilier locatif avec le nouveau dispositif fiscal 2026.
                    Jusqu'à <span class="font-semibold text-zinc-900">5,5% d'amortissement annuel</span> sur votre investissement.
                </flux:text>

                {{-- CTAs --}}
                <div class="mt-8 sm:mt-11 flex flex-col sm:flex-row gap-3 sm:gap-5">
                    <flux:button href="#comprendre" variant="filled" icon-trailing="arrow-right"
                        class="w-full sm:w-auto !bg-zinc-900 !text-white hover:!bg-zinc-800">
                        Découvrir le dispositif
                    </flux:button>
                    <flux:button href="#simulateur" variant="ghost" icon-trailing="arrow-right"
                        class="w-full sm:w-auto">
                        Simuler mon investissement
                    </flux:button>
                </div>

                {{-- Stats --}}
                <div class="border-zinc-200 mt-8 sm:mt-12 flex flex-col border-t">
                    <div class="mt-6 sm:mt-8">
                        <div class="flex flex-row items-center gap-2">
                            <flux:heading class="text-zinc-900 text-2xl sm:text-4xl font-medium">
                                5,5%
                            </flux:heading>
                            <flux:text class="text-zinc-600 text-sm sm:text-lg font-light">
                                d'amortissement maximum par an
                            </flux:text>
                        </div>

                        {{-- Callout --}}
                        <div class="mt-4 sm:mt-6 bg-zinc-100 border border-zinc-200 rounded-xl p-4">
                            <div class="flex items-start gap-3">
                                <flux:icon.calculator class="size-5 text-zinc-900 shrink-0 mt-0.5" />
                                <div>
                                    <flux:heading class="text-xs md:text-lg text-zinc-900 font-semibold">
                                        Calculez votre économie d'impôts
                                    </flux:heading>
                                    <flux:text class="text-xs md:text-sm mt-1 text-zinc-600">
                                        Découvrez en quelques clics combien vous pouvez économiser avec le Statut du Bailleur Privé.
                                    </flux:text>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Version mobile simplifiée --}}
            <div class="sm:hidden w-full space-y-4">
                {{-- Stats en row --}}
                <div class="grid grid-cols-2 gap-3">
                    {{-- Card 5,5% --}}
                    <flux:card class="!bg-zinc-100 !border-zinc-200 p-4">
                        <flux:heading class="text-zinc-900 !text-3xl font-semibold tracking-tighter">5,5%</flux:heading>
                        <flux:text class="text-zinc-700 text-[10px] leading-snug mt-2">
                            Taux d'amortissement maximum pour les logements neufs au niveau très social
                        </flux:text>
                    </flux:card>

                    {{-- Card 9 ans --}}
                    <flux:card class="!bg-zinc-900 !border-zinc-900 p-4">
                        <flux:heading class="text-white !text-3xl font-semibold tracking-tighter">9 ans</flux:heading>
                        <flux:text class="text-zinc-300 text-[10px] leading-snug mt-2">
                            Durée d'engagement minimum pour bénéficier du dispositif
                        </flux:text>
                    </flux:card>
                </div>

                {{-- Offres --}}
                <div class="grid grid-cols-2 gap-3">
                    <a href="#avantages" class="bg-white border border-zinc-200 rounded-xl p-3 flex items-center gap-3 shadow-sm">
                        <div class="bg-zinc-100 h-10 w-10 shrink-0 rounded-lg flex items-center justify-center">
                            <flux:icon.presentation-chart-line class="size-5 text-zinc-900" />
                        </div>
                        <div>
                            <flux:heading class="text-zinc-900 font-semibold text-sm">Amortissement</flux:heading>
                            <flux:text class="text-zinc-600 text-xs">Jusqu'à 12 000€/an</flux:text>
                        </div>
                    </a>
                    <a href="#eligibilite" class="bg-white border border-zinc-200 rounded-xl p-3 flex items-center gap-3 shadow-sm">
                        <div class="bg-zinc-200 h-10 w-10 shrink-0 rounded-lg flex items-center justify-center">
                            <flux:icon.check-badge class="size-5 text-zinc-700" />
                        </div>
                        <div>
                            <flux:heading class="text-zinc-900 font-semibold text-sm">Éligibilité</flux:heading>
                            <flux:text class="text-zinc-600 text-xs">Vérifier mes droits</flux:text>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Grid d'images à droite (tablette et desktop) --}}
            <div class="hidden sm:block w-full max-w-md mx-auto lg:max-w-none lg:mx-0">
                <div class="grid grid-cols-[5.3rem_6.25rem_12rem] grid-rows-[10.3rem_9.625rem_1.25rem_4.3rem] gap-[0.8rem] xl:grid-cols-[8.5rem_10rem_19.3rem] xl:grid-rows-[16.625rem_15.5rem_1.375rem_6.9rem] xl:gap-[1.25rem]">

                    {{-- Card principale --}}
                    <div class="col-[2/-1] overflow-hidden rounded-3xl bg-gradient-to-br from-zinc-800 to-zinc-900 p-4 sm:p-6 xl:p-8 flex flex-col justify-between">
                        <div>
                            <flux:heading class="text-white !text-3xl sm:!text-4xl xl:!text-6xl font-semibold tracking-tighter">
                                5,5%
                            </flux:heading>
                            <flux:text class="text-zinc-300 mt-2 text-xs sm:text-sm xl:text-base leading-relaxed">
                                Taux d'amortissement maximum par an pour les logements neufs au niveau tres social
                            </flux:text>
                        </div>
                        <div class="flex items-center gap-2 mt-4">
                            <div class="size-8 xl:size-10 rounded-lg bg-white/20 flex items-center justify-center">
                                <flux:icon.chart-bar-square class="size-4 xl:size-5 text-white" />
                            </div>
                            <flux:text class="text-white text-xs xl:text-sm font-medium">Plafond 12 000€/an</flux:text>
                        </div>
                    </div>

                    {{-- SVG décoratif --}}
                    <div class="col-[1/2] row-[1/2] self-end">
                        <svg class="fill-zinc-300 w-[4.375rem] xl:w-[8rem]" viewBox="0 0 131 174" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M123.385 5.96661C123.548 6.77895 123.021 7.56919 122.209 7.73166C115.896 8.99415 109.63 9.96037 103.486 10.9077C99.0811 11.5869 94.7393 12.2564 90.4886 13.0183C80.1979 14.8631 70.1037 17.2952 59.8744 21.8151C41.5635 29.906 25.0024 41.8876 14.0337 58.7365C8.37592 67.4273 4.29836 78.5442 3.60483 89.504C2.91206 100.452 5.59556 111.123 13.2956 119.15C17.2013 123.222 22.165 126.554 27.7033 129.043C26.3041 123.491 25.7088 117.6 26.1196 111.355C27.0927 96.5641 39.1649 88.8778 52.0447 87.6439C64.8739 86.4148 79.2577 91.4779 85.4762 102.943C88.8209 109.11 89.0032 115.236 86.7021 120.549C84.4187 125.822 79.7615 130.137 73.7 132.917C63.9444 137.39 51.9845 138.282 40.6769 136.184C37.8771 135.664 35.1075 134.96 32.412 134.076C37.8412 148.683 49.141 160.796 61.9724 170.755C62.6268 171.263 62.7456 172.205 62.2377 172.86C61.7298 173.514 60.7875 173.633 60.133 173.125C46.4556 162.51 34.1037 149.186 28.7723 132.754C22.0105 130.053 15.8772 126.176 11.1305 121.227C2.69861 112.436 -0.119486 100.855 0.610818 89.3145C1.34036 77.7856 5.61055 66.1764 11.5195 57.0997C22.8909 39.6323 39.9827 27.3247 58.6619 19.071C69.1997 14.4148 79.5552 11.9305 89.9592 10.0654C94.3905 9.27105 98.7725 8.59677 103.176 7.91915C109.222 6.98883 115.309 6.05221 121.62 4.78992C122.433 4.62745 123.223 5.15427 123.385 5.96661ZM31.2114 130.479C34.4288 131.674 37.7946 132.598 41.2243 133.234C52.0581 135.245 63.3684 134.354 72.4495 130.19C77.9974 127.646 82.0229 123.805 83.9492 119.357C85.8579 114.95 85.7769 109.79 82.8391 104.373C77.3783 94.3052 64.3988 89.4741 52.3308 90.6302C40.3135 91.7815 29.9547 98.7598 29.1131 111.552C28.6714 118.266 29.4591 124.568 31.2114 130.479Z" />
                        </svg>
                    </div>

                    {{-- Card statistique 9 ans --}}
                    <flux:card class="col-[1/3] overflow-hidden !bg-zinc-100 !border-zinc-200 p-3 sm:p-4 xl:p-6">
                        <flux:heading class="text-zinc-900 text-3xl sm:text-4xl xl:text-7xl font-semibold tracking-tighter">
                            9 ans
                        </flux:heading>
                        <flux:text class="text-zinc-700 mt-2 sm:mt-3 text-[9px] sm:text-[10px] md:text-xs xl:mt-7 xl:text-sm">
                            Durée d'engagement minimum pour bénéficier du dispositif et sécuriser votre investissement
                        </flux:text>
                    </flux:card>

                    {{-- Card 600k logements --}}
                    <a href="#comprendre" class="bg-zinc-100 border border-zinc-200 col-[2/3] row-[-3/-1] flex h-full w-full items-center justify-center overflow-hidden rounded-3xl relative group hover:shadow-lg transition-all cursor-pointer">
                        <div class="text-center px-2 sm:px-4 relative z-10">
                            <flux:heading class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl font-semibold tracking-tighter bg-gradient-to-b from-zinc-900 to-zinc-500 bg-clip-text text-transparent mb-1 sm:mb-2 group-hover:scale-105 transition-transform">
                                600k
                            </flux:heading>
                            <flux:text class="text-zinc-700 text-sm sm:text-base md:text-lg xl:text-xl">
                                logements manquants
                            </flux:text>
                        </div>
                    </a>

                    {{-- Card 2028 --}}
                    <div class="bg-gradient-to-br from-zinc-800 to-zinc-900 relative col-[3/4] row-[2/4] rounded-3xl overflow-hidden flex items-center justify-center">
                        <div class="relative z-10 text-center px-2 sm:px-4">
                            <flux:heading class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl font-semibold tracking-tighter text-white mb-1 sm:mb-2">
                                2028
                            </flux:heading>
                            <flux:text class="text-zinc-300 text-sm sm:text-base md:text-lg xl:text-xl leading-tight">
                                Date limite pour acquérir un bien éligible au dispositif
                            </flux:text>
                        </div>
                    </div>

                    {{-- Cards offres --}}
                    <div class="col-[-2/-1] row-[-1/-2] flex flex-col gap-2 sm:gap-3">
                        {{-- Offre Neuf --}}
                        <a href="#avantages" class="bg-white border border-zinc-200 rounded-xl p-2 sm:p-3 xl:p-4 flex items-center gap-2 sm:gap-3 shadow-sm transition-all hover:shadow-md hover:scale-[1.02] cursor-pointer">
                            <div class="bg-zinc-100 h-8 w-8 sm:h-10 sm:w-10 xl:h-12 xl:w-12 shrink-0 rounded-lg flex items-center justify-center">
                                <flux:icon.home-modern class="size-4 sm:size-5 xl:size-6 text-zinc-900" />
                            </div>
                            <div class="flex flex-col flex-1 min-w-0">
                                <flux:heading class="text-zinc-900 font-semibold tracking-tight text-sm sm:text-base xl:text-lg">
                                    Logement neuf RE2020
                                </flux:heading>
                                <flux:text class="text-zinc-600 text-xs sm:text-sm xl:text-base">
                                    Jusqu'à 5,5% d'amortissement
                                </flux:text>
                            </div>
                        </a>

                        {{-- Offre Rénové --}}
                        <a href="#avantages" class="bg-white border border-zinc-200 rounded-xl p-2 sm:p-3 xl:p-4 flex items-center gap-2 sm:gap-3 shadow-sm transition-all hover:shadow-md hover:scale-[1.02] cursor-pointer">
                            <div class="bg-zinc-200 h-8 w-8 sm:h-10 sm:w-10 xl:h-12 xl:w-12 shrink-0 rounded-lg flex items-center justify-center">
                                <flux:icon.wrench-screwdriver class="size-4 sm:size-5 xl:size-6 text-zinc-700" />
                            </div>
                            <div class="flex flex-col flex-1 min-w-0">
                                <flux:heading class="text-zinc-900 font-semibold tracking-tight text-sm sm:text-base xl:text-lg">
                                    Ancien rénové
                                </flux:heading>
                                <flux:text class="text-zinc-600 text-xs sm:text-sm xl:text-base">
                                    3% à 4% d'amortissement
                                </flux:text>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Dashboard Preview Block --}}
<section class="py-8 sm:py-12 md:py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="rounded-t-4xl relative w-full max-w-7xl mx-auto overflow-hidden border-x border-t border-zinc-200"
            x-data="{
                currentSlide: 0,
                slides: [
                    { image: '{{ asset('images/simulateur-step-1.png') }}', step: 'Étape 1', title: 'Informations sur le bien' },
                    { image: '{{ asset('images/simulateur-step-2.png') }}', step: 'Étape 2', title: 'Niveau de loyer' },
                    { image: '{{ asset('images/simulateur-step-3.png') }}', step: 'Étape 3', title: 'Situation fiscale' },
                    { image: '{{ asset('images/simulateur-step-4.png') }}', step: 'Étape 4', title: 'Vos coordonnées' },
                    { image: '{{ asset('images/simulateur-step-5.png') }}', step: 'Étape 5', title: 'Vos résultats' }
                ],
                init() {
                    setInterval(() => {
                        this.currentSlide = (this.currentSlide + 1) % this.slides.length;
                    }, 3000);
                }
            }">
            {{-- Browser bar --}}
            <div class="bg-zinc-100 lg:gap-25 flex items-center justify-between gap-10 px-8 py-4">
                <div class="flex items-center gap-2">
                    <div class="size-3 rounded-full bg-red-500"></div>
                    <div class="size-3 rounded-full bg-yellow-500"></div>
                    <div class="size-3 rounded-full bg-green-500"></div>
                </div>
                <div class="flex w-full items-center justify-center">
                    <p class="bg-zinc-50 relative hidden w-full rounded-full px-4 py-1 text-center text-sm tracking-tight md:block text-zinc-900">
                        https://bailleurprive.io/simulateur
                        <svg class="absolute right-3 top-2 size-3.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.5 2v6h-6M2.5 22v-6h6M2 11.5a10 10 0 0 1 18.8-4.3M22 12.5a10 10 0 0 1-18.8 4.2"></path>
                        </svg>
                    </p>
                </div>
                <div class="flex items-center gap-4 opacity-40">
                    <svg class="size-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                        <polyline points="16 6 12 2 8 6"></polyline>
                        <line x1="12" x2="12" y1="2" y2="15"></line>
                    </svg>
                </div>
            </div>

            {{-- Slider images --}}
            <a href="{{ url('/simulateur') }}" class="relative w-full bg-zinc-50 block cursor-pointer hover:opacity-95 transition-opacity">
                <div class="relative overflow-hidden">
                    <template x-for="(slide, index) in slides" :key="index">
                        <img
                            :src="slide.image"
                            :alt="slide.title"
                            class="w-full h-auto absolute top-0 left-0 transition-opacity duration-500"
                            :class="currentSlide === index ? 'opacity-100 relative' : 'opacity-0'"
                        >
                    </template>
                </div>
                <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-white to-transparent pointer-events-none"></div>
            </a>

        </div>
    </div>
</section>
