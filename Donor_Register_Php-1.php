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
        if($_POST["DRegister"])
        {
            
            
            $link = mysqli_connect("dbms.iiitdmj.ac.in","2016135","be5acb71","2016135") or die ("Unable to connect the server.");

    
            
            $UserName=$_POST["Username"];
            //echo "$UserName";
             $FullName=$_POST["FullName"];
             $Email=$_POST["Email"];
             $Password=$_POST["pwd"];
            $ConfirmPassword=$_POST["confirmpwd"];
             $Age=$_POST["Age"];
             $Gender=$_POST["Gender"];
             $BloodGroup=$_POST["BloodGroup"];
             $Weight=$_POST["Weight"];
             $HowOften=$_POST["HowOften"];
             $DonorPhone=$_POST["DonorPhone"];
             $DonorMobile=$_POST["DonorMobile"];
             $DonorAddress=$_POST["DonorAddress"];
             $City=$_POST["City"];
        
           
           
            $row1 = "INSERT INTO Donor VALUES ('$UserName','$FullName','$Email','$Password','$Age','$Gender','$DonorAddress','$DonorMobile','$City','$HowOften','$Weight','$DonorPhone');"; 
            
            $results1 = mysqli_query($link,$row1);
            
             $row2="INSERT INTO Blood VALUES  ('$BloodGroup','$UserName');";
             $results2 = mysqli_query($link,$row2);
            
            //Check if query executes successfully 
            if($results2 == FALSE || $results1==FALSE) {
                    echo "
                    
                          <div class='modal fade in' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' style='display: block;'>
    
  <div class='modal-dialog modal-sm' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        
        <h4 class='modal-title' id='myModalLabel'>Oops !</h4>
      </div>
      <div class='modal-body text-center'>

          <p class='lead'>You haven't followed our constraints. Please fill the information carefully</p>
          <a href='DonorRegister.php' class='btn btn-default'>Go Back</a>
      </div>
      
    </div>
  </div>

     </div>
                    "; 
            }
            
            else 
                echo" 
                
                <div class='modal fade in' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' style='display: block;'>
    
  <div class='modal-dialog modal-sm' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        
        <h4 class='modal-title' id='myModalLabel'>Thank You !</h4>
      </div>
      <div class='modal-body text-center'>

          <p class='lead'>Contact form successfully submitted. Thank you, We will get back to you soon!</p>
          <a href='Page.php' class='btn btn-default'>Go to Home</a>
      </div>
      
    </div>
  </div>

     </div>
                
                ";
 
        }
            
           
 
        
    
?>
    
   <div class='modal-backdrop fade out in'></div> 
</body>
</html>