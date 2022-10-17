<?php

class Router
{
    function __construct()
    {
        session_start();
        if (isset($_GET['controller'])) {
            $controllerName = $_GET['controller'] . "Controller";
            $controllerPath = CONTROLLERS . $controllerName . ".php";
            if (($controllerName === 'LoginController') && (!isset($_SESSION['user']))) {
                if (file_exists($controllerPath)) {
                    require_once($controllerPath);
                    new $controllerName();
                } else {
                    $errorMsg = "The session is not started";
                    require_once VIEWS . "error/error.php";
                }
            } else if (isset($_SESSION['user'])) {
                if (file_exists($controllerPath)) {
                    require_once($controllerPath);
                    new $controllerName();
                } else {
                    $errorMsg = "The page you are trying to access does not exist.";
                    require_once VIEWS . "error/error.php";
                }
            }
        } else {
            require_once VIEWS . "main/login.php";
        }
    }
}
