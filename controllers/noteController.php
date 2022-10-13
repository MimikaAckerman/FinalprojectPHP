<?php
	echo 'hello world';
	
 class NoteController
{
	use Controller;

//controllers
function getAllNotes(){

$notes = 
		$this -> model -> get();
		if(isset($notes)){
			$this -> view -> data = $notes;
			$this -> view -> render('note/noteDashboard');
		}
}

function getNotes($id){
	$notes = null;
	if(isset($id['id'])){
		$note =
		$this -> model -> getById
		($id['id']);
	}
	$this -> view -> action = $id['action'];
	$this -> view -> data = $note;
	$this -> view -> render('note/note');
}
function createNote($id){
	if (sizeof($_POST) > 0) {
		$note = $this->model->create($_POST);

		if ($note[0]) {
			header("Location: index.php?controller=note&action=getAll
			note");
		} else {
			echo $note[1];
		}
	} else {
		$this->view->action = $request["action"];
		$this->view->render("note/note");
	}
}

function updateNote($id){
	if (sizeof($_POST) > 0) {
		$note = $this->model->update($_POST);

		if ($note[0]) {
			header("Location: index.php?controller=Note&action=getAllNotes");
		} else {
			$this->action = $id["action"];
			$this->error = "The data entered is incorrect, check that there is no other user with that name.";
			$this->view->render("note/note");
		}
	} else {
		$this->view->render("note/note");
	}
}
function deleteNote($id){
	$action = $id["action"];
        $id = null;
        if (isset($id["id"])) {
            $id = $this->model->delete($id["id"]);
            header("Location: index.php?controller=note&action=getAllNotes");
        }
	}
}














?>