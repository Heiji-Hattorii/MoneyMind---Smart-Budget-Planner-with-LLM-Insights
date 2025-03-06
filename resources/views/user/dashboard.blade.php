<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord | Finance Personnelle</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="bg-white rounded-lg shadow-sm p-8 mb-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Bienvenue, {{ auth()->user()->name }}</h1>
                    <p class="mt-2 text-gray-600">Votre espace personnel de gestion financière</p>
                </div>
                <div class="h-16 w-16 bg-custom rounded-full flex items-center justify-center">
                    <i class="fas fa-user text-2xl text-white"></i>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 bg-custom rounded-lg">
                            <i class="fas fa-wallet text-white"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Salaire Mensuel</p>
                            <p class="text-2xl font-bold text-gray-900">{{ auth()->user()->salaire }} DH</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 rounded-lg p-6">
                    <div class="flex items-center">
                        <div class="p-3 bg-custom rounded-lg">
                            <i class="fas fa-calendar text-white"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Dernier crédit</p>
                            <p class="text-2xl font-bold text-gray-900">{{ auth()->user()->date_credit }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6"> <a href="{{ route('expenses') }}" class="group">
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-6 transition duration-150 ease-in-out hover:border-custom hover:shadow-md">
                        <div class="flex items-center">
                            <div class="p-3 bg-custom/10 rounded-lg group-hover:bg-custom"> <i
                                    class="fas fa-chart-line text-custom group-hover:text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900">Dépenses</h3>
                                <p class="text-sm text-gray-500">Suivre vos dépenses</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ route('wishlist') }}" class="group">
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-6 transition duration-150 ease-in-out hover:border-custom hover:shadow-md">
                        <div class="flex items-center">
                            <div class="p-3 bg-custom/10 rounded-lg group-hover:bg-custom"> <i
                                    class="fas fa-heart text-custom group-hover:text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900">Liste de souhaits</h3>
                                <p class="text-sm text-gray-500">Gérer vos envies</p>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="{{ route('goals') }}" class="group">
                    <div
                        class="bg-white border border-gray-200 rounded-lg p-6 transition duration-150 ease-in-out hover:border-custom hover:shadow-md">
                        <div class="flex items-center">
                            <div class="p-3 bg-custom/10 rounded-lg group-hover:bg-custom"> <i
                                    class="fas fa-bullseye text-custom group-hover:text-white"></i>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-semibold text-gray-900">Objectifs</h3>
                                <p class="text-sm text-gray-500">Suivre vos objectifs</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>