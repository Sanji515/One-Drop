<html>
<head>
</head>
<body>
<?php

    session start();
if($_POST['HospitalChangeProfile'])
{
    
    $servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
    
    
     $HospitalId=$_POST["HospitalId"];
    
   
    
             $row="UPDATE Hospital
SET          HospitalName=HName;
             HospitalAddress=HAddress;
             HospitalMobile=HMobile;
             Hospital.Email=HEmail;
             Hospital.Password=HPassword;
    
WHERE        HospitalID=$HospitalID;";
    
    $result = $conn->query($row);    
    
    if ($result==FALSE)
        echo"query error";
    else
        echo"sucessfully updated";
    
      $row="UPDATE Receptionist
SET          Name=RecepFullName;
             Address=RecepAddress;
             Phone_No=RecepMobile;
             Email=RecepEmail;
             Age=RecepAge;
             Gender=RecepGender;
             City=RecepCity;
             
    
WHERE        H_ID=$HospitalID;";
    
    $result = $conn->query($row);    
    
    if ($result==FALSE)
        echo"query error";
    else
        echo"sucessfully updated";
    
?>


    
}

</body>
</html>