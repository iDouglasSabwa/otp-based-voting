<?php session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Multi Factor Voting System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">       <meta content="MultiFactor Voting System" name="Douglas Sabwa Indumwa" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/mflogo.png">

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
                                        <a href="index.php" class="logo logo-admin"><img src="assets/images/mflogo.png" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    
                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-1 mt-4 text-truncate" style="font-family: 'Poppins', sans-serif;line-height: 2.0;color: #0B59A4;"> Multi Factor Voting System</h4>
                                       <!--  <p class="text-muted mb-0">Please sign in to continue</p>  -->
                                     
                                        <p class="text-muted mb-1" style="font-family: 'Poppins', sans-serif;"><?php echo " " . date("l, d M Y") . "<br>";;?></p>   
                                    </div> <!--end auth-logo-text-->  
    
                                    
                                    <form class="form-horizontal auth-form my-4" action="helpers/sindex.php" method="post" autocomplete="off">
            
                                        <div class="form-group">
                                            
                                            <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i> 
                                                </span>
                                                <input type="text" class="form-control" id="staff_id" name="id_number" minlength="3" maxlength="15" placeholder="Type voter ID number here..." required >
                                            </div>                                    
                                        </div><!--end form-group--> 
            
                                                    
                                        
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light" name="submit" type="submit">Proceed Now <i class="fas fa-sign-in-alt ml-1"></i></button>
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
                            <h6 class="my-4"> Tumutumu Girls <script type="text/javascript"> document.write(new Date().getFullYear());</script></h6>
                
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