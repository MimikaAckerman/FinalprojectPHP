<?php

class FavNoteController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getAllFavNotes()
    {
        $favNote = $this->model->get();
        if (isset($favNote)) {
            $this->view->data = $favNote;
            $this->view->render("favNote/favNoteDashboard");
        }
    }

    function getFavNote($request)
    {
        $favNote = null;
        if (isset($request["id"])) {
            $favNote = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $favNote;
        $this->view->render("favNote/FavNote");
    }

    function createFavNote($request)
    {
        if (sizeof($_POST) > 0) {
            $favNote = $this->model->create($_POST);

            if ($favNote[0]) {
                header("Location: index.php?controller=FavNote&action=getAllFavNotes");
            } else {
                echo $favNote[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("favNote/favNote");
        }
    }

    function updateFavNote($request)
    {
        if (sizeof($_POST) > 0) {
            $favNote = $this->model->update($_POST);

            if ($favNote[0]) {
                header("Location: index.php?controller=FavNote&action=getAllFavNotes");
            } else {
                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other hobbie with that name.";
                $this->view->render("favNote/favNote");
            }
        } else {
            $this->view->render("favNote/favNote");
        }
    }

    function deleteFavNote($request)
    {
        $action = $request["action"];
        $favNote = null;
        if (isset($request["id"])) {
            $favNote = $this->model->delete($request["id"]);
            header("Location: index.php?controller=FavNote&action=getAllFavNotes");
        }
    }
}