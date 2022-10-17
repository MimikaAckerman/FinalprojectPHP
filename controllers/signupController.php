<?php

class signupController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getUser($request)
    {
        $user = null;
        if (isset($request["id"])) {
            $user = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $user;
        $this->view->render("signup/signup");
    }

    function createUser($request)
    {
        if (sizeof($_POST) > 0) {
            $user = $this->model->create($_POST);

            if ($user[0]) {
                header("Location: index.php?controller=signup&action=createUser");
            } else {
                echo $user[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("main/login");
        }
    }
}
