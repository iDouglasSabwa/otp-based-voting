<?php 
 if (!$_POST) exit; 

 $department = $_POST['department'];
 $employee = $_POST['employee'];


 //Get session variables
 session_start();
 $code = $_SESSION['code'];
 $staff_id = $_SESSION['staff_id'];
 
//Sanitize data
function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$employee = clean($employee);
// $employee = $employee[0];
$department = clean($department);
$code = clean($code);
$staff_id = clean($staff_id);

date_default_timezone_set("Africa/Nairobi");
$logdate = date('Y-m-d H:i:s');

var_dump($employee);
var_dump($code);
var_dump($staff_id);

//Database connection file
include 'connect.php';

if (isset($_POST['submit'])) {
	# code...
	$query = "SELECT id FROM nominations WHERE PF_Number = '$employee' AND Nomination_Code = '$code'";
	$query = mysqli_query($con,$query);
	include 'ip.php';

	if (mysqli_num_rows($query)>0) {

		echo "<h2 style='text-align:center;margin-top:20%;color:red;font-family:Century Gothic'>Already nominated... </h2>";
		
		//Populate log file
		$sql = "INSERT INTO logs(pf_number,code,logdate,ip_address, remarks) VALUES ('$staff_id','$code','$logdate','$ip','Duplicate')";
		$sql = mysqli_query($con,$sql);
		
		 echo "<script>
            setTimeout(function() {
               window.location = '../';
            },1500);
         </script>";   

	} else {
		# Populate log file...
		$sql = "INSERT INTO nominations (PF_Number,Nomination_Code,Team_of_the_Year_Award,	Employee_of_the_year_Award,date_created,ip_address) VALUES ('$staff_id','$code','$department','$employee','$logdate','$ip')";
		$sql = mysqli_query($con,$sql);

		if (!$sql) {
			// code...
			echo "Error".mysqli_error($con);
		}

		echo "<h2 style='text-align:center;margin-top:20%;color:green;font-family:Century Gothic'>Succesfully voted... </h2>";
		
		// echo "<script>
      //       setTimeout(function() {
      //          window.location = '../';
      //       },1500);
      //    </script>";  

       // SMS Sent to member using Hosting Pinnacle API
      $curl = curl_init();
      curl_setopt_array($curl, array(
      CURLOPT_URL => "https://smsportal.hostpinnacle.co.ke/SMSApi/send",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "userid=sabatiaeye&password=dC95pyTe&mobile=254791323200&msg=Hi Douglas, thank you submitting your nomination for the 2023 SEH Staff Recognition and Awards using nomination code $code\n\nSabatia Eye Hospital\n\n&senderid=SABATIA_EYE&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
      CURLOPT_HTTPHEADER => array(
             "apikey: 3bf793fcc682e65525ca56ac018d0a9fe9304713",
             "cache-control: no-cache",
             "content-type: application/x-www-form-urlencoded"
           ),
         ));

         $response = curl_exec($curl);
         $err = curl_error($curl);

         curl_close($curl);      		

	}

	return mysqli_close($con);
	//Destroy session variables
	session_destroy();
	

} else {
	# If post fails...
	echo "Submission error occured";
}


?>