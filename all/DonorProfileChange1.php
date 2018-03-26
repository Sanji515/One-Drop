<!DOCTYPE html>
<html lang="en">
    
    
<head>
    
  <title>Bootstrap Example</title>
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
            background-color: #ff3333;
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
    
    

    $sql="Select FullName,Email,Password,Age,Gender,Weight,HowOften,DonorPhone,DonorMobile,DonorAddress,City
 
    From Donor
    Where DonorID='qwerty';";
    
    // $result = mysql_query($result1); 
        $result = $conn->query($sql);    
    
    if ($result==FALSE)
        echo"query error";
    
    
   while ($row = $result->fetch_assoc()) 
   {
        $DonorFullName=$row["FullName"]; 
        $DonorEmail=$row["Email"];
        $DonorPassword=$row['Password']; 
        $DonorGender=$row['Gender']; 
        $DonorAge=$row['Age']; 
        //$DonorBloodGroup=$row['BloodGroup']; 
        $DonorWeight=$row['Weight']; 
        $DonorHowOften=$row['HowOften']; 
        $DonorPhone=$row['DonorPhone']; 
        $DonorMobile=$row['DonorMobile']; 
        $DonorAddress=$row['DonorAddress']; 
        $DonorCity=$row['City']; 
   }
       $conn->close(); 
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
                <a class="navbar-brand" href="#"><span style="color: #FFFFFF;">Red Drop</span></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navCollapse">
            
                <ul class="nav navbar-nav navbar-right">
                
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blood Tips</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container" style="margin-top:100px;;">
        <h2>Edit Profile</h2> 
    </div>
    
    <div class="container">
        <ul class="breadcrumb">
        
            <li><a href="#">Home</a></li>
            <li class="active">Become a Donor</li>
        </ul>
    </div>
    <br>
    
    <!-- Login Information -->
    <form class="form-horizontal" method="post" action="DonorProfileChange.php">
    <div class="container">
                          <legend>Login Information</legend>
                                <br><br>
                          
                              
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="FullName">Full Name:</label>
                              <div class="col-sm-10">
                                <input type="text" class="form-control" id="FullName" value="<?php echo $DonorFullName; ?>" name="FullName" required/>
                           
                              </div>
                            </div>
        
        <div class="form-group">
                              <label class="control-label col-sm-2" for="Email">Email:</label>
                              <div class="col-sm-10">
                                <input type="email" class="form-control" id="Email" value="<?php echo $DonorEmail; ?>" name="Email" required>
                              </div>
                            </div>
        
        
                            <div class="form-group">
                              <label class="control-label col-sm-2" for="pwd">Password:</label>
                              <div class="col-sm-10">          
                                <input type="password" class="form-control" id="pwd" value="<?php echo $DonorPassword; ?>" name="pwd" required>
                              </div>
                            </div>
                            
<!--  </form>-->
    </div>
     <br><br><br> 
    <!-- Donor Information -->
    
    <div class="container">
        <legend>Donor Information</legend>
       <br><br>
   <!-- <form class="form-horizontal">-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="Age">Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="Age" value="<?php echo $DonorAge; ?>" name="Age" required>
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Gender">Gender:</label>
        <div class="col-sm-10">
        <select class="form-control " id="Gender" value="<?php echo $DonorGender; ?>" name="Gender">
        
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Gender" selected="selected">Select</option>
        </select>
            </div>
      
    </div>
   <!--
<div class="form-group">
      <label class="control-label col-sm-2" for="BloodGroup">Blood Group:</label>
      <div class="col-sm-10">          
        <select class="form-control" id="BloodGroup" value="" name="BloodGroup" required>
          
            <option value="A+">A+</option>
            <option value="A+">AB+</option>
            <option value="A+">O+</option>
            <option value="A+">A-</option>
            <option value="A+">AB-</option>
            <option value="A+">O-</option>
            <option value="BloodGroup" selected="selected">Select</option>
          </select>
      </div>
    </div>
-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="Weight">Weight(in Kg):</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="Weight" value="<?php echo $DonorWeight; ?>" name="Weight" required>
      </div>
    </div>
        
        <div class="form-group">
        <label class="control-label col-sm-2" for="HowOften">How often you donate blood?</label>
        <div class="col-sm-10">
        <select class="form-control " id="HowOften" value="<?php echo $DonorHowOften; ?>" name="HowOften" required>
        
            <option value="YetToDonate">Yet to Donate</option>
            <option value="RegularDonor">Regular donor</option>
            <option value="OnNeedBasis">On need basis</option>
            <option value="HowOften" selected="selected">Select</option>
        </select>
            </div>
      
    </div>
<!--  </form>-->
</div>
    <br><br><br>

    <!-- Contact Information -->
    
    <div class="container">
  <legend>Contact Information</legend>
        <br><br>
  <!--<form class="form-horizontal">-->
    <div class="form-group">
      <label class="control-label col-sm-2" for="DonorPhone">Residence Phone:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="DonorPhone" value="<?php echo $DonorPhone; ?>" name="DonorPhone" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="DonorMobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="DonorMobile" value="<?php echo $DonorMobile; ?>" name="DonorMobile" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="DonorAddress">Address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="DonorAddress" value="<?php echo $DonorAddress; ?>" name="DonorAddress" required>
      </div>
    </div>
    <div class="form-group">
      <div class="city-wrap">
          <label class="control-label col-sm-2" for="City">City(lowercase):</label>
          <div class="col-sm-10">
        <input type="text" class="form-control" name="City" id="City" value="<?php echo $DonorCity; ?>" required>
          </div>
        
    </div>
      </div>
 <!-- </form>-->
    </div>

    <center>
    <input type="submit" name="sub" class="btn-primary btn-lg" value="update" />

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
                        <h3 class="title">One Drop</h3>
                        <p>A life may depend on a gesture from you, a bottle of Blood.</p>
                    </div>
                    <div class="col-md" style="margin-top: 30px">
                        
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container-fluid text-center">
                    © 2016 Copyright: <a href="Page.php"> OneDrop </a>

                </div>
            </div>
        </footer>
      
      </div>


</body>
</html>