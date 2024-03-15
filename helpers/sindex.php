<?php 
 if (!$_POST) exit; 

 $staff_id = $_POST['staff_id'];
 $code = $_POST['code'];

//Sanitize data
function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$code = clean($code);
$staff_id = clean($staff_id);

date_default_timezone_set("Africa/Nairobi");
$logdate = date('Y-m-d H:i:s');

//Database connection file
include 'connect.php';

if (isset($_POST['submit'])) {
	# code...
	$query = "SELECT id FROM staff WHERE pf_number ='$staff_id' AND nomination_code ='$code'";
	$query = mysqli_query($con,$query);

	if (!$query) {
		// code...
		echo "Error".mysqli_error($con);
	}
	
	include 'ip.php';

	if (mysqli_num_rows($query)>0) {

		// echo "Member exists";
		
		//Populate log file
		$sql = "INSERT INTO logs (pf_number,code,logdate,ip_address, remarks) VALUES ('$staff_id','$code','$logdate','$ip','Success')";
		$sql = mysqli_query($con,$sql);

		// Put the code variable into a session variable
		session_start();
		$_SESSION['code'] = $code;	
		$_SESSION['staff_id'] = $staff_id;	

		// Redirect to nomination page
		 echo "<script>
            setTimeout(function() {
               window.location = '../nominate.php';
            },0);
         </script>";   

	} else {
		# Populate log file...
		$sql = "INSERT INTO logs (pf_number,code,logdate,ip_address, remarks) VALUES ('$staff_id','$code','$logdate','$ip','Fail')";
		$sql = mysqli_query($con,$sql);

       echo "<h2 style='text-align:center;margin-top:20%;color:red;font-family:Century Gothic'>Invalid credentials. Please check again </h2>";
       echo "<script>
            setTimeout(function() {
               window.location = '../';
            },2500);
         </script>";
		
		}

	return mysqli_close($con);
	

} else {
	# If post fails...
	echo "Submission error occured";
}


?>