<html>
    <body>
<?php

$conn = mysqli_connect("localhost", "root", "", "simple_chat");


if ($conn->connect_error) {
    die("Error connecting to server: " . $conn->error);
}

$sql = "SELECT 'Message' FROM chat1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    //this output the data from each row as it is inserted into the database
    while ( $row = $result->fetch_assoc()) {

        echo "".$row["Message"]. "<br><br>";
    }
    } else {
        echo "no message have been exchanged yet";

    }
$conn -> close();
?>
    </body>
</html>