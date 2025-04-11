<?php
NotReturn();
require_once "../model/RB.model.php";
$page = $_GET['page'] ?? "dashboard";

  switch ($page) {
    case "dashboard":
        renderView("RP/dashboard.html.php", ['Dashboard' => $_SESSION['user']]);
        break;
    case "liste_ouvrage":
      $ouvrages=findAllOuvrages();
      renderView("RP/liste_ouvrage.html.php", ['ouvrages' => $ouvrages]);
      break;
      case "liste_auteur":
        $auteurs=findAllAuteurs();
        renderView("RP/liste_auteur.html.php", ['auteurs' => $auteurs]);
        break;
        case "liste_rayons":
            $rayons=findAllRayons();
            renderView("RP/liste_rayon.html.php", ['rayons' => $rayons]);
            break;
            case "liste_exemplaire":
                $exemplaires=findAllExemplaires();
                renderView("RP/liste_rayon.html.php", ['exemplaires' => $exemplaires]);
                break;
    case "ajout_ouvrage":
      $error=[
        'titre' =>'',
        'auteur_id' =>'',
        'rayon_id' =>'',
      ];
      if (isPost() && $_POST['action'] === "enregistrer") {
          $titre = $_POST['titre'];
          $auteur_id = $_POST['auteur_id'];
          $rayon_id = $_POST['rayon_id'];
          // Validation des données
          if (empty($titre)){
            $error['titre'] = 'Le titre est requis';
          }
          if (empty($auteur_id)){
            $error['auteur_id'] = 'L est requise';
            }
            if (empty($niveau)){
              $error['niveau'] = 'Le niveau est requis';
              }
          }
          renderView('RP/ajout_classes.html.php', ['error' => $error]);
       
        
    }
   
