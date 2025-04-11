<?php
require_once "../config/helpers.php";

// require_once "../controller/RB.controller.php";
// require_once "../controller/security.controller.php";
$controllers= [
    "RB" =>"../controller/RB.controller.php",
    "visiteur"=>"../controller/visiteur.controller.php",
     "security" =>"../controller/security.controller.php"
];

if (isset($_GET['controller'])) {
   
    $controller = $_GET['controller'];
    if (array_key_exists($controller, $controllers)) {
        require_once $controllers[$controller];
    } else {
        require_once $controllers["RB"];
    }
} else {
    require_once $controllers["visiteur"];
}
