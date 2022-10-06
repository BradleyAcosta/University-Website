<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "simple_chat";
$input = $_POST['Input'];


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error connecting to server: " . $conn->error);
}

$sql = "UPDATE 'chat1  SET 'Message' = '$input' WHERE 'ID' = '1'";

if ($conn->query($sql) == TRUE) {

    header("Location: ChatServerS.php"); //  && header("Location: ChatServerA.php");

} else {

    echo "Error: " . $sql . "<br>" .$conn->error;
}

$conn->close();

?>