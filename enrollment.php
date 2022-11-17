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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/Table.css">

    <link rel="stylesheet" href="CSS/Admin.css">
	<title>Enrollment</title>
</head>
<body>
<nav>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="enrollment.php">Enrollment</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "CalendarStudent.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="ViewStudentInfo.php">Contacts</a></li>
	<li><a href ="Promotion.php">Uploads</a></li>
   

    <li>
    <div class = "field button">
    <form action = "allcode.php" method="POST">
    <button type = "submit" name = "logout_btn">Logout</button>
   </div>
    </form>
    </li>
 </ul>
   </nav>
   <!-- ENROLLMENT STILL NEED A WORK. Not DONE YET!! -->
   <div class = "container">
   <p><?php include('message.php'); //Display any error on succeed Message?></p>
   <div class="card-header">
<h4>Enrollment 
 <a href="enrollment-edit.php" class="btn-success">Enrollment Form</a>
 </h4>
 </div>
		</div>

</body>
</html>