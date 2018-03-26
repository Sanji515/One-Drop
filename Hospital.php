<!DOCTYPE html>
<html>
<?php session_start()?>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Red Drop --- Welcome Member Hospital</title>


	<style type="text/css">
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
	        
	        
	        body {
	        padding-top: 70px;
	      }
	         
	        .foot{
	                background-color: #d9d9d9;
	            }
	        
	        
	        .nav>li>a {
	        padding-top: 15px;
	        padding-bottom: 15px;
	    }
	        
	        
	        .prev:hover, .next:hover {
	      background-color: rgba(0,0,0,0.8);
	    }
	        
	        .prev, .next {
	      cursor: pointer;
	      position: absolute;
	      top: 50%;
	      width: auto;
	      padding: 16px;
	      margin-top: -22px;
	      color: white;
	      font-weight: bold;
	      font-size: 18px;
	      transition: 0.6s ease;
	      border-radius: 0 3px 3px 0;
	    }
	        
	     
	    .numbertext {
	      color: #f2f2f2;
	      font-size: 12px;
	      padding: 8px 12px;
	      position: absolute;
	      top: 0;
	    }
	    
	</style>
	
	<!--<script>
		function delrow(r){

			var i = r.parentNode.parentNode.rowIndex;
			var x = r.name;
            
            
            $.ajax(
            {
                   type: "POST",
                   url: "delete_row.php",
                   data: x,
                   cache: false,

                   //success: function()
                  // {
                    //parent.fadeOut('slow', function() {$(this).remove();});
                   //}
             });
			document.getElementById("table1").deleteRow(i);

		}
	</script>-->
    
    
 <!--   
<script>
        $(document).ready(function()
        {
            $('#table1 td a.delete').click(function()
            {
                if (confirm("Are you sure you want to delete this row?"))
                {
                    var id = $(this).parent().parent().attr('id');

                    var data = 'id=' + id ;

                    var parent = $(this).parent().parent();
    
                    $.ajax(
                    {
                           
                           url: "delete_row.php",
                           type: "POST",
                           data: data,

                           success: function()
                           {
                            parent.fadeOut('slow', function() {$(this).remove();});
                           }
                     });
                    
                }
            });
        });
</script>-->
    

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
                <a class="navbar-brand" href="#"><span style="color: #FFFFFF;">Red Drop</span></a>
            </div>
            
            
            <div class="collapse navbar-collapse" id="navCollapse">
            
                <ul class="nav navbar-nav navbar-right">
                
                    <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Profile<span class="caret"></span></a>
                    
                            <ul class="dropdown-menu">

                                <li><a href="HospitalProfileChange.php" >Edit Profile</a></li>
                                <li><a href="Page.php" >Log Out</a></li>
                            </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="conatiner">
            <ul class="nav nav-tabs nav-justified" role="tablist">
            <li class="active"><a data-toggle="tab" href="#Dlist" class="btn btn-success">Donor</a></li>
            <li ><a data-toggle="tab" href="#BloodInfo" class="btn btn-success">Blood Info</a></li>
            
            <li><a data-toggle="tab" href="#Hlist" class="btn btn-success">Available Blood (Hospitals)</a></li>
            <li><a data-toggle="tab" href="#ContactUs" class="btn btn-success">Contact Us</a></li>
          	<!--  <li><a data-toggle="tab" href="#SignUp" class="btn btn-default">Sign Up</a></li>
            <li><a data-toggle="tab" href="#LogIn" class="btn btn-default">Log In</a></li>-->
          </ul>
	</div>

<div class="tab-content">

	<div id="BloodInfo" class="tab-pane fade">
		<div class="topdiv" style="margin-top: 70px"></div>
		<div class="container">
			
			<div id="accordion" role="tablist" aria-multiselectable="true" class="container">
	          <div class="card">
	            <div class="card-header" role="tab" id="headingOne">
	              <h5 class="mb-0">
	                <div data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"></div>
	                <div class="well" data-toggle="collapse"  >Blood Types Available
	                </div>
	              </h5>
	            </div>


	         
		           <div id="first1" class="collapse jumbotron collapse in">
		              	<ul class="list-group">
			              		<?php
					  		
							$servername = "dbms.iiitdmj.ac.in";
							$username = "2016135";
							$password = "be5acb71";
							$dbname = "2016135";

							
							$conn = new mysqli($servername, $username, $password, $dbname);
							
							if ($conn->connect_error) {
							    die("Connection failed: " . $conn->connect_error);
							} 

							$sql = "SELECT distinct bloodtype FROM BloodBank";

							$result = $conn->query($sql);

							if ($result->num_rows > 0) {
							    
							    while($row = $result->fetch_assoc()) {
							    ?>
						  <li class="list-group-item"><?php echo $row['bloodtype']; ?></li>
				
							  <?php
							    
								}
							} else {
							    echo "0 results";
							}
							
							?>
						</ul>
		           </div>

	            </div>
	            <br><br><br><br><br>
	         </div>

		</div>
	</div>

	<div id="Dlist" class="tab-pane fade in active">
		<div class="topdiv"></div>
		<br><br>
		<div class="container"><br><br><br>
			
			<table class="table table-striped" id="table1">
			  <thead>
			    <tr>
			      <th>DonorID</th>
			      <th>Name</th>
			      <th>Blood Group</th>
			      <th>Age</th>
			      <th>Gender</th>
			      <th>Address</th>
			      <th>Mobile No.</th>
			      <th>E-mail</th>
			      <th>DELETE</th>
			    </tr>
			  </thead>
				  <tbody>
				  	
				  	<?php
				  		
						$servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 

						$sql = "SELECT * FROM dlist";

						$result = $conn->query($sql);

						if (($result->num_rows) > 0) {
						    
						    while($row = $result->fetch_assoc()) {
                                echo '<tr id="'. $row['DonorID'].'">';
						    ?>
						        
										      	
								                  <th scope="row" id="my"><?php echo $row['DonorID']; 
								                  	$_SESSION["d_id"] = $row['DonorID']; ?></th>
								                  <td><?php echo $row['FullName']; ?></td> 
								                  <td><?php echo $row['BloodGroup']; ?></td>
								                  <td><?php echo $row['Age']; ?></td>
								                  <td><?php echo $row['Gender']; ?></td>
								                  <td><?php echo $row['DonorAddress']; ?></td>
								                  <td><?php echo $row['DonorMobile']; ?></td>
								                  <td><?php echo $row['Email']; ?></td> 
								                  <?php echo "<td><a class='delete' href=\"delete_row.php?id=".$row['DonorID']."\">Delete</a></td>"; ?>
								              	
								              	
						    <?php
						      echo '</tr>';
							}
						} else {
						    echo "0 results";
						}
						
						?>
				  	</tbody>
			 </table>
			 <br><br><br><br><br><br><br><br><br><br><br><br>
	  </div>
	</div>

	<div id="Hlist" class="tab-pane fade"><div class="topdiv"></div>
		<div class="container"><br><br><br>
			<table class="table table-striped">
			  <thead>
			    <tr>
			      <th>#</th>
			      <th>HospitalID</th>
			      <th>Hospital Name</th>
			      <th>Blood Type</th>
			      <th>Address</th>
			      <th>Phone No. </th>
			      <th>E-mail</th>
			      
			    </tr>
			  </thead>
				  <tbody>
				  	<?php
						$servername = "dbms.iiitdmj.ac.in";
						$username = "2016135";
						$password = "be5acb71";
						$dbname = "2016135";

						
						$conn = new mysqli($servername, $username, $password, $dbname);
						
						if ($conn->connect_error) {
						    die("Connection failed: " . $conn->connect_error);
						} 

						$sql = "SELECT * FROM Hospital,BloodBank where HospitalID = H_ID";

						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    $i=1;
						    while($row = $result->fetch_assoc()) {
						    ?>
						        <tr>
										      	<th scope="row"><?php echo $i ?></th>
								                  <td><?php echo $row['HospitalID']; ?></td> 
								                  <td><?php echo $row['HospitalName']; ?></td> 
								                  <td><?php echo $row['bloodtype']; ?></td>
								                  <td><?php echo $row['HospitalAddress']; ?></td>
								                  <td><?php echo $row['HospitalMobile']; ?></td>
								                  <td><?php echo $row['Email']; ?></td>
								                 
								              	</tr>
						    <?php
						    $i=$i+1;
							}
						} else {
						    echo "0 results";
						}
						$conn->close();
						?>
				  	</tbody>
			 </table>
			 <br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>

	<div id="ContactUs" class="tab-pane fade">
			<div class="topdiv"></div>
	        <br><br> 

	        <div class="container marketing">

	        <div class="row">
	          <div class="col-lg-1" ></div>
	          <div class="col-lg-4">
	            <img class="rounded-circle" src="img/hospital.jpg" alt="Generic placeholder image" width="140" height="140">
	            <h2>Jabalpur City Hospital</h2>
	            <h5>
	            <p>Contact No.</p>
	            <p>9779989499</p>
	            <p>Address-</p>
	            <p>
	            Sadar Bazaar Main Road,Jabalpur  
	            </p></h5>
	      
	          </div>
	          <div class="col-lg-2" ></div>
	          <div class="col-lg-4">
	            <img class="rounded-circle" src="img/bank.jpg" alt="Generic placeholder image" width="140" height="140">
	            <h2>Jabalpur Blood Bank</h2><h5>
	            <p>Contact No.</p>
	            <p>9789939199</p>
	            <p>Address-</p>
	            <p>
	            Sadar Bazaar Main Road,Jabalpur  
	            </p></h5>
	          </div>
	        </div>
	        </div>
	            
	        <br><br><br>       
	</div>
</div>



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