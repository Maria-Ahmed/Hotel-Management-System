<?php
session_start();
include('db.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOKING CONFIRMATION</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'/>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="../index.php"><i class="fa fa-home"></i> Homepage</a>
						<a  href="../admin/reservation.php"><i class="fas fa-arrow-circle-left"></i> Back</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class=""> <?php//page-header ?>
                            Booking Confirmation  
                        </h1>
						 <h4>Kindly check your information correctly if it submit once cannot change again!!</h4></br>
                    </div>
            </div> 
             
                                 
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" method="post" action="paymentconfirmation.php">

                            <div class="form-group">
								<label>Title: </label>
								<?php
										$a=$_POST['title'];
										echo " $a";       
								?>
							</div>
							  <div class="form-group">
                                <label>First Name: </label>
 								<?php
										$a=$_POST['fname'];
										echo " $a";       
								?>                                 
                                            
                               </div>
							   <div class="form-group">
                                <label>Last Name: </label>
								<?php
										$a=$_POST['lname'];
										echo " $a";       
								?>          
                               </div>
							   
							   <div class="form-group">
                                            <label>Email: </label>
								<?php
										$a=$_POST['email'];
										echo " $a";       
								?>                                            
                               </div>
							   <div class="form-group">
                                            <label>Nationality: </label>
								<?php
										$a=$_POST['nation'];
										echo " $a";       
								?>                                            

                                </div>
								
								<div class="form-group">
                                            <label>Passport Country:  </label>
								<?php
										$a=$_POST['country'];
										echo " $a";       
								?>											
								</div>
								<div class="form-group">
                                            <label>Phone Number: </label>
								<?php
										$a=$_POST['phone'];
										echo " $a";       
								?>            
                               </div>
							   
                        </div>
                        
                    </div>
                </div>
                
                  
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body"  >
								<div class="form-group">
                                <label>Type Of Room:  </label>
								<?php
										$a=$_POST['troom'];
										echo " $a";       
								?>      
                                      
                              </div>
							  <div class="form-group">
                                <label>Bedding Type: </label>
								<?php
										$a=$_POST['bed'];
										echo " $a";       
								?>                                             
                              </div>
							  <div class="form-group">
                                 <label>No. of Rooms: </label>
 								<?php
										$a=$_POST['nroom'];
										echo " $a";       
								?>                                            
                              </div>
							 
							 
							  <div class="form-group">
                                 <label>Meal Plan: </label>
								<?php
										$a=$_POST['meal'];
										echo " $a";       
								?>                                             
                              </div>
							  <div class="form-group">
                                <label>Check-In: </label>
 								<?php
										$a=$_POST['cin'];
										echo " $a";       
								?>                                          
                               
                                <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Check-Out: </label> 
								<?php
										$a=$_POST['cout'];
										echo " $a";       
								?>                                              
                               </div>
							   
							   <div class="form-group">
								<label>No. of days: </label>
								<?php
									$a=$_POST['cout'];
									$a=strtotime("$a");
									$b=$_POST['cin'];
									$b=strtotime("$b");
									$diff=$a - $b;
									$diff=($diff/(60*60*24));
									echo "$diff";
								?>    
								 <div class="form-group">
                                            <label></br>Payment Method: </label>
								<?php
										$a=$_POST['payment'];
										echo " $a";       
								?>                                              
                               </div>
								<?php
										
										$troom=$_POST['troom'];
										$bed=$_POST['bed'];
										$meal=$_POST['meal'];
										$nroom=$_POST['nroom'];
										$b=$_POST['cout'];
										$a=$_POST['cin'];
										$_SESSION["troom"]=$_POST['troom'];
										$_SESSION["bed"]=$_POST['bed'];
										$_SESSION["meal"]=$_POST['meal'];
										$_SESSION["nroom"]=$_POST['nroom'];
										$_SESSION["cout"]=$_POST['cout'];
										$_SESSION["cin"]=$_POST['cin'];
										$_SESSION["title"]=$_POST['title'];
										$_SESSION["fname"]=$_POST['fname'];
										$_SESSION["lname"]=$_POST['lname'];
										$_SESSION["email"]=$_POST['email'];
										$_SESSION["nation"]=$_POST['nation'];
										$_SESSION["country"]=$_POST['country'];
										$_SESSION["phone"]=$_POST['phone'];
										$_SESSION["payment"]=$_POST['payment'];
										
								?>                                              
                               </div>
							  
                       </div>
                    </div>
                </div>
			</div>
			
                <div class="col-md-12 col-sm-12">
                    <div >
							<center>
								<button type="reset"  onclick="window.location.href='reservation.php';"    style="height:50px; width:130px ">
									Change
								</button>
								<button type="submit"  name="done"   style="height:50px; width:130px ">
									Continue
								</button>
							</center>
						
						</form>
            </div>
           
                
                </div>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

</body>
</html>
