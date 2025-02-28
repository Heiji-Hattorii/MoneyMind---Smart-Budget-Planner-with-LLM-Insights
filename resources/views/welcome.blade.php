<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>


    <!-- Styles / Scripts -->

<body class="font-['Poppins'] bg-gray-50">
    <header class="fixed w-full bg-white shadow-sm z-50">
        <nav class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <img src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png" alt="MoneyMind"
                        class="h-8 w-auto">
                </div>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{route('login')}}" class="text-gray-600 hover:text-custom">Login</a>
                    <a href="{{route('register')}}" class="text-gray-600 hover:text-custom">Sign Up</a>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-16 bg-[#DDE0E4]">
        <section class="relative bg-gradient-to-r from-custom/5 to-custom/10 ">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 class="text-5xl font-bold text-gray-900 mb-6">Gérez vos finances intelligemment avec
                            MoneyMind</h1>
                        <p class="text-xl text-gray-600 mb-8">Prenez le contrôle de votre argent avec notre plateforme
                            alimentée par l'IA. Suivez, épargnez et atteignez vos objectifs financiers.</p> <button
                            class="!rounded-button bg-custom text-white px-8 pt-4 text-lg hover:bg-custom/90">Essayer
                            MoneyMind Gratuitement</button>
                    </div>
                    <div>
                        <img src="{{asset('images/photohome.webp')}}"
                            alt="Dashboard MoneyMind" class="w-full">
                    </div>
                </div>
            </div>
        </section>

        <section id="fonctionnalites" class="py-20 bg-white">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Fonctionnalités Principales</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="p-6 bg-white rounded-lg border border-gray-100 hover:border-custom transition-colors">
                        <div class="w-12 h-12 bg-custom/10 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-custom text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Suivi des finances</h3>
                        <p class="text-gray-600">Visualisez vos dépenses et revenus en temps réel avec des graphiques
                            intuitifs et des catégories personnalisables.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg border border-gray-100 hover:border-custom transition-colors">
                        <div class="w-12 h-12 bg-custom/10 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-piggy-bank text-custom text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Objectifs d'épargne</h3>
                        <p class="text-gray-600">Définissez et suivez vos objectifs d'épargne avec des outils de
                            planification intelligents et des rappels automatiques.</p>
                    </div>
                    <div class="p-6 bg-white rounded-lg border border-gray-100 hover:border-custom transition-colors">
                        <div class="w-12 h-12 bg-custom/10 rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-robot text-custom text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Conseils IA personnalisés</h3>
                        <p class="text-gray-600">Recevez des recommandations personnalisées basées sur vos habitudes de
                            dépenses et vos objectifs financiers.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 bg-custom/5">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                    <div>
                        <p class="text-4xl font-bold text-custom mb-2">1M+</p>
                        <p class="text-gray-600">Utilisateurs actifs</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold text-custom mb-2">€500M</p>
                        <p class="text-gray-600">Économisés par nos utilisateurs</p>
                    </div>
                    <div>
                        <p class="text-4xl font-bold text-custom mb-2">98%</p>
                        <p class="text-gray-600">Taux de satisfaction</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="temoignages" class="py-20 bg-white">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Ce que disent nos utilisateurs</h2>
                <div class="grid grid-cols-3">
                    <div class="" >
                      

                                <div class="bg-white p-6 rounded-lg border border-gray-100">
                                    <div class="flex items-center mb-4">
                                        <img src="https://creatie.ai/ai/api/search-image?query=Professional headshot of a young French woman with a warm smile, business attire, neutral background&width=60&height=60&orientation=squarish&flag=9c48f3f0-14d9-42f1-817e-24bc914e2dfe"
                                            alt="Sophie Martin" class="w-12 h-12 rounded-full object-cover">
                                        <div class="ml-4">
                                            <h4 class="font-semibold text-gray-900">Sophie Martin</h4>
                                            <p class="text-gray-600">Entrepreneure</p>
                                        </div>
                                    </div>
                                    <p class="text-gray-600">"MoneyMind m'a aidée à mieux gérer mes finances
                                        personnelles et professionnelles. Les insights de l'IA sont vraiment pertinents
                                        !"</p>
                                </div>
                    </div>
                    <div class="glide__bullets" data-glide-el="controls[nav]">
                        <button class="glide__bullet" data-glide-dir="=0"></button>
                        <button class="glide__bullet" data-glide-dir="=1"></button>
                        <button class="glide__bullet" data-glide-dir="=2"></button>
                    </div>
                </div>
            </div>
        </section>

        <section id="prix" class="py-20 bg-custom/5">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Plans et tarifs</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white p-8 rounded-lg border border-gray-100">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Gratuit</h3>
                        <p class="text-3xl font-bold text-custom mb-6">€0<span
                                class="text-base font-normal text-gray-600">/mois</span></p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Suivi basique
                                des
                                dépenses</li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Objectifs
                                d'épargne limités</li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Conseils IA
                                basiques</li>
                        </ul>
                        <button
                            class="!rounded-button w-full bg-custom text-white py-2 hover:bg-custom/90">Commencer</button>
                    </div>
                    <div class="bg-white p-8 rounded-lg border-2 border-custom relative">
                        <div
                            class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-custom text-white px-4 py-1 rounded-full text-sm">
                            Plus populaire</div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Premium</h3>
                        <p class="text-3xl font-bold text-custom mb-6">€9.99<span
                                class="text-base font-normal text-gray-600">/mois</span></p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Suivi illimité
                                des dépenses</li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Objectifs
                                d'épargne avancés</li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Conseils IA
                                personnalisés</li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Support
                                prioritaire</li>
                        </ul>
                        <button class="!rounded-button w-full bg-custom text-white py-2 hover:bg-custom/90">Essayer
                            gratuitement</button>
                    </div>
                    <div class="bg-white p-8 rounded-lg border border-gray-100">
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Entreprise</h3>
                        <p class="text-3xl font-bold text-custom mb-6">€29.99<span
                                class="text-base font-normal text-gray-600">/mois</span></p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Toutes les
                                fonctionnalités Premium</li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Gestion
                                multi-comptes</li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>API
                                personnalisée
                            </li>
                            <li class="flex items-center"><i class="fas fa-check text-custom mr-2"></i>Support dédié
                                24/7</li>
                        </ul>
                        <button class="!rounded-button w-full bg-custom text-white py-2 hover:bg-custom/90">Contacter
                            les ventes</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-custom">
            <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Prêt à prendre le contrôle de vos finances ?</h2>
                <p class="text-white/90 mb-8 text-lg">Essayez MoneyMind gratuitement pendant 30 jours, sans engagement.
                </p> <button class="!rounded-button bg-white text-custom px-8 py-4 text-lg hover:bg-gray-100">Commencer
                    Maintenant</button>
            </div>
        </section>
    </main>

    <footer class="bg-gray-900 text-white py-12">            
                <p class="text-gray-400 text-center">&copy; 2025 MoneyMind. Tous droits réservés.</p>
               
    </footer>
</body>

</html>
