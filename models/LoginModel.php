<?php

class LoginModel extends Model
{

    function login($logged)
    {
        print_r($logged);
        $emailU = $logged["user"];
        $passU = $logged["password"];
        $log = $this->db->connect()->prepare("SELECT e.email, e.password
        FROM users e
        WHERE e.email='" . $emailU . "' AND e.password='" . $passU . "';");

        try {
            $log->execute();
            $infoLog = $log->fetch();

            if (isset($infoLog['email']) && isset($infoLog['password'])) {

                $_SESSION['user'] = $infoLog['email'];
            } else {
                session_destroy();
            }
        } catch (PDOException $error) {
            return [false, $error];
        }
    }
}