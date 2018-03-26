<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Change Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .navbar-custom {
  background-color: #ff3333;
  border-color: #ff1212;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ff6666), to(#ff3333));
  background-image: -webkit-linear-gradient(top, #ff6666, 0%, #ff3333, 100%);
  background-image: -moz-linear-gradient(top, #ff6666 0%, #ff3333 100%);
  background-image: linear-gradient(to bottom, #ff6666 0%, #ff3333 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff6666', endColorstr='#ffff3333', GradientType=0);
            padding: 10px 0px;
}
.navbar-custom .navbar-brand {
  color: #ffffff;
}
.navbar-custom .navbar-brand:hover,
.navbar-custom .navbar-brand:focus {
  color: #e6e6e6;
  background-color: transparent;
}
.navbar-custom .navbar-text {
  color: #ffffff;
}
.navbar-custom .navbar-nav > li:last-child > a {
  border-right: 1px solid #ff1212;
}
.navbar-custom .navbar-nav > li > a {
  color: #ffffff;
  border-left: 1px solid #ff1212;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus {
  color: #c0c0c0;
  background-color: transparent;
}
.navbar-custom .navbar-nav > .active > a,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus {
  color: #c0c0c0;
  background-color: #ff1212;
  background-image: -webkit-gradient(linear, left 0%, left 100%, from(#ff1212), to(#ff4545));
  background-image: -webkit-linear-gradient(top, #ff1212, 0%, #ff4545, 100%);
  background-image: -moz-linear-gradient(top, #ff1212 0%, #ff4545 100%);
  background-image: linear-gradient(to bottom, #ff1212 0%, #ff4545 100%);
  background-repeat: repeat-x;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffff1212', endColorstr='#ffff4545', GradientType=0);
}
.navbar-custom .navbar-nav > .disabled > a,
.navbar-custom .navbar-nav > .disabled > a:hover,
.navbar-custom .navbar-nav > .disabled > a:focus {
  color: #cccccc;
  background-color: transparent;
}
.navbar-custom .navbar-toggle {
  border-color: #dddddd;
}
.navbar-custom .navbar-toggle:hover,
.navbar-custom .navbar-toggle:focus {
  background-color: #dddddd;
}
.navbar-custom .navbar-toggle .icon-bar {
  background-color: #cccccc;
}
.navbar-custom .navbar-collapse,
.navbar-custom .navbar-form {
  border-color: #ff0f0f;
}
.navbar-custom .navbar-nav > .dropdown > a:hover .caret,
.navbar-custom .navbar-nav > .dropdown > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a,
.navbar-custom .navbar-nav > .open > a:hover,
.navbar-custom .navbar-nav > .open > a:focus {
  background-color: #ff1212;
  color: #c0c0c0;
}
.navbar-custom .navbar-nav > .open > a .caret,
.navbar-custom .navbar-nav > .open > a:hover .caret,
.navbar-custom .navbar-nav > .open > a:focus .caret {
  border-top-color: #c0c0c0;
  border-bottom-color: #c0c0c0;
}
.navbar-custom .navbar-nav > .dropdown > a .caret {
  border-top-color: #ffffff;
  border-bottom-color: #ffffff;
}
@media (max-width: 767) {
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a {
    color: #ffffff;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > li > a:focus {
    color: #c0c0c0;
    background-color: transparent;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .active > a:focus {
    color: #c0c0c0;
    background-color: #ff1212;
  }
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:hover,
  .navbar-custom .navbar-nav .open .dropdown-menu > .disabled > a:focus {
    color: #cccccc;
    background-color: transparent;
  }
}
.navbar-custom .navbar-link {
  color: #ffffff;
}
.navbar-custom .navbar-link:hover {
  color: #c0c0c0;
}
        
        .field{
            border-radius: 5px;
            border: 1px solid #ccc;
            -webkit-border-radius: 5px;
        }
        
        .foot{
            background-color: #d9d9d9
        }
        
        
    </style>
</head>
    
<body>
    
     <?php
    
      
     
    
   // while($row1 = mysql_fetch_array($result))
    
						$servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 
    
    

    $sql="Select HospitalAddress,Hospital.Password,HospitalMobile,HospitalName,Hospital.Email,Receptionist.Name,Receptionist.Phone_No,Receptionist.Email,Receptionist.Address,Receptionist.Age,Receptionist.Gender,Receptionist.City
    From Hospital,Receptionist
    Where HospitalID=H_ID;";
    
    // $result = mysql_query($result1); 
        $result = $conn->query($sql);    
    
    if ($result==FALSE)
        echo"query 1 error";
    
    
   while ($row = $result->fetch_assoc()) 
   {
        $HospitalAddress = $row["HospitalAddress"]; 
        $HospitalPassword = $row["Password"];
        $HospitalMobile = $row['HospitalMobile']; 
        $HospitalName = $row['HospitalName']; 
        $HospitalEmail = $row["Email"]; 
        $RecepName = $row["Name"]; 
        $RecepPhone_No = $row["Phone_No"];
        $RecepEmail=$row["Email"];
         $RecepAddress=$row["Address"];
         $RecepAge=$row["Age"];
         $RecepGender=$row["Gender"];
         $RecepCity=$row["City"];
        //$DonorBloodGroup=$row['BloodGroup']; 
        
   }
    
   
        
    ?>
    
   
          

    <nav class="navbar navbar-custom navbar-fixed-top">
    
        <div class="container">
        
            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
                
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<img src="logo1.JPG" style="padding: 0;" class="img-rounded img-responsive navbar">-->
                <a class="navbar-brand" href="#"><span style="color: #FFFFFF;">One Drop</span></a>
            </div>
            
        </div>
    </nav>
    <div class="container" style="margin-top:100px;;">
        <h2>Edit Profile</h2> 
    </div>
    
    <div class="container">
        <ul class="breadcrumb">
        
            <li><a href="#">Home</a></li>
            <li class="active">Register as Hospital</li>
        </ul>
    </div>
    <br>
    
    <!-- Login Information --> 
    <form  class="form-horizontal autofocus">
    <div class="container">
  <legend>Login Information</legend>
        <br><br>
  
   
    <div class="form-group">
      <label class="control-label col-sm-2" for="HName">Hospital Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="HName" value="<?php echo $HospitalName; ?>" name="HName">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="HEmail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="HEmail" value="<?php echo $HospitalEmail; ?>" name="HEmail">
      </div>
    </div>
        
         <div class="form-group">
      <label class="control-label col-sm-2" for="HMobile">Hospital MobileNo:</label>
      <div class="col-sm-10">          
        <input type="tel" class="form-control" id="HMobile" value="<?php echo $HospitalMobile; ?>" name="HMobile">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="Hpwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="Hpwd" value="<?php echo $HospitalPassword; ?>" name="Hpwd">
      </div>
    </div>
   
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="HAddress">Hospital Address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="HAddress" value="<?php echo $HospitalAddress; ?>" name="HAddress">
      </div>
    </div>
   <!-- <div class="form-group">
      <div class="city-wrap">
          <label class="control-label col-sm-2" for="HCity">City(lowercase):</label>
          <div class="col-sm-10">
        <input type="text" class="form-control" name="HCity" id="HCity" value="">
          </div>
        
      </div>      
    </div>-->
 
    </div>
     <br><br><br> 
    <!-- Receptionist Information -->
    
    <div class="container">
        <legend>Receptionist Information</legend>
        <br><br>
    <form class="form-horizontal">
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepFullName">Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="RecepFullName" value="<?php echo $RecepName; ?>" name="RecepFullName">
      </div>
    </div>
       
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepEmail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="RecepEmail" value="<?php echo $RecepEmail; ?>" name="RecepEmail">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepAge">Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="RecepAge" value="<?php echo $RecepAge; ?>" name="RecepAge">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="RecepGender">Gender:</label>
        <div class="col-sm-10">
        <select class="form-control " id="RecepGender" name="RecepGender">
        
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Gender" selected="selected">Select</option>
        </select>
            </div>
      
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepMobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="RecepMobile" value="<?php echo $RecepPhone_No; ?>" name="RecepMobile">
      </div>
    </div>
        
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepAddress">Address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="RecepAddress" value="<?php echo $RecepAddress; ?>" name="RecepAddress">
      </div>
    </div>
    <div class="form-group">
      <div class="city-wrap">
          <label class="control-label col-sm-2" for="RecepCity">City(lowercase):</label>
          <div class="col-sm-10">
        <input type="text" class="form-control" name="RecepCity" id="RecepCity" value="<?php echo $RecepCity; ?>" >
          </div>
        
      </div>      
    </div>
    <center>
    <input type="submit" name="DRegister" class="btn-primary btn-lg" value="Register" required>
    </center></form>
    <br><br><br>

    <!-- Manager Information -->

   
    
    <!--<div class="container field" style="background-color: #4d4d4d; height:100px">
    
        <center>
        <h5>Copyright © BloodBank Database System 2017</h5>
            </center>
    </div>-->
    
    </form>
  </div>
</form>

    
    
  <br><br><br>
<!-- FOOTER -->
            
      <div class="divider"></div>
      <div class="foot">
        <footer class="page-footer center-on-small-only">
          <!--Footer Links-->
          
            <div class="container-fluid">
                <div class="row">
                    <!--First column-->
                    <div class="col-md-3"></div>
                    
                    <div class="col-md-4">
                        <h3 class="title">Red Drop</h3>
                        <p>A life may depend on a gesture from you, a bottle of Blood.</p>
                    </div><br>
                    <div class="col-md">
                        
                    </div>
                </div>
            </div>
            <br>
            <div class="footer-copyright">
                <div class="container-fluid text-center">
                    © 2016 Copyright: <a href="Page.php"> RedDrop </a>

                </div>
            </div>
            <br><br>
        </footer>
      
      </div>


</body>
</html>