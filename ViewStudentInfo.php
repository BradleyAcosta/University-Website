<?php

require 'database/server.php';
include('allcode.php');
include('authentication.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Chat.css">
    <title>User dashboard</title>
  </head>
  <body>

   <nav>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="enrollment.php">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "#">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="StudentAD.php">Student</a></li>

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
  <h1> Students Information</h1>



   </div>

  </body>
</html>