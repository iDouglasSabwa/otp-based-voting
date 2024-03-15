<?php session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Staff Awards and Recognition | Sabatia Eye Hospital</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">       <meta content="Sabatia Eye Hospital | Staff Awards and Recognition" name="Douglas Sabwa Indumwa" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/sehlogo.png">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-body accountbg" style="background-image: url(cl.jpg);background-repeat: no-repeat;background-size: cover;">

        <!-- Log In page -->
        <div class="container">
            <div class="row vh-100 ">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="index.php" class="logo logo-admin"><img src="assets/images/logo-seh.png" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    
                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-1 mt-4 text-truncate" style="font-family: 'Poppins', sans-serif;line-height: 2.0;color: #0B59A4;"> SEH Staff Recognition</h4>
                                       <!--  <p class="text-muted mb-0">Please sign in to continue</p>  -->
                                     
                                        <p class="text-muted mb-1" style="font-family: 'Poppins', sans-serif;"><?php echo " " . date("l, d M Y") . "<br>";;?></p>   
                                    </div> <!--end auth-logo-text-->  
    
                                    
                                    <form class="form-horizontal auth-form my-4" action="helpers/sindex.php" method="post" autocomplete="off">
            
                                        <div class="form-group">
                                            <label for="staff_id" class="text-soft-dark"><b>Your Staff Number</b></label>
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i> 
                                                </span>
                                                <input type="text" class="form-control" id="staff_id" name="staff_id" minlength="3" maxlength="5" placeholder="Staff Number here..." required >
                                            </div>                                    
                                        </div><!--end form-group--> 
            
                                        <div class="form-group">
                                            <label for="code" class="text-soft-dark"><b>Your Nomination Code</b></label>                                            
                                            <div class="input-group mb-4"> 
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i> 
                                                </span>                                                       
                                                <input type="number" class="form-control" id="code" name="code" min="1000" max="9999" placeholder="Nomination Code here..." required>
                                            </div>                               
                                        </div><!--end form-group-->             
                                        
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" name="submit" type="submit">Submit Now <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->
                                       
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                               <!--  <div class="m-3 text-center text-muted">
                                    <p class="">Having any challenges here?  <a href="#" class="text-primary ml-2">Get Help</a></p>
                                </div> -->
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="account-social text-center mt-4" style="visibility: visible;">
                            <h6 class="my-4"> Sabatia Eye Hospital <script type="text/javascript"> document.write(new Date().getFullYear());</script></h6>
                
                        </div><!--end account-social-->
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page -->

        


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script>        

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>