<?php

class NoteModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT e.id, e.title, e.content, e.initial_date, e.final_date
        FROM notes e
        ORDER BY e.id ASC;");

        try {
            $query->execute();
            $notes = $query->fetchAll();
            return $notes;
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
            $note = $query->fetch();
            return $note;
        } catch (PDOException $e) {
            return [];
        }
    }

    function addFav($note){
        $query = $this->db->connect()->prepare("INSERT INTO favourites (id, title, content, initial_date, final_date)
        SELECT id, title, content, initial_date, final_date
        FROM notes
        WHERE id = $note;");

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    function create($note)
    {
        $query = $this->db->connect()->prepare("INSERT INTO notes (title, content, initial_date, final_date)
        VALUES
        (?, ?, ?, ?);");

        $query->bindParam(1, $note["title"]);
        $query->bindParam(2, $note["content"]);
        $query->bindParam(3, $note["initial_date"]);
        $query->bindParam(4, $note["final_date"]);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }

    

    function update($note)
    {
        $query = $this->db->connect()->prepare("UPDATE notes
        SET title = ?, content = ?, initial_date = ?, final_date = ?
        WHERE id = ?;");

        $query->bindParam(1, $note["title"]);
        $query->bindParam(2, $note["content"]);
        $query->bindParam(3, $note["initial_date"]);
        $query->bindParam(4, $note["final_date"]);
        $query->bindParam(5, $note["id"]);

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