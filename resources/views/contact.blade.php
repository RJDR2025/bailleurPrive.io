<x-layouts.app title="Contact - BailleurPrive.io">

    {{-- Contact Content --}}
    <section class="pt-32 pb-16">
        <div class="container mx-auto px-4 max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                {{-- Contact Form --}}
                <div class="lg:col-span-2 order-1">
                    <div class="bg-zinc-900 rounded-2xl p-8">
                        <h1 class="text-2xl font-bold text-white mb-2">Envoyez-nous un message</h1>
                        <p class="text-zinc-400 mb-8">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>

                        <form class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstname" class="block text-sm font-medium text-zinc-300 mb-2">Prénom</label>
                                    <input type="text" id="firstname" name="firstname" required
                                        class="w-full px-4 py-3 bg-zinc-800 border border-zinc-700 text-white rounded-xl focus:ring-2 focus:ring-white focus:border-white transition-colors placeholder-zinc-500"
                                        placeholder="Votre prénom">
                                </div>
                                <div>
                                    <label for="lastname" class="block text-sm font-medium text-zinc-300 mb-2">Nom</label>
                                    <input type="text" id="lastname" name="lastname" required
                                        class="w-full px-4 py-3 bg-zinc-800 border border-zinc-700 text-white rounded-xl focus:ring-2 focus:ring-white focus:border-white transition-colors placeholder-zinc-500"
                                        placeholder="Votre nom">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-zinc-300 mb-2">Email</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-3 bg-zinc-800 border border-zinc-700 text-white rounded-xl focus:ring-2 focus:ring-white focus:border-white transition-colors placeholder-zinc-500"
                                        placeholder="votre@email.com">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-zinc-300 mb-2">Téléphone</label>
                                    <input type="tel" id="phone" name="phone"
                                        class="w-full px-4 py-3 bg-zinc-800 border border-zinc-700 text-white rounded-xl focus:ring-2 focus:ring-white focus:border-white transition-colors placeholder-zinc-500"
                                        placeholder="06 00 00 00 00">
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-zinc-300 mb-2">Message</label>
                                <textarea id="message" name="message" rows="5" required
                                    class="w-full px-4 py-3 bg-zinc-800 border border-zinc-700 text-white rounded-xl focus:ring-2 focus:ring-white focus:border-white transition-colors resize-none placeholder-zinc-500"
                                    placeholder="Décrivez votre demande..."></textarea>
                            </div>

                            <div class="flex items-start gap-3">
                                <input type="checkbox" id="consent" name="consent" required
                                    class="mt-1 size-4 rounded border-zinc-600 bg-zinc-800 text-white focus:ring-white">
                                <label for="consent" class="text-sm text-zinc-400">
                                    J'accepte que mes données soient utilisées pour traiter ma demande conformément à la
                                    <a href="#" class="text-white underline hover:no-underline">politique de confidentialité</a>.
                                </label>
                            </div>

                            <button type="submit"
                                class="w-full inline-flex items-center justify-center gap-2 px-6 py-4 bg-white text-zinc-900 font-semibold rounded-xl hover:bg-zinc-100 transition-colors">
                                <flux:icon.paper-airplane class="size-5" />
                                Envoyer le message
                            </button>
                        </form>
                    </div>
                </div>

                {{-- Contact Info --}}
                <div class="lg:col-span-1 order-2 space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold text-zinc-900 mb-6">Informations de contact</h2>
                        <p class="text-zinc-600 leading-relaxed">
                            Nous sommes disponibles du lundi au vendredi, de 9h à 18h pour vous accompagner.
                        </p>
                    </div>

                    {{-- Contact Cards --}}
                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 bg-zinc-50 rounded-xl">
                            <div class="size-12 rounded-xl bg-zinc-900 flex items-center justify-center shrink-0">
                                <flux:icon.envelope class="size-6 text-white" />
                            </div>
                            <div>
                                <h3 class="font-semibold text-zinc-900 mb-1">Email</h3>
                                <a href="mailto:contact@bailleurprive.io" class="text-zinc-600 hover:text-zinc-900 transition-colors">
                                    contact@bailleurprive.io
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-zinc-50 rounded-xl">
                            <div class="size-12 rounded-xl bg-zinc-900 flex items-center justify-center shrink-0">
                                <flux:icon.phone class="size-6 text-white" />
                            </div>
                            <div>
                                <h3 class="font-semibold text-zinc-900 mb-1">Téléphone</h3>
                                <a href="tel:+33374472018" class="text-zinc-600 hover:text-zinc-900 transition-colors">
                                    03 74 47 20 18
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 bg-zinc-50 rounded-xl">
                            <div class="size-12 rounded-xl bg-zinc-900 flex items-center justify-center shrink-0">
                                <flux:icon.map-pin class="size-6 text-white" />
                            </div>
                            <div>
                                <h3 class="font-semibold text-zinc-900 mb-1">Adresse</h3>
                                <p class="text-zinc-600">
                                    Paris, France
                                </p>
                            </div>
                        </div>
                    </div>

                    {{-- Social Links --}}
                    <div>
                        <h3 class="font-semibold text-zinc-900 mb-4">Suivez-nous</h3>
                        <div class="flex items-center gap-3">
                            <a href="#" class="size-10 rounded-xl bg-zinc-100 hover:bg-zinc-200 flex items-center justify-center transition-colors">
                                <svg class="size-5 text-zinc-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                                </svg>
                            </a>
                            <a href="#" class="size-10 rounded-xl bg-zinc-100 hover:bg-zinc-200 flex items-center justify-center transition-colors">
                                <svg class="size-5 text-zinc-700" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FAQ Section --}}
    <section class="py-16 bg-zinc-50">
        <div class="container mx-auto px-4 max-w-3xl">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-zinc-900 mb-4">Questions fréquentes</h2>
                <p class="text-zinc-600">Retrouvez les réponses aux questions les plus courantes.</p>
            </div>

            <flux:accordion>
                <flux:accordion.item>
                    <flux:accordion.heading>
                        Quel est le délai de réponse ?
                    </flux:accordion.heading>
                    <flux:accordion.content>
                        <flux:text class="text-zinc-600">
                            Nous nous engageons à répondre à toutes les demandes sous 24 à 48 heures ouvrées.
                        </flux:text>
                    </flux:accordion.content>
                </flux:accordion.item>

                <flux:accordion.item>
                    <flux:accordion.heading>
                        Proposez-vous des consultations téléphoniques ?
                    </flux:accordion.heading>
                    <flux:accordion.content>
                        <flux:text class="text-zinc-600">
                            Oui, nous proposons des consultations téléphoniques gratuites de 15 minutes pour répondre à vos premières questions sur le dispositif.
                        </flux:text>
                    </flux:accordion.content>
                </flux:accordion.item>

                <flux:accordion.item>
                    <flux:accordion.heading>
                        Puis-je obtenir une simulation personnalisée ?
                    </flux:accordion.heading>
                    <flux:accordion.content>
                        <flux:text class="text-zinc-600">
                            Absolument ! Utilisez notre simulateur en ligne ou contactez-nous pour une étude personnalisée de votre situation fiscale.
                        </flux:text>
                    </flux:accordion.content>
                </flux:accordion.item>
            </flux:accordion>
        </div>
    </section>

</x-layouts.app>
