<?php
//Fetch department list
function department()
{
	// code...
	include 'connect.php';
	$sql = "SELECT id,section FROM sections ORDER BY section";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$id = $value['id'];
		$section = $value['section'];

		echo '<option value="'.$id.'">'.$section.'</option>';

	}

	return mysqli_close($con);
}

//Fetch staff list
function staff()
{
	// code...
	include 'connect.php';
	$sql = "SELECT pf_number,staff FROM staff ORDER BY staff";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$pf_number = $value['pf_number'];
		$staff = $value['staff'];

		echo '<option value="'.$pf_number.'">'.$staff.'</option>';

	}

	return mysqli_close($con);
}

 ?>