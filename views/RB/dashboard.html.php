<div class="bg-gray-100 min-h-screen flex">
  <!-- Sidebar -->
  <aside class="bg-white w-64 shadow-lg p-6 space-y-6">
    <h1 class="text-2xl font-bold text-purple-700">Bibliothèque 221</h1>
    <nav class="flex flex-col space-y-4 text-gray-700">
      <a href="<?=WEBROOT?>?controllers=RB&page=dashboard" class="flex items-center gap-2 hover:text-purple-700">
        <i class="ri-dashboard-line text-xl"></i> Dashboard
      </a>
      <a href="<?=WEBROOT?>?controllers=RB&page=gestion_ouvrages" class="flex items-center gap-2 hover:text-purple-700">
        <i class="ri-book-line text-xl"></i> Gérer les ouvrages
      </a>
      <a href="<?=WEBROOT?>?controllers=RB&page=gestion_auteurs" class="flex items-center gap-2 hover:text-purple-700">
        <i class="ri-user-line text-xl"></i> Gérer les auteurs
      </a>
      <a href="<?=WEBROOT?>?controllers=RB&page=gestion_rayon" class="flex items-center gap-2 hover:text-purple-700">
        <i class="ri-layout-line text-xl"></i> Gérer les rayons
      </a>
      <a href="<?=WEBROOT?>?controllers=RB&page=exemplaires" class="flex items-center gap-2 hover:text-purple-700">
        <i class="ri-archive-line text-xl"></i> Exemplaires
      </a>
      <a href="<?=WEBROOT?>?controllers=RB&page=prets" class="flex items-center gap-2 hover:text-purple-700">
        <i class="ri-folder-line text-xl"></i> Prêts en cours
      </a>
    </nav>
  </aside>

  <!-- Main Content -->
  <main class="flex-1 p-8">
    <h2 class="text-2xl font-bold text-gray-800 mb-6">Tableau de bord – Responsable Bibliothèque</h2>

    <!-- Widgets -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
      <div class="bg-white rounded-2xl shadow p-4">
        <p class="text-sm text-gray-500">Total ouvrages</p>
        <p class="text-2xl font-bold text-purple-700">+<?= $totalOuvrages ?? 0 ?></p>
      </div>
      <div class="bg-white rounded-2xl shadow p-4">
        <p class="text-sm text-gray-500">Exemplaires disponibles</p>
        <p class="text-2xl font-bold text-purple-700"><?= $exemplairesDispo ?? 0 ?></p>
      </div>
      <div class="bg-white rounded-2xl shadow p-4">
        <p class="text-sm text-gray-500">Adhérents</p>
        <p class="text-2xl font-bold text-purple-700"><?= $totalAdherents ?? 0 ?></p>
      </div>
      <div class="bg-white rounded-2xl shadow p-4">
        <p class="text-sm text-gray-500">Prêts en cours</p>
        <p class="text-2xl font-bold text-purple-700"><?= $pretsEnCours ?? 0 ?></p>
      </div>
    </div>

    <!-- Section Activité récente -->
    <div class="bg-white p-6 rounded-2xl shadow">
      <h3 class="text-lg font-bold mb-4 text-gray-800">Activité récente</h3>
      <ul class="space-y-3 text-sm text-gray-700">
        <li><i class="ri-check-line text-green-600 mr-2"></i> Prêt validé pour <strong>“<?= $dernierPret['titre'] ?? 'Livre exemple' ?>”</strong> à <?= $dernierPret['nomAdherent'] ?? 'Nom Adhérent' ?>.</li>
        <li><i class="ri-archive-line text-blue-600 mr-2"></i> Un exemplaire archivé.</li>
        <li><i class="ri-user-add-line text-purple-600 mr-2"></i> Nouvel adhérent inscrit.</li>
      </ul>
    </div>
  </main>
</div>

<!-- Remix Icons CDN -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
