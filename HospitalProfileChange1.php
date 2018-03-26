<html>
<head>


        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
        
            .modal {
              display:block;
            }
        </style>
        
</head>
<body>
<?php

    session_start();

if($_POST['sub123'])
{
    
                        $servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
    
            
            $HospitalID = $_SESSION['HID'];  

            $hName = $_POST['HName'];
            $hEmail = $_POST['HEmail'];
            $hPwd = $_POST['Hpwd'];
            $hMobile = $_POST['HMobile'];
            $hAddress = $_POST['HAddress'];
           


            $rName = $_POST['RecepFullName'];
            $rEmail = $_POST['RecepEmail'];
            $rPwd = $_POST['Hpwd'];
            $rAge = $_POST['RecepAge'];
            $rGender = $_POST['RecepGender'];
            $rMobile = $_POST['RecepMobile'];
            $rAddress = $_POST['RecepAddress'];
   
    
                         $row="UPDATE Hospital
            SET          HospitalName='$hName',
                         HospitalAddress='$hAddress',
                         HospitalMobile='$hMobile',
                         Email='$hEmail',
                         Password='$hPwd'
                
            WHERE        HospitalID= '$HospitalID';";
                
                $result1 = $conn->query($row);    
                
            
                
                  $row="UPDATE Receptionist
            SET          Name='$rName',
                         Address='$rAddress',
                         Phone_No='$rMobile',
                         Email='$rEmail',
                         Age='$rAge',
                         Gender='$rGender'
                                                  
                
            WHERE        H_ID= '$HospitalID';";
                
                $result2 = $conn->query($row);    
                
                if ($result1==FALSE || $result2==FALSE)
                    echo"query2 error";
                else
                    echo"<div class='modal fade in' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' style='display: block;'>
    
  <div class='modal-dialog modal-sm' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        
        <h4 class='modal-title' id='myModalLabel'>Thank You !</h4>
      </div>
      <div class='modal-body text-center'>

          <p class='lead'>Your Information updated successfully!</p>
          <a href='Hospital.php' class='btn btn-default'>Go to Back</a>
      </div>
      
    </div>
  </div>

     </div>";



    
}
    
?>
</body>
</html>