<?php

class Router
{
    function __construct()
    {
        if (isset($_GET['controller'])) {
            $controllerName = $_GET['controller'] . "Controller";
            $controllerPath = CONTROLLERS . $controllerName . ".php";
            $fileExists = file_exists($controllerPath);
            session_start();

            if ($fileExists && isset($_SESSION['user'])) {

                require_once $controllerPath;
                $controller = new $controllerName;
            } else if ($fileExists && !isset($_SESSION['user'])) {

                $errorMsg = "You do not have any session started.";
                require_once VIEWS . "error/error.php";
            }
            
            else {
                $errorMsg = "The page you are trying to access does not exist.";
                require_once VIEWS . "error/error.php";
            }
        } else {
            require_once VIEWS . "main/main.php";
        }
    }
}