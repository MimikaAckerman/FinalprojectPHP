<?php

class favNote extends Model
{
    function get()
    {
        $query = $this->db->connect()->prepare("SELECT favnote.id, favnote.title, favnote.content, favnote.fecha_inicio, favnote.fecha_final
        FROM favnote
        ORDER BY favnote.id ASC;");


        try {
            $query->execute();
            $favnote = $query->fetchAll();
            return $favnote;
        } catch (PDOException $e) {
            return [];
        }
    }

    function getById($id)
    {
        $query = $this->db->connect()->prepare("SELECT id, name, last_name, email, gender_id, avatar, age, phone_number, city, street_address, state, postal_code
        FROM employees e
        WHERE id = $id;");

        try {
            $query->execute();
            $employee = $query->fetch();
            return $employee;
        } catch (PDOException $e) {
            return [];
        }
    }
}