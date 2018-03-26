<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script>  
        
          function validatelogin(){
            $unme2=document.getElementById("Husername").value;
            $lpwd2=document.getElementById("Hpwd").value;
            if($unme2=="" || $lpwd2=="")
            {
                $("#errorDiv1").addClass('alert alert-danger');
                $("#errorDiv1").html("Please fill all fields.");
                return false;   

            }
            else
                {
                    //php code for authentication
                  sendDataToServer();
                }
        }

function sendDataToServer(){
  
    var username= document.getElementById("Husername").value;
  var password= document.getElementById("Hpwd").value;
  
    
 /*  $("#form1").submit(function(event){
       event.preventDefault() ;
       var datatopost = $(this).serializeArray() ;*/
       event.preventDefault() ;
       $.ajax({
           url: "Login.php",
           type: "POST",
           data:{
       username:username,
       password:password,
    },
           success:function(data){
           if (data == "true"){
                window.location = "HospitalRegister.php" ;
            }
              else{
                $("#errorDiv1").addClass('alert alert-danger');
                $("#errorDiv1").html("Please enter valid username or password.");
                return false;  
              }
       }
       });
  // });
    

             
}
          </script>
    
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
        

    
</head>
    
<body>

   <div class="container">
<div class="row header" style="text-align:center;color:green">
<h3>Hahaha</h3>
</div>
<div class="row header" style="text-align:center;margin-top:40px;">
 <a href="#" data-toggle="modal" data-target="#PostCommentsModal">Hey</a>
  
</div>
</div>
    
    
    
    <div class="modal fade" id="PostCommentsModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
    
    <div class="modal-dialog">  
         <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">hey</h4>
            </div>
            <div class="modal-body">
                <div id="errorDiv1"></div>
                       
                    <form id="form1" onsubmit="return validatelogin()" action="HospitalRegister.php" method="POST">
                            <div class="form-group text-center">
                                    <label for="inputUsername3" class="col-sm-5 control-label"><h4>Username:</h4></label>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-user">
                                                </span>
                                            </span>                             
                                            <input type="text" class="form-control" name="Husername" id="Husername" placeholder="Username">
                                        </div>
                                    </div>

                            </div>
                            <br><br><br>
                            <div class="form-group text-center">
                                        <label for="inputPassword3" class="col-sm-5 control-label"><h4>Password:</h4></label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-lock">
                                                    </span>
                                                </span>
                                                <input type="password" name="Hpwd" class="form-control" id="Hpwd" placeholder="Password">
                                            </div>
                                        </div>
                            </div>
                    </form>
                </div> 
                    <br><br><br>
                   
                <div class="modal-footer">
                    <input type="submit" name="HLogin" class="btn btn-primary" value="Login" form="form1">
                    &emsp;
                    <a class="btn btn-default" data-dismiss="modal" name="HCancel" type="submit">Cancel</a>
                    
                </div>
                
            
        </div>
    </div>
    </div>
    
</body>
    
</html>