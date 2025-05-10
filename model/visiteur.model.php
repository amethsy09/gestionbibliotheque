<?php
require_once "../config/database.php"; 
// function findAllOuvrages(): array {
//     $sql = "SELECT o.id_ouvrage, o.titre, a.nom AS auteur, r.nom AS rayon
//             FROM ouvrage o
//             JOIN auteur a ON o.auteur_id = a.id
//             JOIN rayon r ON o.rayon_id = r.id
//             WHERE o.archive = 0";
//     return executeselect($sql, true);
// }
function findAllOuvragesDispo(){
    $sql = "SELECT * 
    from ouvrage";
    return executeselect($sql,true);
    
}
function ajouterVisiteur($nom, $prenom, $email, $password) {
    require('config/database.php'); // Connexion PDO

    try {
        $sql = "INSERT INTO visiteurs (nom, prenom, email, mot_de_passe) 
                VALUES (:nom, :prenom, :email, :password)";
        $stmt = $pdo->prepare($sql);
        return $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email,
            ':password' => $password
        ]);
    } catch (PDOException $e) {
        // Log ou debug
        return false;
    }
}
