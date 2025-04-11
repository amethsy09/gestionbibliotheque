<?php
function connectDB(){
$host = 'localhost';
$dbname = 'gestiondesbibliotheques';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
    return $pdo;
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
}
function executeselect($sql,$isALL= false) {
    $pdo=connectDB();
    $stmt = $pdo->prepare($sql);
     $stmt->execute();
     if($isALL){
       return $stmt->fetchAll();
     }
     return $stmt->fetch();
}

function path(string $controller, string $page): string {
    if (defined('WEBROOT')) {
        return WEBROOT . "?controllers=" . $controller . "&page=" . $page;
    } else {
        return "?controllers=" . $controller . "&page=" . $page;
    }
}

function login($email, $password) {
    $pdo = connectDB();
    $user = findUserByEmail($pdo, $email);
    if ($user && $password == $user["password"]) {
        $_SESSION["user"] = $user;
        // dd($user);
        switch ($user["role"]) {
            case "responsable":
                redirect('RB', 'dashboard');
                break;
            case "Adherent":
                redirect('Adherent', 'dashboard');
                break;
            default:
                redirect('visiteur', 'liste');
        }
    } else {
        $_SESSION["error"] = "Email ou mot de passe incorrect.";
        redirect('visiteur', 'liste');
    }
}

