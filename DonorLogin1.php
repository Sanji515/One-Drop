<?php


session_start();

    $uname=$_POST['username'];
    $pwd2=$_POST['password'];

        $conn = new mysqli("dbms.iiitdmj.ac.in","2016135","be5acb71","2016135");
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
      
        $sql = "SELECT *FROM Donor WHERE DonorID = '$uname' AND  Password = '$pwd2'";
        $result = $conn->query($sql);   
        $num_row = $result->num_rows;
        $row = $result->fetch_assoc();
        if($num_row > 0  )
        {
            $_SESSION["DFullName"]=$row["FullName"];
            $_SESSION['DGender']=$row['Gender'];
            $_SESSION['DAge']=$row['Age'];
            $_SESSION['DAddress']=$row['DonorAddress'];
            $_SESSION['DDonorMobile']=$row['DDonorMobile'];
            $_SESSION['DPhone']=$row['DonorMobile'];
            $_SESSION['DWeight']=$row['Weight'];
            $_SESSION['DEmail']=$row['Email'];
            echo "true";
        }
        else
        {
            echo "false";
            
        }
    
?>