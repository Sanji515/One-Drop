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

         $conn = new mysqli("dbms.iiitdmj.ac.in","2016135","be5acb71","2016135");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
      
        $sql = "SELECT * FROM Donor WHERE DonorID = '$uname' AND  Password = '$pwd2'";
        $result = $conn->query($sql);   
        $num_row = $result->num_rows;
        $row = $result->fetch_assoc();
       $_SESSION["DFullName"]=$row["FullName"];
        if($num_row > 0  )
        {
            $_SESSION["DFullName"]=$row["FullName"];
            $_SESSION['DGender']=$row['FullName'];
            $_SESSION['DAge']=$row['FullName'];
            $_SESSION['DAddress']=$row['FullName'];
            $_SESSION['DDonorMobile']=$row['FullName'];
            $_SESSION['DPhone']=$row['FullName'];
            $_SESSION['DWeight']=$row['FullName'];
            $_SESSION['DEmail']=$row['FullName'];
            $_SESSION['DID12']=$row['DonorID'];
            
            echo "true";
        }
        else
        {
            echo "false";
            
        }
    
/*
        if($pwd2=='youarewelcome' && $uname=='hospitalhospital')
        {
            echo "true";
        }
        else 
        {
            echo "false";
        }*/
?>