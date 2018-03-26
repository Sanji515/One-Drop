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
    <title></title>
</head>
<body>
<?php


session_start();


       $servername = "dbms.iiitdmj.ac.in";
                        $username = "2016135";
                        $password = "be5acb71";
                        $dbname = "2016135";

                        
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
      
        $Did = $_SESSION['DID12'];

        $sql = "SELECT * FROM Donor,Blood WHERE DonorID=D_ID and DonorID = '$Did';";
        $result = $conn->query($sql);   
        
        while ($row = $result->fetch_assoc()) 
   {
        $DonorFullName=$row["FullName"]; 
        $DonorEmail=$row["Email"];
        
        $DonorGender=$row['Gender']; 
        $DonorAge=$row['Age']; 
        $DonorBloodGroup=$row['BloodGroup']; 
         
        $DonorMobile=$row['DonorMobile']; 
        $DonorAddress=$row['DonorAddress']; 
        
   }
   
     $sql1 = "INSERT INTO dlist VALUES('$Did','$DonorFullName','$DonorAge','$DonorGender','$DonorAddress','$DonorMobile','$DonorEmail','$DonorBloodGroup');";

     $result1 = $conn->query($sql1);   

        if($result1==FALSE || $result==FALSE){
            echo "not running";
        }
        else{
            echo "<div class='modal fade in active' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' style='display: block;'>
    
  <div class='modal-dialog modal-sm' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        
        <h4 class='modal-title' id='myModalLabel'>Thank You !</h4>
      </div>
      <div class='modal-body text-center'>

          <p class='lead'>You are a Life Saver. Soon Hospital is going to contact you!</p>
          <a href='DonorProfile.php' class='btn btn-default'>Go to Back</a>
      </div>
      
    </div>
  </div>

     </div>";
        }
?>


<div class='modal-backdrop fade out in'></div> 

</body>


</html>