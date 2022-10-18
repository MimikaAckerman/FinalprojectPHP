<?php

class favNoteModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT e.id, e.title, e.content, e.initial_date, e.final_date
        FROM favourites e
        ORDER BY e.id ASC;");

        try {
            $query->execute();
            $favNote = $query->fetchAll();
            return $favNote;
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
            $favNote = $query->fetch();
            return $favNote;
        } catch (PDOException $e) {
            return [];
        }
    }

    function create($favNote)
    {
        $query = $this->db->connect()->prepare("INSERT favourites (title, content, fecha_inicio, fecha_final)
        VALUES
        (?, ?, ?, ?);");

            $query->bindParam(1, $favNote["title"]);
            $query->bindParam(2, $favNote["content"]);
            $query->bindParam(3, $favNote["fecha_inicio"]);
            $query->bindParam(4, $favNote["fecha_final"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function update($favNote)
    {
        $query = $this->db->connect()->prepare("UPDATE favourites
        SET title = ?, content = ?, initial_date = ?, final_date = ?
        WHERE id = ?;");

            $query->bindParam(1, $favNote["title"]);
            $query->bindParam(2, $favNote["content"]);
            $query->bindParam(3, $favNote["initial_date"]);
            $query->bindParam(4, $favNote["final_date"]);
            $query->bindParam(5, $favNote["id"]);

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