<x-layouts.app title="Simulateur - BailleurPrive.io">

    {{-- Hero Section --}}
    <section class="pt-32 pb-12 bg-gradient-to-b from-zinc-100 to-white">
        <div class="container mx-auto px-4 max-w-7xl text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-zinc-900 text-white rounded-full text-sm font-medium mb-6">
                <flux:icon.calculator class="size-4" />
                Simulateur fiscal
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-zinc-900 mb-4">
                Calculez vos economies d'impots
            </h1>
            <p class="text-lg text-zinc-600 max-w-2xl mx-auto">
                Estimez votre avantage fiscal avec le Statut du Bailleur Prive en quelques clics.
            </p>
        </div>
    </section>

    {{-- Simulateur --}}
    <section class="py-12 pb-20">
        <div class="container mx-auto px-4 max-w-7xl">
            <livewire:simulateur />
        </div>
    </section>

    {{-- Info Section --}}
    <section class="py-16 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-4xl">
            <div class="text-center mb-12">
                <h2 class="text-2xl font-bold text-zinc-900 mb-4">Comment sont calcules vos avantages ?</h2>
                <p class="text-zinc-600">Le simulateur applique les formules officielles du dispositif Bailleur Prive.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-white rounded-2xl p-6 border border-zinc-200">
                    <div class="size-12 rounded-xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.calculator class="size-6 text-zinc-700" />
                    </div>
                    <h3 class="font-semibold text-zinc-900 mb-2">Base amortissable</h3>
                    <p class="text-sm text-zinc-600">
                        80% du prix du bien (le terrain n'est pas amortissable).
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-zinc-200">
                    <div class="size-12 rounded-xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.presentation-chart-line class="size-6 text-zinc-700" />
                    </div>
                    <h3 class="font-semibold text-zinc-900 mb-2">Taux d'amortissement</h3>
                    <p class="text-sm text-zinc-600">
                        De 3,5% a 5,5% selon le niveau de loyer choisi.
                    </p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-zinc-200">
                    <div class="size-12 rounded-xl bg-zinc-100 flex items-center justify-center mb-4">
                        <flux:icon.banknotes class="size-6 text-zinc-700" />
                    </div>
                    <h3 class="font-semibold text-zinc-900 mb-2">Economie d'impot</h3>
                    <p class="text-sm text-zinc-600">
                        Amortissement annuel multiplie par votre TMI.
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-layouts.app>
