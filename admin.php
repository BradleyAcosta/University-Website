<?php
require 'server.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM registration WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Site</title>
</head>
<body>
<nav>
    <ul>
    <li><a href ="admin.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "AdminOrProfessor Chat.php">Chat</a></li>
      <li><a href = "#">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="#">Programs</a></li>

    <a class= "Logout" href="logout.php">Logout</a>
    </ul>
   </nav>



</body>
</html>