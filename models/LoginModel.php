<?php

//Hace las peticiones para ver si estas logeado, si te quieres logear, si te quieres deslogear
//si te quieres crear un usuario.

class LoginModel extends Model{

	function get() {
        $query = $this->db->connect()->prepare("SELECT email, `password`
        FROM users;");

        try{
            $query->execute();
            $users = $query->fetchAll();
            return $users;
        }   catch(PDOException $e) {
            return [];
        }
    }

    function getEmail($email) {
        $query = $this->db->connect()->prepare("SELECT email, `password`
        FROM users WHERE email = $email;");

        try{
            $query->execute();
            $users = $query->fetchAll();
            return $users;
        } catch(PDOException $e){
            return [];
        }
    }

}

?>