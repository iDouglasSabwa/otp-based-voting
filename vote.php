<?php
session_start();
if (!isset($_SESSION['id_number'])) {
    // If ID number is not set...
     echo "<script>
        setTimeout(function() {
           window.location = './';
        },0);
     </script>";
     exit();      
}
$id_number = $_SESSION['id_number'];
 ;?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Cast Vote | Mutifactor Voting System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Cast Vote | Multifactor Voting System" name="Douglas Sabwa Indumwa" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/mflogo.png">
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />
        <link href="plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metisMenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <?php 
        include 'helpers/fetch.php';
        ?>

    </head>

    <body class="account-body accountbg" style="background-image: url(bl.jpg);background-repeat: repeat;background-size: cover;">

        <!-- Voting page -->
        <div class="container">
            <div class="row h-auto">
                <div class="col-12 align-self-center">
                    <div class="auth-page">
                        <div class="card auth-card shadow-lg">
                            <div class="card-body">
                                <div class="px-3">
                                    <div class="auth-logo-box">
                                        <a href="index.php"><img src="assets/images/mflogo.png" height="55" alt="logo" class="auth-logo"></a>
                                    </div><!--end auth-logo-box-->
                                    
                                    <div class="text-center auth-logo-text">
                                        <h4 class="mt-0 mb-3 mt-5" style="color: #0B59A4;">Multifactor Voting System</h4>
                                        <p class="text-muted mb-0">Vote from anywhere</p>  
                                    </div> <!--end auth-logo-text-->  
                                     
                                    <form action="helpers/snominate.php" class="form-horizontal auth-form my-4" method="post" autocomplete="off">
            
                                        <div class="form-group bootstrap-select-1">
                                            <label for="useremail"><b>President</b></label>
                                            <select class="custom-select" name="department" id="department" >
                                                <option selected="">Select from list...</option>
                                                <?php department();?>
                                            </select>
                                        </div><!--end form-group--> 

                                        <div class="form-group bootstrap-select-1">
                                            <label for="useremail"><b>Governor</b></label>
                                            <select class="custom-select" name="department" id="department" >
                                                <option selected="">Select from list...</option>
                                                <?php department();?>
                                            </select>
                                        </div><!--end form-group-->

                                        <div class="form-group bootstrap-select-1">
                                            <label for="useremail"><b>Senator</b></label>
                                            <select class="custom-select" name="department" id="department" >
                                                <option selected="">Select from list...</option>
                                                <?php department();?>
                                            </select>
                                        </div><!--end form-group-->

                                        <div class="form-group bootstrap-select-1">
                                            <label for="useremail"><b>Member of Parliament</b></label>
                                            <select class="custom-select" name="department" id="department" >
                                                <option selected="">Select from list...</option>
                                                <?php department();?>
                                            </select>
                                        </div><!--end form-group-->

                                        <div class="form-group bootstrap-select-1">
                                            <label for="useremail"><b>Member of County Assembly</b></label>
                                            <select class="custom-select" name="department" id="department" >
                                                <option selected="">Select from list...</option>
                                                <?php department();?>
                                            </select>
                                        </div><!--end form-group--> 

                                        <div class="form-group bootstrap-select-1">
                                            <label for="useremail"><b>Women Representative</b></label>
                                            <select class="custom-select" name="department" id="department" >
                                                <option selected="">Select from list...</option>
                                                <?php department();?>
                                            </select>
                                        </div><!--end form-group-->          
                                              
            
                                        
                                        <div class="form-group mb-0 row">
                                            <div class="col-12 mt-2">
                                                <button class="btn btn-gradient-dark btn-round btn-block waves-effect waves-light" type="submit" name="submit" id="submit" >Submit Nomination <i class="fas fa-sign-in-alt ml-1"></i></button>
                                            </div><!--end col--> 
                                        </div> <!--end form-group-->                           
                                    </form><!--end form-->
                                </div><!--end /div-->
                                
                                <div class="m-3 text-center text-muted">
                                    <h6 class="text-secondary ml-2">Made by Wanja and Njeru</h6>
                                </div>
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="account-social text-center mt-4">
                            <h6 class="my-4"> Tumutumu Girls <script type="text/javascript"> document.write(new Date().getFullYear());</script></h6>
                 <!--            <ul class="list-inline mb-4">
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-facebook-f facebook"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-twitter twitter"></i>
                                    </a>                                    
                                </li>
                                <li class="list-inline-item">
                                    <a href="" class="">
                                        <i class="fab fa-google google"></i>
                                    </a>                                    
                                </li>
                            </ul> -->
                        </div><!--end account-social-->
                    </div><!--end auth-page-->
                </div><!--end col-->           
            </div><!--end row-->
        </div><!--end container-->
        <!-- End Log In page --> 

        


         <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery-ui.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/metismenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/jquery.slimscroll.min.js"></script> 
        
        <!-- Plugins js -->
        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <script src="plugins/select2/select2.min.js"></script>
        <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="plugins/timepicker/bootstrap-material-datetimepicker.js"></script>
        <script src="plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <script src="assets/pages/jquery.forms-advanced.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        
    </body>

</html>