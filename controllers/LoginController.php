<?php



//Recive las peticiones y decidira a que metodo llamar del LoginModel.php

$email = $_POST['email'];

$passw = $_POST['pass'];

foreach ($this->data as $index => $user) {
  if($email == $user["email"] && $passw == $user["password"]){

    header("Location: ../index.php?controller=User&action=getAllUsers");

  } else {
    header("Location: ../error/error.php");
  }
}


