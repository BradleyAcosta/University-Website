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
	<link rel="stylesheet" href="CSS/Table.css">
    <link rel="stylesheet" href="CSS/Admin.css">
	<title>Uploads</title>
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
    <h2> Add Images or videos for further Updates for the University</h2>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="upload-form.php">

    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> -->
    <label for="image">Image file</label>
    <input type="file" id="image" name="image">

    <label for="file2">Another file</label>
    <input type="file" name="file2" id="file2">

    <button>Upload</button>

</form>
        </div>

</body>
</html>
   
