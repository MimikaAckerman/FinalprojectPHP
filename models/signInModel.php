
<?php
  require 'config/db.php';

class signInModel extends model
{
    function signInModel($logged){

        $message = '';
  
        if(!empty($_POST['email']) && !empty($_POST['password'])){
            $sql = "INSERT INTO users (email,password) VALUES (:email,:password)";
            $stmt = $conn -> prepare($sql);
            $stmt -> bindParam(':email',$_POST['email']);
            $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $stmt -> bindParam(':password',$password);
        
        
            if($stmt -> execute()){
                $message = 'successfully created new user';
            }else{
                $message = 'sorry there must have been an issue creating your account';
            }
    }
}

  }
    
?>