<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modifier un Rayon</title>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">
  <!-- Modal -->
  <div id="modal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <div class="bg-white w-full max-w-4xl mx-4 md:mx-auto rounded-2xl shadow-xl p-8 md:p-10 relative overflow-y-auto max-h-[90vh]">

      <!-- Bouton de fermeture -->
      <button onclick="document.getElementById('modal').classList.add('hidden')" 
              class="absolute top-4 right-4 text-gray-500 hover:text-red-500 text-2xl">
        <i class="ri-close-line"></i>
      </button>

      <!-- Contenu du formulaire -->
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-2">
        <i class="ri-book-2-line text-blue-600 text-3xl"></i> Modifier un Rayon
      </h2>

      <form class="space-y-8">
        <!-- Champs principaux -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div>
            <label class="block text-gray-700 font-medium mb-1">Nombres d'Ouvrages</label>
            <input type="text" placeholder="EX: OUV001" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-1">nom</label>
            <input type="text" placeholder="Titre de l'ouvrage" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>
          <div>
            <label class="block text-gray-700 font-medium mb-1">capacite</label>
            <input type="text" placeholder="EX: Informatique" class="w-full border border-gray-300 rounded-xl px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
          </div>
        </div>

        <!-- Bouton de validation -->
        <div class="text-center pt-4">
          <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-xl shadow-md transition duration-300">
            <i class="ri-save-2-line mr-2"></i> Enregistrer
          </button>
        </div>
      </form>

    </div>
  </div>
  <script>
    window.addEventListener('DOMContentLoaded', () => {
      if (window.location.hash === "#Modal") {
        document.getElementById("modal")?.classList.remove("hidden");
      }
    });
  </script>
</body>
</html>
