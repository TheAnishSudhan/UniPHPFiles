<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NMIMS_MPSTME";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}

$sql2 = "CREATE TABLE Cybersecurity (ROLL_NO INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									NAME VARCHAR(255),
									MOBILE_NUMBER VARCHAR(255),
									MARKS1 VARCHAR(255),
									MARKS2 VARCHAR(255),
									MARKS3 VARCHAR(255),
									PERCENTAGE VARCHAR(255)
									)";

if(mysqli_query($conn, $sql2))
{
	echo "Table created successfully";
}
else
{
	echo "Error creating Table: ".mysqli_error($conn);
}


mysqli_close($conn);

?>
