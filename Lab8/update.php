<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NMIMS_MPSTME";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE Cybersecurity SET MARKS1='99' WHERE ROLL_NO=41";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
