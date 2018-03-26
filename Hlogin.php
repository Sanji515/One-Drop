<?php


session_start();

    $uname=$_POST['username'];
    $pwd2=$_POST['password'];

         $conn = new mysqli("dbms.iiitdmj.ac.in","2016135","be5acb71","2016135");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
      
        $sql = "SELECT *FROM Hospital WHERE HospitalID = '$uname' AND  Password = '$pwd2'";
        $result = $conn->query($sql);   
        $num_row = $result->num_rows;
        $row = $result->fetch_assoc();
       
        if($num_row > 0  )
        {
            $_SESSION["HName"]=$row["HospitalName"];
            $_SESSION['HAddress']=$row['HospitalAddress'];
            $_SESSION['HMobile']=$row['HospitalMobile'];
            $_SESSION['HID']=$row['HospitalID'];
            $_SESSION['HEmail']=$row['Email'];
            echo "true";
        }
        else
        {
            echo "false";
            
        }
    
?>