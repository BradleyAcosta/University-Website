<?php
$email = $_POST['email'];
$username = $_POST['username'];
$phonenumber = $_POST['phonenumber'];
$password = $_POST['password'];
$confirmPassword = $_POST['passwordConfirm'];

// database connection
$conn = mysqli_connect('localhost', 'root','', 'student_user' );
if($conn->connect_error) {

    die( 'Error connecting to: '.$conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(email, username, phonenumber, password,passwordConfirm)
    value(?,?,?,?,?)");
    $stmt->bind_param("sssssi", $email, $username, $phonenumber, $password, $passwordConfirm);
    $stmt->execute();

    echo "registration Succesfully...";
    $stmt->close();
    $con->close();
}
?> 