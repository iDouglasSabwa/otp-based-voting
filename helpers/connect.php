<?php

$host='localhost';
$username='root';
$password='';
$db='mf-voting-system';

$con = mysqli_connect($host,$username,$password,$db);

if (!$con) {
	#code
	echo "Database connection failed".mysqli_error();
}

 ;?>