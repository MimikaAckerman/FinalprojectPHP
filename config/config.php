<?php
    
    $conn = new mysqli('localhost','root','','notes');
        if(!$conn){
            die('error:cannot connect with database');
        }
?>