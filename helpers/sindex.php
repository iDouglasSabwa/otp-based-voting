<?php 
 if (!$_POST) exit; 

 $id_number = $_POST['id_number'];

//Sanitize data
function clean($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$id_number = clean($id_number);

date_default_timezone_set("Africa/Nairobi");
$logdate = date('Y-m-d H:i:s');

//Database connection file
include 'connect.php';

if (isset($_POST['submit'])) {
	# Check if voter exists in the db...
	$query = "SELECT phone_no,voter_name FROM voters WHERE id_number ='$id_number'";
	$query = mysqli_query($con,$query);

	if (!$query) {
		// code...
		echo "Error".mysqli_error($con);
	}
	
	//If voter exists
	if (mysqli_num_rows($query)>0) {

		foreach ($query as $key => $value) {
			// Get phone number...
			$phone_number = $value['phone_no'];
			$voter_name = $value['voter_name'];
		
		//Generate OTP code
		$otp_code = mt_rand(1000,9999);

		//Update previous code to expired if any		
		$update = "UPDATE otp_codes SET status = 'Expired' WHERE id_number ='$id_number'";
      $update = mysqli_query($con,$update);

		//Insert newly generated codes into OTP codes table
		$ins = "INSERT INTO otp_codes (id_number,otp,generated_date,status) VALUES ('$id_number','$otp_code','$logdate','Pending')";
		$ins = mysqli_query($con,$ins);	

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
      CURLOPT_POSTFIELDS => "userid=sabatiaeye&password=dC95pyTe&mobile=254791323200&msg=Hi $voter_name, your Multifactor Voting System code is: $otp_code\n\nTumutumu Girls High School\n\n&senderid=SABATIA_EYE&msgType=text&duplicatecheck=true&output=json&sendMethod=quick",
      CURLOPT_HTTPHEADER => array(
             "apikey: 3bf793fcc682e65525ca56ac018d0a9fe9304713",
             "cache-control: no-cache",
             "content-type: application/x-www-form-urlencoded"
           ),
         ));

         $response = curl_exec($curl);
         $err = curl_error($curl);

         curl_close($curl); 

         // Redirect to nomination page
		 echo "<script>
            setTimeout(function() {
               window.location = '../nominate.php';
            },0);
         </script>";       		

	}

		 

	} else {
		# Populate log file...
		

       echo "<h2 style='text-align:center;margin-top:20%;color:red;font-family:Century Gothic'>Invalid voter details </h2>";
       echo "<script>
            setTimeout(function() {
               window.location = '../';
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