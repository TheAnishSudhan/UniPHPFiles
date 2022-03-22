<!DOCTYPE html>
<html>

<head>
    <title>Insert Page </title>
</head>

<body>
    <center>
        <?php

        $conn = mysqli_connect("localhost", "root", "", "NMIMS_MPSTME");

        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

        $conditon = $_REQUEST['condition'];

        $sql = "SELECT ROLL_NO, NAME, MOBILE_NUMBER FROM Cybersecurity WHERE ROLL_NO=$conditon";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            echo "roll No: " . $row["ROLL_NO"]. " - Name: " . $row["NAME"]. " - Mobile: " . $row["MOBILE_NUMBER"]. "<br>";
          }
        } else {
          echo "0 results";
        }

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
