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
if($_POST['sub'])
{
    
    $servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
    
    
     //$DonorId=$_POST["DonorId"];

            $FullName = $_POST['FullName'];
            $Email = $_POST['Email'];
            $Password = $_POST['pwd'];
            $Age = $_POST['Age'];
            $Weight = $_POST['Weight'];
            $HowOften = $_POST['HowOften'];
            $DonorPhone = $_POST['DonorPhone'];
            $DonorMobile = $_POST['DonorMobile'];
            $DonorAddress = $_POST['DonorAddress'];
            $City = $_POST['City'];
    

            $Did = $_SESSION['DID12'];
            //echo $FullName;
    
             $row = "UPDATE Donor
             SET FullName='$FullName',
             Email='$Email',
             Password='$Password',
             Age='$Age',
             Weight='$Weight',
             HowOften='$HowOften',
             DonorPhone='$DonorPhone',
             DonorMobile='$DonorMobile',
             DonorAddress='$DonorAddress',
             City='$City'
    
             WHERE DonorID='$Did'";
    
    $result = $conn->query($row);    
    
    if ($result==FALSE)
        echo "query error";
    else
        echo "<div class='modal fade in' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' style='display: block;'>
    
  <div class='modal-dialog modal-sm' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        
        <h4 class='modal-title' id='myModalLabel'>Thank You !</h4>
      </div>
      <div class='modal-body text-center'>

          <p class='lead'>Your Information updated successfully!</p>
          <a href='DonorProfile.php' class='btn btn-default'>Go to Back</a>
      </div>
      
    </div>
  </div>

     </div>
               ";


    
}

?>
<div class='modal-backdrop fade out in'></div> 
</body>