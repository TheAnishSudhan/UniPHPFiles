<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "College";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


//check connection
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}

//create table
$sql2 = "CREATE TABLE Registration (sr_no INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									first_name VARCHAR(255),
									last_name VARCHAR(255),
									gender VARCHAR(255),
									address VARCHAR(255),
									email VARCHAR(255)
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
