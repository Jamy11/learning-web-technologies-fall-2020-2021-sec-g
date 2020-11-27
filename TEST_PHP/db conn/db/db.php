<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

function getConnection()
{
	global $servername;
	global $username;
	global $password;
	global $dbname;

	$conn = mysqli_connect($servername,$username,$password,$dbname);

	if ($conn->connect_error) 
	{
		die("Connection failed: " . $conn->connect_error);
	}
	return $conn;
}

?>