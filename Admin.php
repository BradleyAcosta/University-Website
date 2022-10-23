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
    <link rel="stylesheet" href="CSS/Admin.css">

    

    <title>Admin dashboard</title>
  </head>
  <body>

   <nav>
    <ul>
    <li><a href ="Admin.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "AdminChat.php">Chat</a></li>
      <li><a href = "Calendar.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="StudentAD.php">Student</a></li>
   

    <li>
    <form action = "allcode.php" method="POST">
    <button type = "submit" name = "logout_btn">Logout</button>
    </form>
    </li>

    </ul>
   </nav>

   <div class="container">
   <p><?php include('message.php'); //Display any error on succeed Message?></p>
   


  </body>
</html>