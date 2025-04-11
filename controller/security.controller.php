<?php

require_once "../config/database.php";
function findUserByEmail($pdo, $email) {
    $stmt = $pdo->prepare('SELECT * FROM utilisateurs WHERE email = :email');
    $stmt->execute(['email' => $email]);
    return $stmt->fetch(PDO::FETCH_ASSOC); 
}

    $page = $_GET['page'] ?? 'login';
    if ($page == 'login') {
        
            if (isPost()) {
            $_SESSION['error'] = [] ;
            $email = trim($_POST['email'] ?? '');
            $password = trim($_POST['password'] ?? '');  
            //  validation des champs
            if (empty($email)) {
                $_SESSION['error']['email'] = 'Veuillez saisir votre adresse email';
            }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $_SESSION['error']['email'] = 'Veuillez saisir une adresse email valide';
            }
            if (empty($password)) {
                $_SESSION['error']['password'] = 'Veuillez saisir votre mot de passe';
            }elseif(strlen($password) < 8){
                $_SESSION['error']['password'] = 'Veuillez saisir un mot de passe de 8 caractéres';
            }

            if (empty($_SESSION['error'])) {
                login($email, $password);
            }
            }
            if (isGet()) {
                
                renderView("security/login.html.php", [], "security"); 
  
            }
    }elseif ($page == 'logout') {
        session_unset();
        session_destroy();  
        redirect('security', 'login');
        exit();
        
    }

    
