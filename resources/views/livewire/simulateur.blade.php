<div class="max-w-4xl mx-auto">
    {{-- Progress Steps --}}
    <div class="mb-8">
        <div class="flex items-center justify-between">
            @foreach([1 => 'Le bien', 2 => 'Loyer', 3 => 'Fiscalité', 4 => 'Contact', 5 => 'Résultats'] as $num => $label)
                <div class="flex items-center {{ $num < 5 ? 'flex-1' : '' }}">
                    <button
                        wire:click="goToStep({{ $num }})"
                        class="flex items-center gap-2 {{ $step >= $num ? 'text-zinc-900' : 'text-zinc-400' }}"
                        @if($num > $step) disabled @endif
                    >
                        <div class="size-8 rounded-full flex items-center justify-center text-sm font-bold transition-colors
                            {{ $step > $num ? 'bg-zinc-900 text-white' : ($step === $num ? 'bg-zinc-900 text-white' : 'bg-zinc-200 text-zinc-500') }}">
                            @if($step > $num)
                                <flux:icon.check class="size-4" />
                            @else
                                {{ $num }}
                            @endif
                        </div>
                        <span class="hidden lg:block text-sm font-medium">{{ $label }}</span>
                    </button>
                    @if($num < 5)
                        <div class="flex-1 h-0.5 mx-2 lg:mx-4 {{ $step > $num ? 'bg-zinc-900' : 'bg-zinc-200' }}"></div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>

    {{-- Step Content --}}
    <div class="bg-white rounded-3xl border border-zinc-200 p-8">

        {{-- Etape 1: Le bien --}}
        @if($step === 1)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Informations sur le bien</h2>
                <p class="text-zinc-600 mb-8">Renseignez les caractéristiques de votre investissement immobilier.</p>

                <div class="space-y-6">
                    <div>
                        <label for="prixBien" class="block text-sm font-medium text-zinc-700 mb-2">Prix d'achat du bien</label>
                        <div class="relative">
                            <input type="number" id="prixBien" wire:model.live.number="prixBien" min="50000" max="1000000" step="5000"
                                class="w-full px-4 py-3 pr-12 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-lg text-zinc-900" placeholder="200000">
                            <span class="absolute right-4 top-1/2 -translate-y-1/2 text-zinc-500 font-medium">EUR</span>
                        </div>
                        <input type="range" wire:model.live.number="prixBien" min="50000" max="1000000" step="5000" class="w-full mt-3 accent-zinc-900 h-2 cursor-pointer">
                        <div class="flex justify-between text-xs text-zinc-500 mt-1">
                            <span>50 000 EUR</span>
                            <span>1 000 000 EUR</span>
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 mb-3">Type de bien</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label class="cursor-pointer">
                                <input type="radio" wire:model.live="typeBien" value="neuf" class="peer sr-only">
                                <div class="p-4 border-2 rounded-xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-50 border-zinc-200 hover:border-zinc-300">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-xl bg-zinc-100 flex items-center justify-center">
                                            <flux:icon.building-office class="size-5 text-zinc-700" />
                                        </div>
                                        <div>
                                            <div class="font-semibold text-zinc-900">Neuf RE2020</div>
                                            <div class="text-xs text-zinc-500">Taux jusqu'à 5,5%</div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" wire:model.live="typeBien" value="renove" class="peer sr-only">
                                <div class="p-4 border-2 rounded-xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-50 border-zinc-200 hover:border-zinc-300">
                                    <div class="flex items-center gap-3">
                                        <div class="size-10 rounded-xl bg-zinc-100 flex items-center justify-center">
                                            <flux:icon.wrench-screwdriver class="size-5 text-zinc-700" />
                                        </div>
                                        <div>
                                            <div class="font-semibold text-zinc-900">Ancien rénové</div>
                                            <div class="text-xs text-zinc-500">Taux de 3% à 4%</div>
                                        </div>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div>
                        <label for="surface" class="block text-sm font-medium text-zinc-700 mb-2">Surface (m2)</label>
                        <input type="number" id="surface" wire:model.live="surface" min="9" max="500"
                            class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="45">
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 2: Niveau de loyer --}}
        @if($step === 2)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Niveau de loyer</h2>
                <p class="text-zinc-600 mb-8">Plus le loyer est accessible, plus votre avantage fiscal est important.</p>

                <div class="space-y-4">
                    @php
                        $niveaux = [
                            'intermediaire' => ['label' => 'Intermédiaire', 'taux' => $typeBien === 'neuf' ? '3,5%' : '3%', 'plafond' => '8 000', 'desc' => 'Loyers légèrement sous le marché', 'public' => 'Revenus moyens'],
                            'social' => ['label' => 'Social', 'taux' => $typeBien === 'neuf' ? '4,5%' : '4%', 'plafond' => '10 000', 'desc' => 'Loyers conventionnés sociaux', 'public' => 'Revenus modestes', 'recommended' => true],
                            'tres_social' => ['label' => 'Très social', 'taux' => $typeBien === 'neuf' ? '5,5%' : '4,5%', 'plafond' => '12 000', 'desc' => 'Loyers très accessibles', 'public' => 'Revenus très modestes'],
                        ];
                    @endphp

                    @foreach($niveaux as $key => $niveau)
                        <label class="cursor-pointer block">
                            <input type="radio" wire:model.live="niveauLoyer" value="{{ $key }}" class="peer sr-only">
                            <div class="p-6 border-2 rounded-2xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-50 border-zinc-200 hover:border-zinc-300 relative">
                                @if(isset($niveau['recommended']))
                                    <span class="absolute -top-3 right-4 px-3 py-1 bg-zinc-900 text-white text-xs font-medium rounded-full">Recommandé</span>
                                @endif
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-4">
                                        <div class="text-center">
                                            <div class="text-3xl font-bold text-zinc-900">{{ $niveau['taux'] }}</div>
                                            <div class="text-xs text-zinc-500">par an</div>
                                        </div>
                                        <div class="h-12 w-px bg-zinc-200"></div>
                                        <div>
                                            <div class="font-semibold text-zinc-900">{{ $niveau['label'] }}</div>
                                            <div class="text-sm text-zinc-600">{{ $niveau['desc'] }}</div>
                                        </div>
                                    </div>
                                    <div class="text-right hidden sm:block">
                                        <div class="text-sm font-semibold text-zinc-900">Plafond {{ $niveau['plafond'] }} EUR/an</div>
                                        <div class="text-xs text-zinc-500">{{ $niveau['public'] }}</div>
                                    </div>
                                </div>
                            </div>
                        </label>
                    @endforeach
                </div>

                <div class="mt-6 p-4 bg-blue-50 rounded-xl border border-blue-200">
                    <div class="flex items-start gap-3">
                        <flux:icon.information-circle class="size-5 text-blue-600 shrink-0 mt-0.5" />
                        <p class="text-sm text-blue-800"><strong>Bon à savoir :</strong> Plus votre loyer est bas, plus votre avantage fiscal est important. C'est gagnant-gagnant !</p>
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 3: Situation fiscale --}}
        @if($step === 3)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Votre situation fiscale</h2>
                <p class="text-zinc-600 mb-8">Sélectionnez votre Tranche Marginale d'Imposition (TMI).</p>

                <div class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-zinc-700 mb-3">Tranche Marginale d'Imposition</label>
                        <div class="grid grid-cols-2 sm:grid-cols-5 gap-3">
                            @foreach([0, 11, 30, 41, 45] as $tranche)
                                <label class="cursor-pointer">
                                    <input type="radio" wire:model.live="tmi" value="{{ $tranche }}" class="peer sr-only">
                                    <div class="p-4 text-center border-2 rounded-xl transition-all peer-checked:border-zinc-900 peer-checked:bg-zinc-900 peer-checked:text-white border-zinc-200 hover:border-zinc-300 text-zinc-900">
                                        <div class="text-2xl font-bold">{{ $tranche }}%</div>
                                    </div>
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div class="p-4 bg-zinc-100 rounded-xl">
                        <h4 class="font-semibold text-zinc-900 mb-3">Comment connaître votre TMI ?</h4>
                        <p class="text-sm text-zinc-600 mb-3">Votre TMI dépend de votre revenu imposable annuel :</p>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-2 text-sm text-zinc-900">
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">0%</span> : jusqu'à 11 294 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">11%</span> : 11 295 - 28 797 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">30%</span> : 28 798 - 82 341 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">41%</span> : 82 342 - 177 106 EUR</div>
                            <div class="bg-white rounded-lg p-2"><span class="font-semibold">45%</span> : au-delà de 177 106 EUR</div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 4: Coordonnees --}}
        @if($step === 4)
            <div>
                <h2 class="text-2xl font-bold text-zinc-900 mb-2">Vos coordonnées</h2>
                <p class="text-zinc-600 mb-8">Recevez votre simulation détaillée en PDF par email.</p>

                <div class="space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label for="prenom" class="block text-sm font-medium text-zinc-700 mb-2">Prénom <span class="text-red-500">*</span></label>
                            <input type="text" id="prenom" wire:model="prenom" class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="Votre prénom">
                            @error('prenom')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                        <div>
                            <label for="nom" class="block text-sm font-medium text-zinc-700 mb-2">Nom <span class="text-red-500">*</span></label>
                            <input type="text" id="nom" wire:model="nom" class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="Votre nom">
                            @error('nom')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        </div>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-zinc-700 mb-2">Adresse email <span class="text-red-500">*</span></label>
                        <input type="email" id="email" wire:model="email" class="w-full px-4 py-3 border border-zinc-300 rounded-xl focus:ring-2 focus:ring-zinc-900 focus:border-zinc-900 text-zinc-900" placeholder="votre@email.com">
                        @error('email')<p class="mt-1 text-sm text-red-600">{{ $message }}</p>@enderror
                        <p class="mt-2 text-xs text-zinc-500">Vous recevrez votre simulation en PDF à cette adresse.</p>
                    </div>

                    <div class="p-4 bg-zinc-50 rounded-xl border border-zinc-200">
                        <label class="flex items-start gap-3 cursor-pointer">
                            <input type="checkbox" wire:model="accepteContact" class="mt-1 size-5 rounded border-zinc-300 text-zinc-900 focus:ring-zinc-900">
                            <div>
                                <span class="text-sm text-zinc-700 font-medium">J'accepte d'être contacté <span class="text-red-500">*</span></span>
                                <p class="text-xs text-zinc-500 mt-1">En cochant cette case, vous acceptez de recevoir votre simulation par email et d'être recontacté concernant votre projet.</p>
                            </div>
                        </label>
                        @error('accepteContact')<p class="mt-2 text-sm text-red-600">{{ $message }}</p>@enderror
                    </div>
                </div>
            </div>
        @endif

        {{-- Etape 5: Resultats --}}
        @if($step === 5)
            <div>
                <div class="text-center mb-8">
                    <div class="inline-flex items-center justify-center size-16 rounded-full bg-green-100 mb-4">
                        <flux:icon.check class="size-8 text-green-600" />
                    </div>
                    <h2 class="text-2xl font-bold text-zinc-900 mb-2">Vos résultats, {{ $prenom }} !</h2>
                    <p class="text-zinc-600">Voici l'estimation de vos économies d'impôts avec le Statut du Bailleur Privé.</p>
                </div>

                <div class="grid sm:grid-cols-2 gap-4 mb-8">
                    <div class="bg-zinc-900 rounded-2xl p-6 text-center text-white">
                        <div class="text-sm text-zinc-400 mb-1">Économie annuelle</div>
                        <div class="text-4xl font-bold">{{ number_format($resultats['economieAnnuelle'] ?? 0, 0, ',', ' ') }} EUR</div>
                    </div>
                    <div class="bg-gradient-to-br from-zinc-900 to-zinc-700 rounded-2xl p-6 text-center text-white">
                        <div class="text-sm text-zinc-300 mb-1">Économie sur 9 ans</div>
                        <div class="text-4xl font-bold">{{ number_format($resultats['economieTotale'] ?? 0, 0, ',', ' ') }} EUR</div>
                    </div>
                </div>

                <div class="bg-zinc-50 rounded-2xl p-6 mb-8">
                    <h3 class="font-semibold text-zinc-900 mb-4">Détail du calcul</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Prix du bien</span>
                            <span class="font-semibold text-zinc-900">{{ number_format($prixBien ?? 0, 0, ',', ' ') }} EUR</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Base amortissable (80%)</span>
                            <span class="font-semibold text-zinc-900">{{ number_format($resultats['baseAmortissable'] ?? 0, 0, ',', ' ') }} EUR</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Taux d'amortissement</span>
                            <span class="font-semibold text-zinc-900">{{ $resultats['taux'] ?? 0 }}%</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-zinc-200">
                            <span class="text-zinc-600">Amortissement annuel</span>
                            <span class="font-semibold text-zinc-900">{{ number_format($resultats['amortissementAnnuel'] ?? 0, 0, ',', ' ') }} EUR</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-zinc-600">TMI</span>
                            <span class="font-semibold text-zinc-900">{{ $tmi }}%</span>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-green-50 rounded-xl border border-green-200 mb-6">
                    <div class="flex items-start gap-3">
                        <flux:icon.envelope class="size-5 text-green-600 shrink-0 mt-0.5" />
                        <div>
                            <p class="text-sm text-green-800 font-medium">Simulation envoyée par email !</p>
                            <p class="text-sm text-green-700 mt-1">Vous allez recevoir votre simulation détaillée en PDF à l'adresse <strong>{{ $email }}</strong>.</p>
                        </div>
                    </div>
                </div>

                <div class="p-4 bg-amber-50 rounded-xl border border-amber-200">
                    <div class="flex items-start gap-3">
                        <flux:icon.exclamation-triangle class="size-5 text-amber-600 shrink-0 mt-0.5" />
                        <p class="text-sm text-amber-800"><strong>Simulation indicative :</strong> Consultez un professionnel pour valider votre situation.</p>
                    </div>
                </div>
            </div>
        @endif

        {{-- Navigation --}}
        <div class="flex justify-between mt-8 pt-6 border-t border-zinc-200">
            @if($step > 1 && $step < 5)
                <button wire:click="previousStep" class="inline-flex items-center gap-2 px-6 py-3 text-zinc-700 font-medium rounded-xl hover:bg-zinc-100 transition-colors">
                    <flux:icon.arrow-left class="size-5" /> Retour
                </button>
            @elseif($step === 5)
                <button wire:click="recommencer" class="inline-flex items-center gap-2 px-6 py-3 text-zinc-700 font-medium rounded-xl hover:bg-zinc-100 transition-colors">
                    <flux:icon.arrow-path class="size-5" /> Nouvelle simulation
                </button>
            @else
                <div></div>
            @endif

            @if($step < 4)
                <button wire:click="nextStep" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    Continuer <flux:icon.arrow-right class="size-5" />
                </button>
            @elseif($step === 4)
                <button wire:click="nextStep" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    <flux:icon.paper-airplane class="size-5" /> Recevoir ma simulation
                </button>
            @else
                <a href="/contact" class="inline-flex items-center gap-2 px-6 py-3 bg-zinc-900 text-white font-medium rounded-xl hover:bg-zinc-800 transition-colors">
                    <flux:icon.phone class="size-5" /> Prendre rendez-vous
                </a>
            @endif
        </div>
    </div>
</div>
