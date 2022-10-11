<?php



//Recive las peticiones y decidira a que metodo llamar del LoginModel.php

$email = $_POST['email'];

$passw = $_POST['pass'];

if($email == "cesardavidmor@gmail.com" && $passw == 1234){

  header("Location: ../index.php?controller=User&action=getAllUsers");

} else {
  header("Location: ../error/error.php");
}

