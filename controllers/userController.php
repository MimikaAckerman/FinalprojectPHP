<?php

class UserController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getAllUsers()
    {
        $users = $this->model->get();
        if (isset($users)) {
            $this->view->data = $users;
            $this->view->render("user/userDashboard");
            $this->view->render("controllers/LoginController.php");
        }
    }

    function getUser($request)
    {
        $user = null;
        if (isset($request["id"])) {
            $user = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $user;
        $this->view->render("user/user");
    }

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

    function updateUser($request)
    {
        if (sizeof($_POST) > 0) {
            $user = $this->model->update($_POST);

            if ($user[0]) {
                header("Location: index.php?controller=User&action=getAllUsers");
            } else {
                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other user with that name.";
                $this->view->render("user/user");
            }
        } else {
            $this->view->render("user/user");
        }
    }

    function deleteUser($request)
    {
        $action = $request["action"];
        $user = null;
        if (isset($request["id"])) {
            $user = $this->model->delete($request["id"]);
            header("Location: index.php?controller=User&action=getAllUsers");
        }
    }
}