<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}

$sql = "CREATE DATABASE NMIMS_MPSTME";
if(mysqli_query($conn, $sql))
{
	echo "Database created successfully";
}
else
{
	echo "Error creating Database: ".mysqli_error($conn);
}

mysqli_close($conn);

?>
