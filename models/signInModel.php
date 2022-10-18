<?php

class signupModel extends Model
{


    function create($user)
    {
        $query = $this->db->connect()->prepare("INSERT INTO users (name, last_name, email, password)
        VALUES
        (?, ?, ?, ?);");

        $query->bindParam(1, $user["name"]);
        $query->bindParam(2, $user["last_name"]);
        $query->bindParam(3, $user["email"]);
        $query->bindParam(4, $user["password"]);
        
        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}