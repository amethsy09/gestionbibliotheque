<?php
require_once "../model/visiteur.model.php";
$page = $_GET['page'] ?? "liste";
switch ($page) {
    case 'liste':
       $visiteurs = findAllOuvragesDispo();
       renderView("visiteur/listecatalogue.html.php", ['visiteurs' => $visiteurs]);
        break;
    case 'inscription':
        $error=[
            'nom' =>'',
            'prenom' =>'',
            'email' =>'',
            'password' =>''
          ];
          if (isPost() && $_POST['action'] === "s'inscrire") {
              $nom = $_POST['nom'];
              $prenom = $_POST['prenom'];
              $email = $_POST['email'];
              $password = $_POST['password'];
              // Validation des données
              if (empty($nom)){
                $error['nom'] = 'Le nom est requis';
              }
              if (empty($prenom)){
                $error['prenom'] = 'Le prenom est requise';
                }
                if (empty($email)){
                  $error['email'] = "L' email est requis";
                  }
                  if (empty($password)){
                    $error['password'] = "Le password est requis";
                    }
                    $result = ajouterVisiteur($nom, $prenom, $email, $hashedPassword);
                    if ($result) {
                      header('Location: index.php?page=login&success=1');
                      redirect('security','login');
                      exit;
                  } else {
                      $error = "Erreur lors de l'inscription. Essayez à nouveau.";
                  }
                }
            }
       