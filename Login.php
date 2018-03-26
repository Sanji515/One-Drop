<?php


session_start();

    $uname=$_POST['username'];
    $pwd2=$_POST['password'];
/*
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
$row=mysql_fetch_assoc($res);
if( $num_row == 1 ) {
	echo 'true';*/
    
        if($pwd2=="youarewelcome" && $uname=="hospitalhospital")
        {
            echo "true";
        }
        else 
        {
            echo "false";
        }
?>