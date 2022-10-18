<?php

class UserModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT e.id, e.name, e.last_name, e.email, e.password
        FROM users e
        ORDER BY e.id ASC;");

        try {
            $query->execute();
            $users = $query->fetchAll();
            return $users;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, name, last_name, email, password
        FROM users e
        WHERE id = $id;");

        try {
            $query->execute();
            $user = $query->fetch();
            return $user;
        } catch (PDOException $e) {
            return [];
        }
    }

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

    function update($user)
    {
        $query = $this->db->connect()->prepare("UPDATE users
        SET name = ?, last_name = ?, email = ?, password = ?
        WHERE id = ?;");

        $query->bindParam(1, $user["name"]);
        $query->bindParam(2, $user["last_name"]);
        $query->bindParam(3, $user["email"]);
        $query->bindParam(4, $user["password"]);
        $query->bindParam(6, $user["id"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM users WHERE id = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}
