<?php

<<<<<<< HEAD
class favouritesModel extends Model
=======
class favNoteModel extends Model
>>>>>>> jc
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT e.id, e.title, e.content, e.initial_date, e.final_date
        FROM favourites e
        ORDER BY e.id ASC;");

        try {
            $query->execute();
<<<<<<< HEAD
            $favourites = $query->fetchAll();
            return $favourites;
=======
            $favNote = $query->fetchAll();
            return $favNote;
>>>>>>> jc
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
<<<<<<< HEAD
            $favourites = $query->fetch();
            return $favourites;
=======
            $favNote = $query->fetch();
            return $favNote;
>>>>>>> jc
        } catch (PDOException $e) {
            return [];
        }
    }

<<<<<<< HEAD
    function create($favourites)
    {
        $query = $this->db->connect()->prepare("INSERT favourites (title, content, initial_date, final_date)
        VALUES
        (?, ?, ?, ?);");

            $query->bindParam(1, $favourites["title"]);
            $query->bindParam(2, $favourites["content"]);
            $query->bindParam(3, $favourites["initial_date"]);
            $query->bindParam(4, $favourites["final_date"]);
=======
    function create($favNote)
    {
        $query = $this->db->connect()->prepare("INSERT favourites (title, content, fecha_inicio, fecha_final)
        VALUES
        (?, ?, ?, ?);");

            $query->bindParam(1, $favNote["title"]);
            $query->bindParam(2, $favNote["content"]);
            $query->bindParam(3, $favNote["fecha_inicio"]);
            $query->bindParam(4, $favNote["fecha_final"]);
>>>>>>> jc

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

<<<<<<< HEAD
    function update($favourites)
    {
        echo "update model";
=======
    function update($favNote)
    {
>>>>>>> jc
        $query = $this->db->connect()->prepare("UPDATE favourites
        SET title = ?, content = ?, initial_date = ?, final_date = ?
        WHERE id = ?;");

<<<<<<< HEAD
            $query->bindParam(1, $favourites["title"]);
            $query->bindParam(2, $favourites["content"]);
            $query->bindParam(3, $favourites["initial_date"]);
            $query->bindParam(4, $favourites["final_date"]);
            $query->bindParam(5, $favourites["id"]);
=======
            $query->bindParam(1, $favNote["title"]);
            $query->bindParam(2, $favNote["content"]);
            $query->bindParam(3, $favNote["initial_date"]);
            $query->bindParam(4, $favNote["final_date"]);
            $query->bindParam(5, $favNote["id"]);
>>>>>>> jc

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