<?php
    
    class note{

        private $table ='note';
        private $connection;


    //set connection
    public function getConnection(){
        $dbObj = new db();
        $this -> connection = $dbObj -> connection;
    }

    //get all notes
    public function getNotes(){
        $this -> getConnection();
        $sql = 'SELECT * FROM '.$this -> table;
        $result = $this -> connection -> prepare($sql);
        $result -> execute();

        return $result -> fetchAll();
    }

    //get note by id
    public function getNoteById($id){
        if(is_null($id)) return false;
        $this -> getConnection();
        $sql = 'SELECT * FROM'.this -> table. "WHERE id = ?";
        $result = $this -> connection -> prepare($sql);
        $result -> execute(['id']);

        return $result -> fetch();
    }

    //save notes
    public function save($param){
        $this -> getConnection();

        //set default values
        $title = $content = '';


        //check if exist
        $exist = false;
        if(isset($param['id']) and $param['id'] !== ''){
            $actualNote = $this -> getNoteById($param['id']);
            if(isset($actualNote['id'])){
                $exist = true;

                //actual values
                $id = $param['id'];
                $title = $actualNote['title'];
                $content = $content['content'];
            }
        }
        //received values
        
    }


    }
?>