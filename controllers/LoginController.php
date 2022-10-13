<?php

class LoginController
{

    use Controller;

    function login($request)
    {
        $log = null;

        if (isset($request)) {

            $log = $this->model->login($request);
            if (isset($_SESSION['user'])) {
                header("Location: index.php?controller=user&action=getAllUsers");
            } else {
                header("Location: index.php");
            }
        }
    }

    function logout()
    {

        session_destroy();
        header("Location: index.php");
    }
}
