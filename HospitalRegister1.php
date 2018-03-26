<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Register as Hospital</title>
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
                      background-color: #d9d9d9;
                  }
                  
        
 </style>


 <script>
    
    
      function checkPassword(){
            var pwd = document.getElementById("Hpwd").value;
            var confirmpwd = document.getElementById("Hconfirmpwd").value;
          
            if(pwd != confirmpwd){
                
                document.getElementById("Hconfirmpwd").style.borderColor = "red";
                
            }
          else
              document.getElementById("Hconfirmpwd").style.borderColor = "";
        }
        
        function checkPassword1(){
            
            var pwd = document.getElementById("Hpwd");
            var confirmpwd = document.getElementById("Hconfirmpwd");
          
            if(pwd.value != confirmpwd.value){
                
                document.getElementById('errfn').innerHTML="Password do not match";
                confirmpwd.value = "";
            }
            else{
                document.getElementById('errfn').innerHTML="";
            }
        }
        
    </script>
</head>
    
<body>

    <nav class="navbar navbar-custom navbar-fixed-top">
    
        <div class="container">
        
            <div class="navbar-header">
            
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapse">
                
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<img src="logo1.JPG" style="padding: 0;" class="img-rounded img-responsive navbar">-->
                <a class="navbar-brand" href="Page.php"><span style="color: #FFFFFF;">Red Drop</span></a>
            </div>
            
            
        </div>
    </nav>
    <div class="container" style="margin-top:100px;;">
        <h2>Register as a Hospital</h2> 
    </div>
    
    <div class="container">
        <ul class="breadcrumb">
        
            <li><a href="Page.php">Home</a></li>
            <li class="active">Register as Hospital</li>
        </ul>
    </div>
    <br>
    
    <!-- Login Information -->
    <form class="form-horizontal autofocus">
    <div class="container">
  <legend>Login Information</legend>
        <br><br>
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="HUsername">Username:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="HUsername" placeholder="Enter username" name="HUsername">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="HName">Hospital Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="HName" placeholder="Enter your Hospital name" name="HName">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="HEmail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="HEmail" placeholder="Enter email" name="HEmail">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Hpwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="Hpwd" placeholder="Enter password" name="Hpwd"><div id="errfn"></div>
      </div>
    </div>
    <div id="checkpwd"></div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="Hconfirmpwd">Confirm Password:</label>
      <div class="col-sm-10">          
        <input type="password" class="form-control" id="Hconfirmpwd" placeholder="Confirm password" name="Hconfirmpwd"  onkeyup="checkPassword()" onchange="checkPassword1()">
      </div>
    </div>
 
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
        <input type="text" class="form-control" id="RecepFullName" placeholder="Enter your name" name="RecepFullName">
      </div>
    </div>
       
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepEmail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="RecepEmail" placeholder="Enter email" name="RecepEmail">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepAge">Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="RecepAge" placeholder="Enter age" name="RecepAge">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="RecepGender">Gender:</label>
        <div class="col-sm-10">
        <select class="form-control " id="RecepGender">
        
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Gender" selected="selected">Select</option>
        </select>
            </div>
      
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepMobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="RecepMobile" placeholder="Enter your mobile number" name="RecepMobile">
      </div>
    </div>
        
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="RecepAddress">Address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="RecepAddress" placeholder="Enter your address" name="RecepAddress">
      </div>
    </div>
    <div class="form-group">
      <div class="city-wrap">
          <label class="control-label col-sm-2" for="RecepCity">City(lowercase):</label>
          <div class="col-sm-10">
        <input type="text" class="form-control" name="RecepCity" id="RecepCity" placeholder="Enter your city">
          </div>
        
      </div>      
    </div>
    <br><br><br>

    <!-- Manager Information -->
    
    <div class="container">
  <legend>Manager Information</legend>
        <br><br>
  <form class="form-horizontal">
    <div class="form-group">
      <label class="control-label col-sm-2" for="MagFullName">Full Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="MagFullName" placeholder="Enter your name" name="MagFullName">
      </div>
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="MagEmail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="MagEmail" placeholder="Enter email" name="MagEmail">
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" for="MagAge">Age:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="MagAge" placeholder="Enter age" name="MagAge">
      </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="Gender">Gender:</label>
        <div class="col-sm-10">
        <select class="form-control " id="MagGender">
        
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Gender" selected="selected">Select</option>
        </select>
            </div>
      
    </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="MagMobile">Mobile Number:</label>
      <div class="col-sm-10">
        <input type="tel" class="form-control" id="MagMobile" placeholder="Enter your mobile number" name="MagMobile">
      </div>
    </div>
        
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="MagAddress">Address:</label>
      <div class="col-sm-10">          
        <input type="textarea" class="form-control" id="MagAddress" placeholder="Enter your address" name="MagAddress">
      </div>
    </div>
    <div class="form-group">
      <div class="city-wrap">
          <label class="control-label col-sm-2" for="MagCity">City(lowercase):</label>
          <div class="col-sm-10">
        <input type="text" class="form-control" name="MagCity" id="MagCity" placeholder="Enter your city">
          </div>
        
      </div>      
    </div>
  </form>
    </div>
    <br><br><br>
    <center>
    <button type="button" class="btn-primary btn-lg">Register</button>
        </center>
    <br><br><br>
    

    
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