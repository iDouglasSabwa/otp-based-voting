<?php
//Fetch Presidential candidates list
function president()
{
	// code...
	include 'connect.php';
	$sql = "SELECT voters.voter_name AS candidate,voters.id_number AS id_number, political_parties.party_name AS party_name FROM voters
	INNER JOIN candidates ON voters.id_number = candidates.candidate 
	INNER JOIN political_parties ON political_parties.party_id = candidates.political_party
	WHERE candidates.political_seat = '1'
	ORDER BY candidate";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$id_number = $value['id_number'];
		$candidate = $value['candidate'];
		$party_name = $value['party_name'];

		echo '<option value="'.$id_number.'">'.$candidate.' | '.$party_name.'</option>';

	}

	return mysqli_close($con);
}

//Fetch Governor candidates list
function governor()
{
	// code...
	include 'connect.php';
	$sql = "SELECT voters.voter_name AS candidate,voters.id_number AS id_number, political_parties.party_name AS party_name FROM voters
	INNER JOIN candidates ON voters.id_number = candidates.candidate 
	INNER JOIN political_parties ON political_parties.party_id = candidates.political_party
	WHERE candidates.political_seat = '2'
	ORDER BY candidate";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$id_number = $value['id_number'];
		$candidate = $value['candidate'];
		$party_name = $value['party_name'];

		echo '<option value="'.$id_number.'">'.$candidate.' | '.$party_name.'</option>';

	}

	return mysqli_close($con);
}

//Fetch Senatorial candidates list
function senator()
{
	// code...
	include 'connect.php';
	$sql = "SELECT voters.voter_name AS candidate,voters.id_number AS id_number, political_parties.party_name AS party_name FROM voters
	INNER JOIN candidates ON voters.id_number = candidates.candidate 
	INNER JOIN political_parties ON political_parties.party_id = candidates.political_party
	WHERE candidates.political_seat = '3'
	ORDER BY candidate";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$id_number = $value['id_number'];
		$candidate = $value['candidate'];
		$party_name = $value['party_name'];

		echo '<option value="'.$id_number.'">'.$candidate.' | '.$party_name.'</option>';

	}

	return mysqli_close($con);
}

//Fetch MP candidates list
function MP()
{
	// code...
	include 'connect.php';
	$sql = "SELECT voters.voter_name AS candidate,voters.id_number AS id_number, political_parties.party_name AS party_name FROM voters
	INNER JOIN candidates ON voters.id_number = candidates.candidate 
	INNER JOIN political_parties ON political_parties.party_id = candidates.political_party
	WHERE candidates.political_seat = '4'
	ORDER BY candidate";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$id_number = $value['id_number'];
		$candidate = $value['candidate'];
		$party_name = $value['party_name'];

		echo '<option value="'.$id_number.'">'.$candidate.' | '.$party_name.'</option>';

	}

	return mysqli_close($con);
}

//Fetch MCA candidates list
function mca()
{
	// code...
	include 'connect.php';
	$sql = "SELECT voters.voter_name AS candidate,voters.id_number AS id_number, political_parties.party_name AS party_name FROM voters
	INNER JOIN candidates ON voters.id_number = candidates.candidate 
	INNER JOIN political_parties ON political_parties.party_id = candidates.political_party
	WHERE candidates.political_seat = '5'
	ORDER BY candidate";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$id_number = $value['id_number'];
		$candidate = $value['candidate'];
		$party_name = $value['party_name'];

		echo '<option value="'.$id_number.'">'.$candidate.' | '.$party_name.'</option>';

	}

	return mysqli_close($con);
}

//Fetch Women Rep candidates list
function womenrep()
{
	// code...
	include 'connect.php';
	$sql = "SELECT voters.voter_name AS candidate,voters.id_number AS id_number, political_parties.party_name AS party_name FROM voters
	INNER JOIN candidates ON voters.id_number = candidates.candidate 
	INNER JOIN political_parties ON political_parties.party_id = candidates.political_party
	WHERE candidates.political_seat = '6'
	ORDER BY candidate";
	$sql = mysqli_query($con,$sql);

	foreach ($sql as $key => $value) {
		// code...
		$id_number = $value['id_number'];
		$candidate = $value['candidate'];
		$party_name = $value['party_name'];

		echo '<option value="'.$id_number.'">'.$candidate.' | '.$party_name.'</option>';

	}

	return mysqli_close($con);
}



 ?>