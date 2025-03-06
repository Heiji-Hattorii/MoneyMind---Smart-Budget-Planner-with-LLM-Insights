
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Wishlist</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://ai-public.creatie.ai/gen_page/tailwind-custom.css" rel="stylesheet">
    <script
        src="https://cdn.tailwindcss.com/3.4.5?plugins=forms@0.5.7,typography@0.5.13,aspect-ratio@0.4.2,container-queries@0.1.1"></script>
    <script src="https://ai-public.creatie.ai/gen_page/tailwind-config.min.js" data-color="#000000"
        data-border-radius="small"></script>
</head>

<body class="min-h-screen bg-gray-50 flex items-center justify-center p-4 font-[Poppins]">
    <div class="w-full max-w-md">
        <div class="bg-white rounded-lg shadow-lg p-8 transform transition-all duration-300 hover:shadow-xl">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Ma Liste de Souhaits</h2>
                <p class="text-gray-600">Ajoutez vos produits préférés à votre liste</p>
            </div>

            <form action="{{ route('wishlist.add') }}" method="POST" class="space-y-6"> @csrf
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"> <i
                            class="fas fa-gift text-gray-400"></i>
                    </div>
                    <input type="text" name="souhait_name" placeholder="Nom du produit" required
                        class="w-full pl-10 pr-4 py-3 border border-gray-300 !rounded-button focus:ring-2 focus:ring-custom focus:border-custom block text-gray-700 placeholder-gray-400 bg-white transition duration-150 ease-in-out">
                </div>

                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none"> <i
                            class="fas fa-euro-sign text-gray-400"></i>
                    </div>
                    <input type="number" name="price" placeholder="Prix" required
                        class="w-full pl-10 pr-4 py-3 border border-gray-300 !rounded-button focus:ring-2 focus:ring-custom focus:border-custom block text-gray-700 placeholder-gray-400 bg-white transition duration-150 ease-in-out [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none">
                </div>

                <button type="submit"
                    class="w-full bg-custom text-white !rounded-button py-3 px-4 flex items-center justify-center space-x-2 hover:bg-custom/90 transition duration-150 ease-in-out focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-custom">
                    <i class="fas fa-plus"></i>
                    <span>Ajouter à ma liste</span>
                </button>
            </form>
        </div>
    </div>
</body>

</html>