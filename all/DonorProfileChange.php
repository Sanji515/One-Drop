<html>
<head>
</head>
<body>
<?php

    session start();
if($_POST['sub']=="update")
{
    
    $servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
    
    
     $DonorId=$_POST["DonorId"];
    
   
    
             $row="UPDATE Donor
SET          Donor.FullName=$_POST["FullName"],
             Donor.Email=$_POST["Email"],
             Donor.Password=$_POST["Password"],
             Donor.Age=$_POST["Age"],
             Donor.Gender=$_POST["Gender"],
             Donor.BloodGroup=$_POST["BloodGroup"],
             Donor.Weight=$_POST["Weight"],
             Donor.HowOften=$_POST["HowOften"],
             Donor.DonorPhone=$_POST["DonorPhone"],
             Donor.DonorMobile=$_POST["DonorMobile"],
             Donor.DonorAddress=$_POST["DonorAddress"],
             Donor.City=$_POST["City"],
    
WHERE        Donor.DonorId=$DonorId;";
    
    $result = $conn->query($sql);    
    
    if ($result==FALSE)
        echo"query error";
    else
        echo"sucessfully updated";
    
?>


    
}