<?php 
 if (!$_POST) exit; 

 $otp_code = $_POST['otp_code'];

//Sanitize data
function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$otp_code = clean($otp_code);
session_start();
$id_number = $_SESSION['id_number'];
$_SESSION['otp_code'] = $otp_code;


//Database connection file
include 'connect.php';

if (isset($_POST['submit'])) {
	# Checks if OTP code matches with voter ID number...
	$query = "SELECT otp FROM otp_codes WHERE otp = '$otp_code' AND id_number ='$id_number' AND status ='Pending'";
	$query = mysqli_query($con,$query);

	if (!$query) {
		// code...
		echo "Error".mysqli_error($con);
	}
	
	//If details match 
	if (mysqli_num_rows($query)>0) {


         // Redirect to voting page
		 echo "<script>
            setTimeout(function() {
               window.location = '../vote.php';
            },0);
         </script>";  


	}
		 

	 else {
		# If ID number is incorrect...		

       echo "<h2 style='text-align:center;margin-top:20%;color:red;font-family:Century Gothic'>Invalid OTP code. Try again </h2>";
       echo "<script>
            setTimeout(function() {
               window.location = '../otp.php';
            },2500);
         </script>";
		
		}

	return mysqli_close($con);
	
}
 else {
	# If post fails...
	echo "Submission error occured";
}


?>