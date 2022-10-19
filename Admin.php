<?php
require 'database/server.php';

include('authentication.php');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title>Admin dashboard</title>
  </head>
  <body>

   <nav>
  <p>  <?php include('message.php'); ?></p>
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
   
    <a class= "Logout" name = "logout_btn" href="logout.php">Logout</a>

    </ul>
   </nav>

  </body>
</html>