<?php
    class favController
    {
        use Controller;
    
        /* ~~~ CONTROLLER METHODS ~~~ */
    
        function getAllFavNotes()
        {
            $favNotes = $this->model->get();
            if (isset($favNotes)) {
                $this->view->data = $hobbies;
                $this->view->render("favNotes/favNoteDashboard");
            }
        }
    
        function getFavNotes($id)
        {
            $favNotes = null;
            if (isset($id["id"])) {
                $favNotes = $this->model->getById($id["id"]);
            }
    
            $this->view->action = $id["action"];
            $this->view->data = $favNotes;
            $this->view->render("favNotes/favNotes");
        }
    
        function createFavNotes($id)
        {
            if (sizeof($_POST) > 0) {
                $favNotes = $this->model->create($_POST);
    
                if ($favNotes[0]) {
                    header("Location: index.php?controller=favNotes&action=getAllfavNotes");
                } else {
                    echo $hobbie[1];
                }
            } else {
                $this->view->action = $request["action"];
                $this->view->render("favNotes/favNotes");
            }
        }
    
        function updatefavNotes($id)
        {
            if (sizeof($_POST) > 0) {
                $favNotes = $this->model->update($_POST);
    
                if ($favNotes[0]) {
                    header("Location: index.php?controller=favNotes&action=getAllfavNotes");
                } else {
                    $this->action = $id["action"];
                    $this->error = "The data entered is incorrect, check that there is no other hobbie with that name.";
                    $this->view->render("favNotes/favNotes");
                }
            } else {
                $this->view->render("favNotes/favNotes");
            }
        }
    
        function deleteHobbie($id)
        {
            $action = $request["action"];
            $favNotes = null;
            if (isset($id["id"])) {
                $favNotes = $this->model->delete($id["id"]);
                header("Location: index.php?controller=favNotes&action=getAllfavNotes");
            }
        }
    }
?>