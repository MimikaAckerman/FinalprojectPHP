<?php

class NoteController
{
    use Controller;

    /* ~~~ CONTROLLER METHODS ~~~ */

    function getAllNotes()
    {
        $notes = $this->model->get();
        if (isset($notes)) {
            $this->view->data = $notes;
            $this->view->render("note/noteDashboard");
        }
    }

    function getNote($request)
    {
        $note = null;
        if (isset($request["id"])) {
            $note = $this->model->getById($request["id"]);
        }

        $this->view->action = $request["action"];
        $this->view->data = $note;
        $this->view->render("note/note");
    }

    function createNote($request)
    {
        if (sizeof($_POST) > 0) {
            $note = $this->model->create($_POST);

            if ($note[0]) {
                header("Location: index.php?controller=Note&action=getAllNotes");
            } else {
                echo $note[1];
            }
        } else {
            $this->view->action = $request["action"];
            $this->view->render("note/note");
        }
    }

    function updateNote($request)
    {
        if (sizeof($_POST) > 0) {
            $note = $this->model->update($_POST);

            if ($note[0]) {
                header("Location: index.php?controller=Note&action=getAllNotes");
            } else {
                $this->action = $request["action"];
                $this->error = "The data entered is incorrect, check that there is no other note with that name.";
                $this->view->render("note/note");
            }
        } else {
            $this->view->render("note/note");
        }
    }

    function deleteNote($request)
    {
        $action = $request["action"];
        $note = null;
        if (isset($request["id"])) {
            $note = $this->model->delete($request["id"]);
            header("Location: index.php?controller=Note&action=getAllNotes");
        }
    }
}