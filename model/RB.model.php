<?php
require_once "../config/database.php"; 

//  Récupérer tous les ouvrages
function findAllOuvrages(): array {
    global $pdo;
    $sql = "SELECT o.id, o.titre, a.nom AS auteur, r.nom AS rayon
            FROM ouvrage o
            JOIN auteur a ON o.auteur_id = a.id
            JOIN rayon r ON o.rayon_id = r.id
            WHERE o.archive = 0";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

//  Ajouter un ouvrage
function ajouterOuvrage(string $titre, int $auteur_id, int $rayon_id): bool {
    global $pdo;
    $sql = "INSERT INTO ouvrage (titre, auteur_id, rayon_id) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$titre, $auteur_id, $rayon_id]);
}

//  Récupérer tous les auteurs
function findAllAuteurs(): array {
    global $pdo;
    $sql = "SELECT * FROM auteur";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

//  Ajouter un auteur
function ajouterAuteur(string $nom): bool {
    global $pdo;
    $sql = "INSERT INTO auteur (nom) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$nom]);
}

// Récupérer tous les rayons
function findAllRayons(): array {
    global $pdo;
    $sql = "SELECT * FROM rayon";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

//  Ajouter un rayon
function ajouterRayon(string $nom): bool {
    global $pdo;
    $sql = "INSERT INTO rayon (nom) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$nom]);
}

//  Récupérer tous les exemplaires
function findAllExemplaires(): array {
    global $pdo;
    $sql = "SELECT e.id, o.titre, e.etat, e.archive
            FROM exemplaire e
            JOIN ouvrage o ON e.ouvrage_id = o.id";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}

//  Ajouter un exemplaire
function ajouterExemplaire(int $ouvrage_id, string $etat): bool {
    global $pdo;
    $sql = "INSERT INTO exemplaire (ouvrage_id, etat, archive) VALUES (?, ?, 0)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$ouvrage_id, $etat]);
}

//  Archiver un exemplaire
function archiverExemplaire(int $id): bool {
    global $pdo;
    $sql = "UPDATE exemplaire SET archive = 1 WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$id]);
}
