<?php
class signInController{

use controller;

function signInController($request){
    $sigIn = null;

    if(isset($request)){
        $sigIn = $this -> model ->signInController($request);
        if(isset($_SESSION['user'])){
            header("location: index.php");
        }
    }
}

    }



?>