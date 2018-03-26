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
        //if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
        // require('DonorRegister.php'); 
        if($_POST["HRegister"]=='Register')
        {
            
            $servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
            
            
             $UserName=$_POST["HUsername"];
             $HospitalName=$_POST["HName"];
             $HospitalAddress=$_POST["HAddress"];
             $HospitalMobile=$_POST["HMobile"];
             $Email=$_POST["HEmail"];
             $Password=$_POST["Hpwd"];
             $ConfirmPassword=$_POST["Hcpwd"];
            
             $RecepName=$_POST["RecepFullName"];
             $RecepEmail=$_POST["RecepEmail"];
             $RecepAge=$_POST["RecepAge"];
             $RecepGender=$_POST["RecepGender"];
             $RecepMobile=$_POST["RecepMobile"];
             $RecepAddress=$_POST["RecepAddress"];
             $RecepCity=$_POST["RecepCity"];
            
             $ManagerName=$_POST["MagFullName"];
             $ManagerEmail=$_POST["MagEmail"];
             $ManagerAge=$_POST["MagAge"];
             $ManagerGender=$_POST["MagGender"];
             $ManagerMobile=$_POST["MagMobile"];
             $ManagerAddress=$_POST["MagAddress"];
             $ManagerCity=$_POST["MagCity"];
            
            
            $row1 = "INSERT INTO Hospital VALUES ('$UserName','$HospitalAddress','$Password','$HospitalMobile','$HospitalName','$Email');";
             $results1 = $conn->query($row1); 
            
            if($results1==false){
                echo 'query1 error';
            }
            
            
              $row2=  "INSERT INTO Receptionist VALUES ('$RecepName','$RecepMobile','$RecepEmail','$RecepAddress','$UserName','$RecepAge','$Password','$RecepGender','$RecepCity');";
             $results2 = $conn->query($row2); 
            
            if($results2==false){
                echo 'query2 error';
            }
            
             $row3=  "INSERT INTO Manager VALUES ('$UserName','$ManagerMobile','$ManagerAddress','$ManagerEmail','$ManagerName','$ManagerGender','$Password','$ManagerCity','$ManagerAge');";
            $results3 = $conn->query($row3); 
            
            if($results3==false){
                echo 'query3 error';
            }
            
            
            
            
             if($results1 == FALSE || $results2 == FALSE || $results3 == FALSE ) 
             {     echo "<div class='modal fade in' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' style='display: block;'>
    
  <div class='modal-dialog modal-sm' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        
        <h4 class='modal-title' id='myModalLabel'>Oops !</h4>
      </div>
      <div class='modal-body text-center'>

          <p class='lead'>You haven't followed our constraints. Please fill the information carefully</p>
          <a href='HospitalRegister.php' class='btn btn-default'>Go Back</a>
      </div>
      
    </div>
  </div>

     </div>
                  "; }
            else {
                echo "<div class='modal fade in' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' style='display: block;'>
    
  <div class='modal-dialog modal-sm' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        
        <h4 class='modal-title' id='myModalLabel'>Thank You !</h4>
      </div>
      <div class='modal-body text-center'>

          <p class='lead'>Contact form successfully submitted. Thank you!</p>
          <a href='Page.php' class='btn btn-default'>Go to Home</a>
      </div>
      
    </div>
  </div>

     </div>
             ";
 
           
        }
        }
?>
    
    
</body>
</html>