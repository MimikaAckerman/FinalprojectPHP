<?php

require_once '../models/LoginModel.php';

//Recive las peticiones y decidira a que metodo llamar del LoginModel.php

$email = $_POST['email'];

$passw = $_POST['pass'];

if($email == "cesardavidmor@gmail.com" && $passw == 1234){
$login = new LoginModel();

$login->getConection();
$login -> getNotes();
echo $login['id'];
} else {
  header("Location: ../views/error/error.php");
}

