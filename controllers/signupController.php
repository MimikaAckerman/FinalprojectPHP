<?php

class UserController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function createUser($request)
    {
        if (sizeof($_POST) > 0) {
            $user = $this->model->create($_POST);

            if ($user[0]) {
                header("Location: index.php?controller=User&action=getAllUsers");
            } else {
                echo $user[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("user/user");
        }
    }

}