{{-- Footer --}}
<footer class="bg-zinc-900 text-white py-16">
    <div class="container mx-auto px-4 max-w-7xl">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
            {{-- Logo & Description --}}
            <div class="md:col-span-2">
                <div class="flex items-center gap-2 mb-4">
                    <div class="size-10 rounded-xl bg-white flex items-center justify-center">
                        <span class="text-zinc-900 text-base font-bold tracking-tight">BP</span>
                    </div>
                    <div>
                        <span class="font-bold text-white text-lg">Bailleur Privé</span>
                        <span class="text-xs text-zinc-400 block -mt-1">Dispositif Fiscal 2026</span>
                    </div>
                </div>
                <p class="text-zinc-400 text-sm leading-relaxed max-w-md">
                    Plateforme d'information sur le Statut du Bailleur Privé, le nouveau dispositif fiscal 2026
                    pour les investisseurs immobiliers. Découvrez comment optimiser votre fiscalité tout en
                    contribuant à la crise du logement.
                </p>
            </div>

            {{-- Navigation --}}
            <div>
                <h4 class="font-semibold text-white mb-4">Navigation</h4>
                <ul class="space-y-2">
                    <li><a href="#comprendre" class="text-zinc-400 hover:text-white text-sm transition-colors">Comprendre le dispositif</a></li>
                    <li><a href="#avantages" class="text-zinc-400 hover:text-white text-sm transition-colors">Avantages fiscaux</a></li>
                    <li><a href="#eligibilite" class="text-zinc-400 hover:text-white text-sm transition-colors">Éligibilité</a></li>
                    <li><a href="#comparatif" class="text-zinc-400 hover:text-white text-sm transition-colors">Comparatif</a></li>
                    <li><a href="#faq" class="text-zinc-400 hover:text-white text-sm transition-colors">FAQ</a></li>
                </ul>
            </div>

            {{-- Contact --}}
            <div>
                <h4 class="font-semibold text-white mb-4">Contact</h4>
                <ul class="space-y-2">
                    <li><a href="/contact" class="text-zinc-400 hover:text-white text-sm transition-colors">Nous contacter</a></li>
                    <li><a href="/simulateur" class="text-zinc-400 hover:text-white text-sm transition-colors">Simulateur</a></li>
                </ul>
            </div>
        </div>

        {{-- Bottom bar --}}
        <div class="mt-12 pt-8 border-t border-zinc-800 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p class="text-zinc-500 text-sm">
                &copy; {{ date('Y') }} BailleurPrive.io - Tous droits réservés
            </p>
            <div class="flex items-center gap-6">
                <a href="#" class="text-zinc-500 hover:text-white text-sm transition-colors">Mentions légales</a>
                <a href="#" class="text-zinc-500 hover:text-white text-sm transition-colors">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>
