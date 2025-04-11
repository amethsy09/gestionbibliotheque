<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste des ouvrages</title>
    <link href="
    https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css
    " rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex min-h-screen bg-gray-50 font-sans">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md flex flex-col justify-between">
            <div class="p-4 font-bold text-2xl text-indigo-600">Gestion Bibliothèque</div>
            <nav class="mt-6 space-y-1">
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-100">
                    <span class="mr-2">🏠</span> Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-2 bg-indigo-100 text-indigo-700 rounded-l-full">
                    <span class="mr-2">📚</span> Ouvrages
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-100">
                    <span class="mr-2">📖</span> Exemplaires
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-100">
                    <span class="mr-2">🏷️</span> Rayon
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-indigo-100">
                    <span class="mr-2">✍️</span> Auteur
                </a>
            </nav>
            <div class="mt-auto p-4 text-sm text-gray-500 ">
                <a href="#" class="hover:text-red-600"> › Logout</a>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Top bar -->
            <div class="flex justify-between items-center mb-6">
                <input type="text" placeholder="Search Users by Name, Email or Date"
                    class="w-1/3 px-4 py-2 border rounded-lg shadow-sm" />
                <div class="flex items-center space-x-4">
                    <button class="relative">
                        🔔
                        <span class="absolute -top-1 -right-1 h-2 w-2 bg-red-500 rounded-full"></span>
                    </button>
                    <img src="https://via.placeholder.com/32" alt="profile" class="rounded-full w-8 h-8" />
                </div>
            </div>

            <!-- Table Title -->
            <div class="flex items-center mb-4 ">
                <h2 class="text-xl font-semibold">Liste des ouvrages</h2>
                <div class="relative px-2">
                    <select class="border px-4 py-2 rounded shadow-sm">
                        <option>État</option>
                        <!-- autres options ici -->
                    </select>
                </div>
            </div>

            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border rounded-lg overflow-hidden">
                    <thead class="bg-indigo-100 text-indigo-700">
                        <tr>
                            <th class="px-4 py-2">Code</th>
                            <th class="px-4 py-2">Titre</th>
                            <th class="px-4 py-2">Date d'édition</th>
                            <th class="px-4 py-2">Rayon</th>
                            <th class="px-4 py-2">Auteurs</th>
                            <th class="px-4 py-2">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white">
                        <tr class="border-b">
                            <td class="px-4 py-2">1</td>
                            <td class="px-4 py-2">Le passe tome1</td>
                            <td class="px-4 py-2">10/09/01</td>
                            <td class="px-4 py-2">1e étage</td>
                            <td class="px-4 py-2">thiam</td>
                            <td class="px-4 py-2 relative">
                                <!-- Action dropdown -->
                                <div class="relative inline-block text-left">
                                    <button class="px-2 py-1 bg-gray-100 rounded hover:bg-gray-200">⋮</button>
                                    <div class="absolute right-0 mt-2 w-40 bg-white border rounded shadow-lg z-10">
                                        <a href="modifierouvrage.html#Modal" class="block px-4 py-2 hover:bg-gray-100">Modifier</a>
                                        <a href="#" class="block px-4 py-2 text-red-600 hover:bg-gray-100">Archiver</a>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100">Ajout exemplaire</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- D'autres lignes ici -->
                        <tr class="border-b">
                            <td class="px-4 py-2">2</td>
                            <td class="px-4 py-2">Le present tome1</td>
                            <td class="px-4 py-2">10/09/01</td>
                            <td class="px-4 py-2">2e étage</td>
                            <td class="px-4 py-2">thiam</td>
                            <td class="px-4 py-2 relative">
                                <!-- Action dropdown -->
                                <!-- <div class="relative inline-block text-left">
                        <button class="px-2 py-1 bg-gray-100 rounded hover:bg-gray-200">⋮</button>
                        <div class="absolute right-0 mt-2 w-40 bg-white border rounded shadow-lg z-10">
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Modifier</a>
                          <a href="#" class="block px-4 py-2 text-red-600 hover:bg-gray-100">Archiver</a>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Ajout exemplaire</a>
                        </div>
                      </div> -->
                            </td>
                        </tr>
                        <tr class="border-b">
                            <td class="px-4 py-2">3</td>
                            <td class="px-4 py-2">L'avenir tome2</td>
                            <td class="px-4 py-2">10/04/01</td>
                            <td class="px-4 py-2">3e étage</td>
                            <td class="px-4 py-2">thiam</td>
                            <td class="px-4 py-2 relative">
                                <!-- Action dropdown
                      <div class="relative inline-block text-left">
                        <button class="px-2 py-1 bg-gray-100 rounded hover:bg-gray-200">⋮</button>
                        <div class="absolute right-0 mt-2 w-40 bg-white border rounded shadow-lg z-10">
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Modifier</a>
                          <a href="#" class="block px-4 py-2 text-red-600 hover:bg-gray-100">Archiver</a>
                          <a href="#" class="block px-4 py-2 hover:bg-gray-100">Ajout exemplaire</a>
                        </div>
                      </div> -->
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Bouton flottant -->
            <a href="ajoutouvrages.html#openModal" class="fixed bottom-6 right-6">
                <button
                    class="bg-indigo-600 hover:bg-indigo-700 text-white w-14 h-14 rounded-full shadow-lg flex items-center justify-center text-2xl font-semibold transition-all duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
                    +
                </button>
            </a>
        </main>
    </div>

</body>

</html>