<?php

class favouritesModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT e.id, e.title, e.content, e.initial_date, e.final_date
        FROM favourites e
        ORDER BY e.id ASC;");

        try {
            $query->execute();
            $favourites = $query->fetchAll();
            return $favourites;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, title, content, initial_date, final_date
        FROM favourites e
        WHERE id = $id;");


        try {
            $query->execute();
            $favourites = $query->fetch();
            return $favourites;
        } catch (PDOException $e) {
            return [];
        }
    }

    function create($favourites)
    {
        $query = $this->db->connect()->prepare("INSERT favourites (title, content, initial_date, final_date)
        VALUES
        (?, ?, ?, ?);");

            $query->bindParam(1, $favourites["title"]);
            $query->bindParam(2, $favourites["content"]);
            $query->bindParam(3, $favourites["initial_date"]);
            $query->bindParam(4, $favourites["final_date"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function update($favourites)
    {
        echo "update model";
        $query = $this->db->connect()->prepare("UPDATE favourites
        SET title = ?, content = ?, initial_date = ?, final_date = ?
        WHERE id = ?;");

            $query->bindParam(1, $favourites["title"]);
            $query->bindParam(2, $favourites["content"]);
            $query->bindParam(3, $favourites["initial_date"]);
            $query->bindParam(4, $favourites["final_date"]);
            $query->bindParam(5, $favourites["id"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM favourites WHERE id = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}