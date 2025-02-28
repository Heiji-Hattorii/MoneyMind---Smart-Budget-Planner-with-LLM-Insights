<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des catégories | MoneyMind</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1">
    </script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="bg-gray-50 min-h-screen">
    <nav class="bg-white border-b border-gray-200">
        <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-8 w-auto" src="https://ai-public.creatie.ai/gen_page/logo_placeholder.png"
                            alt="MoneyMind">
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="#"
                            class="border-custom text-custom inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium">
                            Gestion des catégories
                        </a>
                    </div>
                </div>
                <div class="flex items-center">
                    <!-- Ouvrir le modal pour ajouter une nouvelle catégorie -->
                    <button onclick="document.getElementById('modal').classList.remove('hidden');" type="button"
                        class="bg-custom text-white !rounded-button px-4 py-2 text-sm font-medium flex items-center">
                        <i class="fas fa-plus mr-2"></i>
                        Nouvelle catégorie
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="bg-white rounded-lg shadow">
            <div class="p-6">
                <div class="flex justify-between items-center mb-6">
                    <h1 class="text-2xl font-semibold text-gray-900">Catégories</h1>
                    <div class="relative">
                        <input type="text" placeholder="Rechercher une catégorie..."
                            class="w-96 pl-10 pr-4 py-2 border border-gray-300 !rounded-button focus:ring-custom focus:border-custom">
                        <i class="fas fa-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nom</th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Icône</th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Type</th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date de création</th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($categories as $categorie)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm font-medium text-gray-900">{{ $categorie->nom }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <i class="{{ $categorie->icone }} text-custom"></i>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full ">
                                            {{ $categorie->description }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{ $categorie->created_at->format('d/m/Y') }}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="{{ route('categories.edit', $categorie->id) }}"
                                            class="text-custom hover:text-custom/80 mr-3">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-800">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <span class="text-sm text-gray-700">Afficher</span>
                        <select
                            class="mx-2 !rounded-button border-gray-300 text-gray-700 text-sm focus:ring-custom focus:border-custom">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                        </select>
                        <span class="text-sm text-gray-700">éléments</span>
                    </div>
                    <nav class="flex items-center space-x-2">
                        <button
                            class="!rounded-button px-3 py-2 border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Précédent
                        </button>
                        <button
                            class="!rounded-button px-3 py-2 border border-custom bg-custom text-white text-sm font-medium">
                            1
                        </button>
                        <button
                            class="!rounded-button px-3 py-2 border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            2
                        </button>
                        <button
                            class="!rounded-button px-3 py-2 border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            3
                        </button>
                        <button
                            class="!rounded-button px-3 py-2 border border-gray-300 text-sm font-medium text-gray-700 hover:bg-gray-50">
                            Suivant
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal pour ajouter une catégorie -->
    <div id="modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75 flex items-center justify-center">
        <div class="bg-white rounded-lg max-w-md w-full mx-4">
            <div class="px-6 py-4 border-b border-gray-200">
                <h3 class="text-lg font-medium text-gray-900">Nouvelle catégorie</h3>
            </div>
            <form action="{{ route('categories.store') }}" method="POST" class="p-6">
                @csrf
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nom</label>
                        <input type="text" name="nom" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-custom focus:border-custom">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Icône</label>
                        <div class="grid grid-cols-4 gap-4 mt-2">
                            <button type="button" class="icon-button" onclick="selectIcon('fa-home')">
                                <i class="fas fa-home"></i>
                            </button>
                            <button type="button" class="icon-button" onclick="selectIcon('fa-cogs')">
                                <i class="fas fa-cogs"></i>
                            </button>
                            <button type="button" class="icon-button" onclick="selectIcon('fa-rocket')">
                                <i class="fas fa-rocket"></i>
                            </button>
                            <button type="button" class="icon-button" onclick="selectIcon('fa-heart')">
                                <i class="fas fa-heart"></i>
                            </button>
                            <!-- Ajoute d'autres icônes ici -->
                        </div>
                        <input type="hidden" name="icone" id="icone" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-custom focus:border-custom">

                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Icône sélectionnée</label>
                        <div id="selected-icon" class="text-xl"></div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-custom focus:border-custom">
                        </textarea>
                    </div>
                    <div class="flex justify-end mt-4">
                        <button type="button" onclick="document.getElementById('modal').classList.add('hidden');"
                            class="px-4 py-2 mr-2 bg-gray-200 text-sm font-medium text-gray-700 rounded-md">
                            Annuler
                        </button>
                        <button type="submit" class="px-4 py-2 bg-custom text-sm font-medium text-white rounded-md">
                            Ajouter
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        function selectIcon(iconClass) {
            // Mettre à jour l'input caché avec la classe de l'icône sélectionnée
            document.getElementById('icone').value = iconClass;
    
            // Optionnel : changer l'icône affichée dans le bouton
            document.getElementById('selected-icon').className = "fas " + iconClass;
        }
    </script>
    
</body>

</html>
