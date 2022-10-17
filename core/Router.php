<?php

class Router
{
    function __construct()
    {
        session_start();
        echo "Estoy en el router <br>";
        if (isset($_GET['controller'])) {
            $controllerName = $_GET['controller'] . "Controller";
            $controllerPath = CONTROLLERS . $controllerName . ".php";
            echo "Estoy en el router, he pasado el controller <br>";
            echo "$controllerName, <br> $controllerPath";
            if (($controllerName === 'LoginController') && (!isset($_SESSION['user']))) {
                echo "Estoy en el router sin usuario <br>";
                if (file_exists($controllerPath)) {
                    require_once($controllerPath);
                    new $controllerName();
                    echo "$controllerPath <br>";
                } else {
                    $errorMsg = "The session is not started";
                    require_once VIEWS . "error/error.php";
                }
            } else if (isset($_SESSION['user'])) {
                if (file_exists($controllerPath)) {
                    echo "Estoy en el router con usuario <br>";
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
