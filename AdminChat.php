<?php
require 'database/server.php';
include('allcode.php');
include('authentication.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="src/stylesheet" href="CSS/Table.css">
    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel="src/stylesheet" href="CSS//Chat.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <title>Chat</title>
</head>
<body>
<nav>

    <ul>
    <li><a href ="Admin.php">Home</a></li>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "AdminChat.php">Chat</a></li>
      <li><a href = "Calendar.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="StudentAD.php">Student</a></li>
    <li><a href ="PromotionS.php">Uploads</a></li>

    <li>
    <div class = "field button">
    <form action = "allcode.php" method="POST">
    <button type = "submit" name = "logout_btn">Logout</button>
   </div>
    </form>
    </li>

    </ul>
   </nav>

<div class="container">
    <header> 
      
    <h1>Hello   </h1>
     <h3>Welcome to chat! </h3>
<br>
<br>

    <p>Send Message to:</p>
  <tr>
  <form action="codeUpdate.php" method="POST">
  <td><?php 
   $msgs = mysqli_query($conn, "SELECT * FROM registration") or die("Failed to query database");
   while($msg = mysqli_fetch_assoc($msgs)) {
     echo '<li><a href ="?toUser='.$msg["id"].'">'.$msg["name"].'</a></li>';
   
   }
  ?>

   </header>
  
</form>
</div>
</body>
</html>
