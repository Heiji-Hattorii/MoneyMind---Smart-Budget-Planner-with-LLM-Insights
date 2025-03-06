<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Dépenses</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>


    <div class="max-w-8xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow p-6 mb-8">
            <h2 class="text-2xl font-semibold text-gray-900 mb-6">Ajouter une Dépense</h2>
            <form action="{{ route('add-expense') }}" method="POST" class="space-y-6">
                @csrf
                <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Nom de la dépense</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text" name="name" id="name" required
                                class="block w-full border-gray-300 focus:ring-custom focus:border-custom sm:text-sm"
                                placeholder="Ex: Courses alimentaires">
                        </div>
                    </div>

                    <div>
                        <label for="amount" class="block text-sm font-medium text-gray-700">Montant</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="number" name="amount" id="amount" required
                                class="block w-full border-gray-300 focus:ring-custom focus:border-custom sm:text-sm"
                                placeholder="0.00">
                        </div>
                    </div>

                    <div>
                        <label for="category_id" class="block text-sm font-medium text-gray-700">Catégorie</label>
                        <select id="category_id" name="category_id"
                            class="mt-1 block w-full border-gray-300 focus:ring-custom focus:border-custom sm:text-sm">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->nom }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                        <select id="type" name="type"
                            class="mt-1 block w-full border-gray-300 focus:ring-custom focus:border-custom sm:text-sm">
                            <option value="one-time">Ponctuelle</option>
                            <option value="recurring">Récurrente</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium text-white bg-black hover:bg-custom/90 focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                        <i class="fas fa-plus mr-2"></i>
                        Ajouter la dépense
                    </button>
                </div>
            </form>
        </div>

        <div class="bg-white rounded-lg shadow">
            <div class="px-6 py-5 border-b border-gray-200">
                <h3 class="text-lg font-medium leading-6 text-gray-900">Vos Dépenses</h3>
            </div>
            <div class="divide-y divide-gray-200">
                @foreach($expenses as $expense)
                    <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50">
                        <div class="flex items-center">
                        <i class="fas {{ $expense->category->icone }}"></i>

                            <div class="ml-4">
                                <p class="text-sm font-medium text-gray-900">{{ $expense->name }}</p>
                                <p class="text-sm text-gray-500">{{ $expense->category->nom }}</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mr-4">
                                {{ $expense->type == 'recurring' ? 'Récurrente' : 'Ponctuelle' }}
                            </span>
                            <span class="text-sm font-medium text-gray-900">{{ $expense->amount }} DH</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>












    