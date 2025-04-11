

  <div class="bg-white rounded-xl shadow-lg overflow-hidden mx-auto flex flex-col md:flex-row w-full h-full md:h-[90%] md:w-[80%] lg:w-[70%] xl:w-[60%] items-center justify-center">

    <!-- Image à gauche -->
    <div class="hidden md:block md:w-1/2 h-full">
      <img src="images/image.png" alt="Connexion" class="w-full h-full object-cover"/>
    </div>

    <!-- Formulaire à droite -->
    <div class="w-full md:w-1/2 p-8 flex flex-col justify-center">
      <h2 class="text-3xl font-bold text-center text-gray-700 mb-6">Se connecter</h2>

      <form id="form" method="POST" action="">
        <input type="hidden" name="controller" value="security" />
        <input type="hidden" name="page" value="login" />

        <!-- Email -->
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-600">Adresse Email</label>
          <input id="email" type="email" name="email" placeholder="Entrez votre email"
                 class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
          <p id="email-error" class="text-red-500 text-sm mt-2 hidden text-center"></p>
        </div>

        <!-- Mot de passe -->
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
          <input id="password" type="password" name="password" placeholder="Entrez votre mot de passe"
                 class="w-full px-4 py-2 mt-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
          <p id="password-error" class="text-red-500 text-sm mt-2 hidden text-center"></p>
        </div>

        <!-- Se souvenir + mdp oublié -->
        <div class="flex justify-between items-center mb-4 text-sm">
          <label class="flex items-center text-gray-600">
            <input type="checkbox" class="mr-2"> Se souvenir de moi
          </label>
          <a href="#" class="text-blue-500 hover:underline">Mot de passe oublié ?</a>
        </div>

        <!-- Bouton Connexion -->
        <button id="btn-login" type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
          Se connecter
        </button>

        <!-- Lien inscription -->
        <p class="text-center text-sm text-gray-600 mt-4">
          Pas encore de compte ?
          <a href="#" class="text-blue-500 hover:underline">S'inscrire</a>
        </p>

        <!-- Erreur globale -->
        <p id="login-error" class="text-red-500 text-sm mt-2 hidden text-center"></p>
      </form>
    </div>
  </div>

