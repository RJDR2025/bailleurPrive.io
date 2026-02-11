{{-- Barre de navigation principale inspirée de lmnp.ai --}}

{{-- Desktop Navigation - Fixed Container --}}
<div class="fixed top-0 left-0 right-0 z-50 hidden lg:block bg-white/80 backdrop-blur-xl">
    <div class="container mx-auto px-4 max-w-7xl pt-2">
        {{-- Top Bar --}}
        <div class="bg-white border border-zinc-200 rounded-t-2xl shadow-sm">
            <div class="relative flex items-center justify-between h-12 text-sm px-6">
                {{-- Left side: Logo --}}
                <div class="flex items-center">
                    <a href="/" class="flex items-center gap-2 text-zinc-900 hover:text-zinc-700 transition-colors">
                        <div class="size-7 rounded-lg bg-zinc-900 flex items-center justify-center">
                            <span class="text-white text-xs font-bold tracking-tight">BP</span>
                        </div>
                        <span class="font-semibold">BailleurPrive.io</span>
                    </a>
                </div>

                {{-- Center: Info --}}
                <div class="hidden lg:flex items-center gap-6 absolute left-1/2 -translate-x-1/2">
                    <span class="flex items-center gap-2 text-zinc-900">
                        <flux:icon.calendar variant="micro" class="w-4 h-4" />
                        <span>Dispositif fiscal 2026-2028</span>
                    </span>
                    <a href="/contact" class="flex items-center gap-2 px-3 py-1.5 bg-zinc-100 text-zinc-900 font-medium text-sm rounded-lg hover:bg-zinc-200 transition-colors">
                        <flux:icon.envelope variant="micro" class="w-4 h-4" />
                        <span>Contact</span>
                    </a>
                </div>

                {{-- Right side: CTA --}}
                <div class="flex items-center gap-4">
                    <a href="/simulateur" class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-zinc-900 text-white text-sm font-medium rounded-md hover:bg-zinc-800 transition-colors">
                        <flux:icon.calculator variant="micro" class="w-4 h-4" />
                        Simuler mon investissement
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Desktop Navigation - Secondary Bar --}}
<div class="hidden lg:block fixed top-14 left-0 right-0 z-50">
    <div class="container mx-auto px-4 max-w-7xl">
        <header x-data="{
                activeDropdown: null,
                closeTimeout: null,
                openDropdown(name) {
                    clearTimeout(this.closeTimeout);
                    this.activeDropdown = name;
                },
                scheduleClose() {
                    this.closeTimeout = setTimeout(() => {
                        this.activeDropdown = null;
                    }, 200);
                }
            }" class="bg-white border-x border-b border-zinc-200 rounded-b-2xl">
            <nav class="px-6">
                <div class="flex items-center justify-center h-12">
                    <div class="flex items-center justify-center gap-1">

                        {{-- Dropdown: Comprendre --}}
                        <div class="relative" @mouseenter="openDropdown('comprendre')" @mouseleave="scheduleClose()">
                            <button
                                aria-haspopup="true"
                                :aria-expanded="activeDropdown === 'comprendre'"
                                class="flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-xl transition-all">
                                Comprendre
                                <svg class="size-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="activeDropdown === 'comprendre'" x-cloak
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="absolute left-0 top-full mt-1 w-[400px] bg-white border border-zinc-200 shadow-xl rounded-2xl overflow-hidden p-4 z-50">
                                <div class="space-y-2">
                                    <a href="/comprendre" class="flex items-start gap-3 p-3 hover:bg-zinc-100 rounded-xl transition-all group">
                                        <div class="size-10 rounded-xl bg-zinc-200 flex items-center justify-center shrink-0 group-hover:bg-zinc-300 transition-colors">
                                            <flux:icon.light-bulb class="size-5 text-zinc-900" />
                                        </div>
                                        <div class="flex-1">
                                            <span class="font-semibold text-sm text-zinc-900 block">Qu'est-ce que le Bailleur Privé ?</span>
                                            <span class="text-[11px] text-zinc-500 mt-1 block leading-relaxed">Découvrez le nouveau dispositif fiscal 2026 qui remplace le Pinel.</span>
                                        </div>
                                    </a>
                                    <a href="/comparatif" class="flex items-start gap-3 p-3 hover:bg-zinc-100 rounded-xl transition-all group">
                                        <div class="size-10 rounded-xl bg-zinc-200 flex items-center justify-center shrink-0 group-hover:bg-zinc-300 transition-colors">
                                            <flux:icon.arrows-right-left class="size-5 text-zinc-700" />
                                        </div>
                                        <div class="flex-1">
                                            <span class="font-semibold text-sm text-zinc-900 block">Comparatif des dispositifs</span>
                                            <span class="text-[11px] text-zinc-500 mt-1 block leading-relaxed">Bailleur Privé vs Pinel, LMNP, Denormandie...</span>
                                        </div>
                                    </a>
                                    <a href="/calendrier" class="flex items-start gap-3 p-3 hover:bg-zinc-100 rounded-xl transition-all group">
                                        <div class="size-10 rounded-xl bg-zinc-200 flex items-center justify-center shrink-0 group-hover:bg-zinc-300 transition-colors">
                                            <flux:icon.calendar class="size-5 text-zinc-600" />
                                        </div>
                                        <div class="flex-1">
                                            <span class="font-semibold text-sm text-zinc-900 block">Calendrier du dispositif</span>
                                            <span class="text-[11px] text-zinc-500 mt-1 block leading-relaxed">De 2026 au 31 décembre 2028 pour acquérir un bien éligible.</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        {{-- Dropdown: Avantages --}}
                        <div class="relative" @mouseenter="openDropdown('avantages')" @mouseleave="scheduleClose()">
                            <button
                                aria-haspopup="true"
                                :aria-expanded="activeDropdown === 'avantages'"
                                class="flex items-center gap-1.5 px-4 py-2 text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-xl transition-all">
                                Avantages fiscaux
                                <svg class="size-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="activeDropdown === 'avantages'" x-cloak
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 translate-y-2"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                class="absolute left-0 top-full mt-1 w-[500px] bg-white border border-zinc-200 shadow-xl rounded-2xl overflow-hidden p-4 z-50">
                                <div class="grid grid-cols-2 gap-4">
                                    <div class="space-y-2">
                                        <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-400 px-2 mb-2 block">Les 3 leviers fiscaux</span>
                                        <a href="/amortissement" class="flex items-center gap-3 p-2 hover:bg-zinc-100 rounded-lg transition-all group">
                                            <flux:icon.presentation-chart-line class="size-5 text-zinc-900" />
                                            <div>
                                                <span class="text-sm text-zinc-900 block">Amortissement</span>
                                                <span class="text-[10px] text-zinc-400">Jusqu'à 5,5% par an</span>
                                            </div>
                                        </a>
                                        <a href="/micro-foncier" class="flex items-center gap-3 p-2 hover:bg-zinc-100 rounded-lg transition-all group">
                                            <flux:icon.calculator class="size-5 text-zinc-700" />
                                            <div>
                                                <span class="text-sm text-zinc-900 block">Micro-foncier amélioré</span>
                                                <span class="text-[10px] text-zinc-400">Abattement 50%</span>
                                            </div>
                                        </a>
                                        <a href="/deficit-foncier" class="flex items-center gap-3 p-2 hover:bg-zinc-100 rounded-lg transition-all group">
                                            <flux:icon.arrow-trending-up class="size-5 text-zinc-600" />
                                            <div>
                                                <span class="text-sm text-zinc-900 block">Déficit foncier</span>
                                                <span class="text-[10px] text-zinc-400">Jusqu'à 40 000€/an</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="bg-zinc-100 rounded-xl p-4">
                                        <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 mb-3 block">Niveaux de loyers</span>
                                        <div class="space-y-2">
                                            <div class="flex justify-between items-center">
                                                <span class="text-xs text-zinc-600">Intermédiaire</span>
                                                <span class="text-sm font-bold text-zinc-900">3,5%</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span class="text-xs text-zinc-600">Social</span>
                                                <span class="text-sm font-bold text-zinc-900">4,5%</span>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <span class="text-xs text-zinc-600">Très social</span>
                                                <span class="text-sm font-bold text-zinc-900">5,5%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Simple link: Éligibilité --}}
                        <a href="/eligibilite" class="px-4 py-2 text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-xl transition-all">
                            Éligibilité
                        </a>

                        {{-- Simple link: Comparatif --}}
                        <a href="/comparatif" class="px-4 py-2 text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-xl transition-all">
                            Comparatif
                        </a>

                        {{-- Simple link: FAQ --}}
                        <a href="/faq" class="px-4 py-2 text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-xl transition-all">
                            FAQ
                        </a>

                        {{-- Simple link: Contact --}}
                        <a href="/contact" class="px-4 py-2 text-sm font-medium text-zinc-600 hover:text-zinc-900 hover:bg-zinc-100 rounded-xl transition-all">
                            Contact
                        </a>

                    </div>
                </div>
            </nav>
        </header>
    </div>
</div>

{{-- Desktop Spacer --}}
<div class="hidden lg:block h-24"></div>

{{-- Mobile Navigation --}}
<div x-data="{ mobileMenuOpen: false }" class="lg:hidden fixed top-0 left-0 right-0 z-50">
    {{-- Mobile Header --}}
    <header class="bg-white border-b border-zinc-200">
        <div class="flex items-center justify-between h-14 px-4">
            {{-- Logo --}}
            <a href="/" class="flex items-center gap-2">
                <div class="size-8 rounded-lg bg-zinc-900 flex items-center justify-center">
                    <span class="text-white text-sm font-bold tracking-tight">BP</span>
                </div>
                <span class="font-semibold text-zinc-900">BailleurPrive.io</span>
            </a>

            {{-- Menu Button --}}
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-2 rounded-lg hover:bg-zinc-100 transition-colors text-zinc-900">
                <svg x-show="!mobileMenuOpen" class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg x-show="mobileMenuOpen" x-cloak class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </header>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen" x-cloak
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="bg-white border-t border-zinc-200 shadow-lg">
        <nav class="px-4 py-4 space-y-1">
            <a href="/comprendre" @click="mobileMenuOpen = false" class="flex items-center gap-3 px-4 py-3 text-zinc-700 hover:bg-zinc-100 rounded-xl transition-colors">
                <flux:icon.light-bulb class="size-5 text-zinc-900" />
                Comprendre le dispositif
            </a>
            <a href="/amortissement" @click="mobileMenuOpen = false" class="flex items-center gap-3 px-4 py-3 text-zinc-700 hover:bg-zinc-100 rounded-xl transition-colors">
                <flux:icon.banknotes class="size-5 text-zinc-700" />
                Avantages fiscaux
            </a>
            <a href="/eligibilite" @click="mobileMenuOpen = false" class="flex items-center gap-3 px-4 py-3 text-zinc-700 hover:bg-zinc-100 rounded-xl transition-colors">
                <flux:icon.check-badge class="size-5 text-zinc-600" />
                Éligibilité
            </a>
            <a href="/comparatif" @click="mobileMenuOpen = false" class="flex items-center gap-3 px-4 py-3 text-zinc-700 hover:bg-zinc-100 rounded-xl transition-colors">
                <flux:icon.arrows-right-left class="size-5 text-zinc-600" />
                Comparatif
            </a>
            <a href="/calendrier" @click="mobileMenuOpen = false" class="flex items-center gap-3 px-4 py-3 text-zinc-700 hover:bg-zinc-100 rounded-xl transition-colors">
                <flux:icon.calendar class="size-5 text-zinc-600" />
                Calendrier
            </a>
            <a href="/faq" @click="mobileMenuOpen = false" class="flex items-center gap-3 px-4 py-3 text-zinc-700 hover:bg-zinc-100 rounded-xl transition-colors">
                <flux:icon.question-mark-circle class="size-5 text-zinc-600" />
                FAQ
            </a>
            <a href="/contact" @click="mobileMenuOpen = false" class="flex items-center gap-3 px-4 py-3 text-zinc-700 hover:bg-zinc-100 rounded-xl transition-colors">
                <flux:icon.envelope class="size-5 text-zinc-600" />
                Contact
            </a>

            {{-- CTA Mobile --}}
            <div class="pt-4 border-t border-zinc-200">
                <a href="/simulateur" class="flex items-center justify-center gap-2 w-full px-4 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    <flux:icon.calculator class="size-5" />
                    Simuler mon investissement
                </a>
            </div>
        </nav>
    </div>
</div>

{{-- Mobile Spacer --}}
<div class="lg:hidden h-14"></div>
