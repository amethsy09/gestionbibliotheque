<?php
require_once "../model/visiteur.model.php";
$page = $_GET['page'] ?? "liste";
switch ($page) {
    case 'liste':
       $visiteurs = findAllOuvragesDispo();
       renderView("visiteur/listecatalogue.html.php", ['visiteurs' => $visiteurs]);
        break;
    
    default:
        # code...
        break;
}