<?php
function renderView(string $view,array $datas=[], string $layout="base"){
    ob_start();
    extract($datas);
    require_once "../views/$view";
    $content = ob_get_clean();
    require_once "../layout/$layout.layout.html.php";
}
function redirect($controller, $page) {
    if (defined('WEBROOT')) {
        header('Location: ' . WEBROOT . '?controller=' .($controller) . '&page='.($page));
        exit;
    } else {
        echo "Erreur : La constante WEBROOT n'est pas définie.";
    }
}

function dd($var) {
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
    die(); 
}

function isPost():bool{
    return $_SERVER["REQUEST_METHOD"] == "POST";
}
function isGet():bool{
    return $_SERVER["REQUEST_METHOD"] == "GET";
}
function NotReturn(){
    if (!isset($_SESSION["user"])){
        redirect('security', 'login');
        exit;
    }
}
function IsConnect(){
    
}
