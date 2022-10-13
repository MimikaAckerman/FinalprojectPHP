<?php

class favNoteModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT e.id, e.title, e.content, e.initial_date, e.final_date
        FROM notes e
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
        FROM notes e
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
        $query = $this->db->connect()->prepare("INSERT INTO hobbies (name, type)
        VALUES
        (?, ?);");

        $query->bindParam(1, $favNote["name"]);
        $query->bindParam(2, $favNote["type"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function update($favNote)
    {
        echo "update model";
        $query = $this->db->connect()->prepare("UPDATE favNote
        SET name = ?, type = ?
        WHERE id = ?;");

        $query->bindParam(1, $favNote["name"]);
        $query->bindParam(2, $favNote["type"]);
        $query->bindParam(3, $favNote["id"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function delete($id)
    {
        $query = $this->db->connect()->prepare("DELETE FROM notes WHERE id = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}
