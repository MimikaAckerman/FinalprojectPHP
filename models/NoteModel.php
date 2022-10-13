<?php

class NoteModel extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT note.id, note.title, note.content, note.fecha_inicio, note.fecha_final
        FROM note 
        ORDER BY note.id ASC;");

        try {
            $query->execute();
            $note = $query->fetchAll();
            return $note;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, title, content, fecha_inicio, fecha_final
        FROM note 
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
        $query = $this->db->connect()->prepare("INSERT INTO notes (title, content, fecha_inicio, fecha_final)
        VALUES
        (?, ?, ?, ?);");

        $query->bindParam(1, $note["title"]);
        $query->bindParam(2, $note["content"]);
        $query->bindParam(3, $note["fecha_inicio"]);
        $query->bindParam(4, $note["fecha_final"]);

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
        SET title = ?, content = ?, fecha_inicio = ?, fecha_final = ?
        WHERE id = ?;");

        $query->bindParam(1, $note["title"]);
        $query->bindParam(2, $note["content"]);
        $query->bindParam(3, $note["fecha_inicio"]);
        $query->bindParam(4, $note["fecha_final"]);
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
        $query = $this->db->connect()->prepare("DELETE FROM note WHERE id = ?");
        $query->bindParam(1, $id);

        try {
            $query->execute();
            return [true];
        } catch (PDOException $e) {
            return [false, $e];
        }
    }
}