<?php

$servername="localhost";
$username="root";
$password="";
$dbname="sample2";

//create connection
$conn=mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
//create table
$query1="CREATE TABLE Registration (
  RollNo INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  FirstName VARCHAR(255),
  LastName VARCHAR(255),
  Course VARCHAR(255),
  PhoneNo INT(10)
)";

if (mysqli_query($conn,$query1)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: ".mysqli_error($conn);
}

mysqli_close($conn);

?>
