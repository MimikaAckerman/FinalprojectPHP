<?php

class NoteModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT notes.id, notes.title, notes.content, notes.initial_date, notes.final_date
        FROM notes 
        ORDER BY notes.id ASC;");

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
        FROM notes 
        WHERE id = $id;");

        try {
            $query->execute();
            $notes = $query->fetch();
            return $notes;
        } catch (PDOException $e) {
            return [];
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
        $query->bindParam(6, $note["id"]);

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