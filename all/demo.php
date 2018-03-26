<!DOCTYPE html>
<html lang="en">
<head>
    
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
function validateForm() {
    var x = document.forms["myForm"]["fname"].value;
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
}
</script>
    
</head>
    
<body>

    <div class="container">
<div class="row header" style="text-align:center;color:green">
<h3>Hahaha</h3>
</div>
<div class="row header" style="text-align:center;margin-top:40px;">
 <a href="#" data-toggle="modal" data-target="#PostCommentsModal">Hey</a></br></br>
  
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
                <div class="container">
                        <br>
                    <form action="HospitalRegister.php" method="POST">
                    <div class="form-group">
                        <div class="col-xs-6">
                            <input type="text" class="form-control" name="Husername" id="Husername" placeholder="Username">
                        </div>
                    </div>
                        <br><br><br>
                    <div class="form-group">
                        <div class="col-xs-6">
                            <input type="password" class="form-control" name="Hpwd" id="Hpwd" placeholder="Password">
                        </div>
                    </div>
                    
                    </form>
                    <br><br>
                    
                </div>
                <div class="modal-footer">
                    <input class="btn-default btn-lg" name="HProceed" type="submit" value="Proceed">
                    &emsp;
                    <input class="btn-default btn-lg" name="HCancel" type="submit" value="Cancel">
                    
                </div>
            </div>
        </div>
    </div>
    </div>
     </body>
</html>
<!--
<div class="modal fade" id="PostCommentsModal">
    
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
                <div class="container">
       
                    <div class="jumbotron" style="background: transparent;">
                           
                        <h2>You are successfully registered!</h2>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" 
                    class="btn btn-default" data-dismiss="modal">
                    Close</button>
                </div>
            </div>
        </div>
    </div>


    <form name="myForm" action="/action_page.php"
onsubmit="return validateForm()" method="post">
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>-->
   