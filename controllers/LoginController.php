<?php

require_once MODELS . 'models/LoginModel.php';
//Recive las peticiones y decidira a que metodo llamar del LoginModel.php

$action = "";

if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
}

if (function_exists($action)) {
    call_user_func($action, $_REQUEST);
} else {
    error("Invalid user action");
}

//CONTROLLER FUNCTIONS

function getAllNotes()
{
    $notes = get();
    if (isset($notes)){
        require_once VIEWS . "";
    } else {
        error("There is a database error, try again.");
    }
}

?>
//Recive las peticiones y decidira a que metodo llamar del LoginModel.php

$_POST['email'];
$_POST['pass'];
