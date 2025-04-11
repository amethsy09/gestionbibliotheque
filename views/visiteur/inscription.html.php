<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inscription Visiteur</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/daisyui@2.5.0/dist/full.js"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">
  <!-- Modal -->
  <div id="modal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white w-full max-w-4xl mx-4 md:mx-auto rounded-2xl shadow-xl p-8 md:p-10 relative overflow-y-auto max-h-[90vh]">
    
      <!-- Contenu du formulaire -->
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="ri-user-add-line text-green-600 text-3xl"></i> Inscription Visiteur
      </h2>

      <form method="POST" action="" class="space-y-8">
      <input type="hidden" name="controller" value="visiteur">
      <input type="hidden" name="page" value="inscription">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <div>
            <label class="block text-gray-700 font-medium mb-1">Nom</label>
            <input type="text" name="nom" required placeholder="Entrez votre nom" 
                   class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-1">Prénom</label>
            <input type="text" name="prenom" required placeholder="Entrez votre prénom" 
                   class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" name="email" required placeholder="exemple@email.com" 
                   class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-1">Mot de passe</label>
            <input type="password" name="password" required placeholder="Mot de passe" 
                   class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>
         
        </div>

        <!-- Bouton de validation -->
        <div class="text-center pt-4">
          <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-semibold px-8 py-3 rounded-xl shadow-md transition duration-300">
            <i class="ri-user-add-line mr-2"></i> S'inscrire
          </button>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
