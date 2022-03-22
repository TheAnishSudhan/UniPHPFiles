<!DOCTYPE html>
<html>

<head>
    <title>Insert Page </title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password =>
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "College");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. ". mysqli_connect_error());
        }

        // Taking all 6 values from the form data(input)
        $sr_no = $_REQUEST['sr_no'];
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $gender =  $_REQUEST['gender'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];

        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO Registration VALUES('$sr_no','$first_name','$last_name','$gender','$address','$email')";

        if(mysqli_query($conn, $sql)){
            echo "data stored in a database successfully.";

            echo nl2br("\n$sr_no\n $first_name\n $last_name\n "
                . "$gender\n $address\n $email");
        } else{
            echo "ERROR". mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
