<?php
    
    class noteController{
         
        public $page_title;
        public $view;

        public function __construct(){

            $this -> view = 'list_note';
            $this -> page_title = '';
            $this -> noteObj = new note();
        }

        //list all notes
        public function list(){
            $this -> page_title = 'list note';
            return $this -> noteObj -> getNotes();
        }

        //load note for edit
        public function edit($id = null){
            $this -> page_title = 'edit note';
            $this -> view = 'edit_note';
                //id cant we use form param of method param
                if(isset($_GET['id'])) $id = $_GET['id'];
                return $this -> noteObj -> getNoteById($id);
        }

        //create or update note
        public function save(){
            $this -> page_title = 'edit notes';
            $this -> view  ='edit_note';
            $id = $this -> noteObj -> save($_POST);
            $result = $this -> noteObj -> getNoteById($id);
            $_GET['response'] = true;
            return $result;
        }

        //confirm to delete
        public function confirm_delete(){
            $this -> page_title  ='delete note';
            $this -> view = 'confirm_delete';
            return $this -> noteObj -> getNoteById($_GET['id']);
        }

        //delete
        public function delete(){
            $this -> page_title ='list note';
            $this -> view = 'delete_note';
            return $this -> noteObj -> deleteNoteById($_POST['id']);
        }


    }