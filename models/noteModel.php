<?php

class NoteModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT e.id, e.name, e.last_name, e.email, e.password
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
        $query = $this->db->connect()->prepare("SELECT id, name, last_name, email, password
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

    function create($note)
    {
        $query = $this->db->connect()->prepare("INSERT INTO notes (name, last_name, email, password)
        VALUES
        (?, ?, ?, ?);");

        $query->bindParam(1, $note["name"]);
        $query->bindParam(2, $note["last_name"]);
        $query->bindParam(3, $note["email"]);
        $query->bindParam(4, $note["password"]);

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
        SET name = ?, last_name = ?, email = ?, password = ?
        WHERE id = ?;");

        $query->bindParam(1, $note["name"]);
        $query->bindParam(2, $note["last_name"]);
        $query->bindParam(3, $note["email"]);
        $query->bindParam(4, $note["password"]);
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