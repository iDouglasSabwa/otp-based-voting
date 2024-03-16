<?php 
 if (!$_POST) exit; 

 $president = $_POST['president'];
 $governor = $_POST['governor'];
 $senator = $_POST['senator'];
 $mca = $_POST['mca'];
 $mp = $_POST['mp'];
 $womenrep = $_POST['womenrep'];


 //Get session variables
 session_start();
 $id_number = $_SESSION['id_number'];
 $otp_code = $_SESSION['otp_code'];
 
//Sanitize data
function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$president = clean($president);
$governor = clean($governor);
$senator = clean($senator);
$mca = clean($mca);
$mp = clean($mp);
$womenrep = clean($womenrep);

date_default_timezone_set("Africa/Nairobi");
$logdate = date('Y-m-d H:i:s');

//Database connection file
include 'connect.php';

if (isset($_POST['submit'])) {
	# Check if voter exists...
	$query = "SELECT vote_id FROM voting_table WHERE id_number = '$id_number'";
	$query = mysqli_query($con,$query);

	if (mysqli_num_rows($query)>0) {

		echo "<h2 style='text-align:center;margin-top:20%;color:red;font-family:Century Gothic'>You have already voted... </h2>";
		
		echo "<script>
            setTimeout(function() {
               window.location = '../';
            },2000);
         </script>";   

	} else {
		# Insert into the voting file...
		$sql = "INSERT INTO voting_table (id_number,president,governor,senator,mca,mp,women_rep,otp,voting_date) VALUES ('$id_number','$president','$governor','$senator','$mca','$mp','$women_rep','$otp_code','$logdate')";
		$sql = mysqli_query($con,$sql);

		if (!$sql) {
			// code...
			echo "Error".mysqli_error($con);
		}

		echo "<h2 style='text-align:center;margin-top:20%;color:green;font-family:Century Gothic'>Succesfully voted... </h2>";
		
		echo "<script>
            setTimeout(function() {
               window.location = '../';
            },2000);
         </script>";  

     

	}

	return mysqli_close($con);
	//Destroy session variables
	session_destroy();
	

} else {
	# If post fails...
	echo "Submission error occured";
}


?>