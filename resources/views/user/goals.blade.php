<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Définir un Objectif</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#4F46E5"
        data-border-radius='small'></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="max-w-xl mx-auto">
            <div class="bg-white shadow-sm rounded-lg p-8">
                <div class="text-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">Définir un Objectif</h2>
                    <p class="text-gray-600">Planifiez votre succès financier</p>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif


                <form action="{{ route('goals') }}" method="POST" class="space-y-6">
                @csrf

                    <div>
                        <label for="goal_name" class="block text-sm font-medium text-gray-700 mb-2">
                            Nom de l'Objectif
                        </label>
                        <div class="relative">
                            <i
                                class="fas fa-bullseye absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="text" id="goal_name" name="goal_name" required
                                class="block w-full pl-10 pr-3 py-2.5 !rounded-button border border-gray-300 shadow-sm focus:ring-2 focus:ring-custom focus:border-custom text-gray-900 placeholder-gray-400"
                                placeholder="Ex: Achat d'une voiture">
                        </div>
                    </div>

                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700 mb-2"> Montant Cible
                        </label>
                        <div class="relative">
                            <i
                                class="fas fa-euro-sign absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="number" id="amount" name="amount" required
                                class="block w-full pl-10 pr-3 py-2.5 !rounded-button border border-gray-300 shadow-sm focus:ring-2 focus:ring-custom focus:border-custom text-gray-900 placeholder-gray-400"
                                placeholder="Entrez le montant">
                        </div>
                    </div>

                    <div>
                        <label for="deadline" class="block text-sm font-medium text-gray-700 mb-2"> Date Limite
                        </label>
                        <div class="relative">
                            <i
                                class="fas fa-calendar absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                            <input type="date" id="deadline" name="deadline" required
                                class="block w-full pl-10 pr-3 py-2.5 !rounded-button border border-gray-300 shadow-sm focus:ring-2 focus:ring-custom focus:border-custom text-gray-900">
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center items-center px-4 py-3 bg-custom text-white font-medium !rounded-button hover:bg-custom/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom transition-colors">
                            <i class="fas fa-check mr-2"></i>
                            Définir l'Objectif
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </div>
</body>

</html>