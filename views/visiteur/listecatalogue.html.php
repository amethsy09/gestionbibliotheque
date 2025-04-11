<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gestion Bibliothèque - Catalogue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-64 bg-white border-r border-gray-200 p-6 relative shadow-md">
            <div class="flex items-center space-x-2 text-xl font-bold text-gray-800">
                <span class="text-indigo-600 text-2xl">📚</span>
                <span>Gestion Bibliothèque</span>
            </div>

            <nav class="mt-10 space-y-4 text-sm font-medium">
                <a href="#" class="flex items-center space-x-2 text-indigo-600">
                    <span>📋</span><span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-indigo-600 transition">
                    <span>📘</span><span>Faire une demande</span>
                </a>
                <a href="#" class="flex items-center space-x-2 text-gray-600 hover:text-indigo-600 transition">
                    <span>📨</span><span>S'inscrire</span>
                </a>
            </nav>

            <div class="absolute bottom-6 left-6 text-gray-700 text-sm">
                <a href="#" class="hover:text-red-500 transition">> Logout</a>
            </div>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-8 relative">

            <!-- Topbar -->
            <div class="flex justify-between items-center mb-8">
                <input type="text" placeholder="Rechercher un catalogue"
                    class="w-1/2 px-4 py-2 rounded-full border border-gray-300 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 text-sm" />
                <div class="flex items-center space-x-4">
                    <span class="text-gray-500 text-xl">🔔</span>
                    <img src="https://via.placeholder.com/40" alt="User" class="rounded-full w-10 h-10 border" />
                </div>
            </div>

            <!-- Catalogue List -->
            <h2 class="text-2xl font-semibold mb-6">Liste des catalogues</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <!-- Card template -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg p-5 text-center transition-all duration-300">
                    <img src="./image 12.png" alt="Lavenir" class="mx-auto mb-4 rounded-lg w-full h-40 object-cover" />
                    <h3 class="font-semibold text-lg">L'avenir</h3>
                    <a href="#" class="text-blue-500 text-sm">Détails</a>
                    <p class="text-gray-500 text-sm mt-2">
                        Une collection d'ouvrages visionnaires explorant les futurs possibles.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow hover:shadow-lg p-5 text-center transition-all duration-300">
                    <img src="./image 13.png" alt="Le passé" class="mx-auto mb-4 rounded-lg w-full h-40 object-cover" />
                    <h3 class="font-semibold text-lg">Le passé</h3>
                    <a href="#" class="text-blue-500 text-sm">Détails</a>
                    <p class="text-gray-500 text-sm mt-2">
                        Des livres anciens retraçant l’histoire, les traditions et les civilisations passées.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow hover:shadow-lg p-5 text-center transition-all duration-300">
                    <img src="./image 14.png" alt="Le présent" class="mx-auto mb-4 rounded-lg w-full h-40 object-cover" />
                    <h3 class="font-semibold text-lg">Le présent</h3>
                    <a href="#" class="text-blue-500 text-sm">Détails</a>
                    <p class="text-gray-500 text-sm mt-2">
                        Des ouvrages contemporains qui analysent notre société actuelle et ses enjeux.
                    </p>
                </div>

                <!-- Copies supplémentaires -->
                <div class="bg-white rounded-xl shadow hover:shadow-lg p-5 text-center transition-all duration-300">
                    <img src="./image 12.png" alt="Lavenir" class="mx-auto mb-4 rounded-lg w-full h-40 object-cover" />
                    <h3 class="font-semibold text-lg">L'avenir</h3>
                    <a href="#" class="text-blue-500 text-sm">Détails</a>
                    <p class="text-gray-500 text-sm mt-2">
                        Une collection d'ouvrages visionnaires explorant les futurs possibles.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow hover:shadow-lg p-5 text-center transition-all duration-300">
                    <img src="./image 13.png" alt="Le passé" class="mx-auto mb-4 rounded-lg w-full h-40 object-cover" />
                    <h3 class="font-semibold text-lg">Le passé</h3>
                    <a href="#" class="text-blue-500 text-sm">Détails</a>
                    <p class="text-gray-500 text-sm mt-2">
                        Des livres anciens retraçant l'histoire, les traditions et les civilisations passées.
                    </p>
                </div>

                <div class="bg-white rounded-xl shadow hover:shadow-lg p-5 text-center transition-all duration-300">
                    <img src="./image 14.png" alt="Le présent" class="mx-auto mb-4 rounded-lg w-full h-40 object-cover" />
                    <h3 class="font-semibold text-lg">Le présent</h3>
                    <a href="#" class="text-blue-500 text-sm">Détails</a>
                    <p class="text-gray-500 text-sm mt-2">
                        Des ouvrages contemporains qui analysent notre société actuelle et ses enjeux.
                    </p>
                </div>
            </div>

            <!-- Floating Button -->
            <a href="fairedemande.html#Modal" class="fixed bottom-6 right-6">
                <button
                    class="bg-indigo-600 hover:bg-indigo-700 text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center text-2xl font-semibold transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    +
                </button>
            </a>
        </main>

    </div>

</body>

</html>
