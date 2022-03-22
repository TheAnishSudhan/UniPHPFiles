<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


//check connection
if(!$conn)
{
	die("Connection failed: ".mysqli_connect_error());
}

//create table
$sql2 = "CREATE TABLE Registration (RollNo INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									FirstName VARCHAR(255),
									LastName VARCHAR(255),
									Course VARCHAR(255),
									PhoneNo INT(10)
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
