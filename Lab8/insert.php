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

        $ROLL_NO = $_REQUEST['ROLL_NO'];
        $NAME =  $_REQUEST['NAME'];
        $MOBILE_NUMBER = $_REQUEST['MOBILE_NUMBER'];
        $MARKS1 =  $_REQUEST['MARKS1'];
        $MARKS2 =  $_REQUEST['MARKS2'];
        $MARKS3 =  $_REQUEST['MARKS3'];
        $PERCENTAGE = $_REQUEST['PERCENTAGE'];

        $sql = "INSERT INTO Cybersecurity VALUES('$ROLL_NO','$NAME','$MOBILE_NUMBER','$MARKS1','$MARKS2','$MARKS3','$PERCENTAGE')";

        if(mysqli_query($conn, $sql)){
            echo "data stored in a database successfully.";

        } else{
            echo "ERROR". mysqli_error($conn);
        }

        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
