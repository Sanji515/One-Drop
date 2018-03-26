<?php


session_start();

    $uname=$_POST['username'];
    $pwd2=$_POST['password'];
    
        if($pwd2=="asd" && $uname=="asd")
        {
            echo "true";
        }
        else 
        {
            echo "false";
        }
?>