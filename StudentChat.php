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
    <link rel="stylesheet" href="CSS/Chat.css">
    <link rel="src/stylesheet" href="CSS/Table.css">
    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  



    <title>Chat/Send Message</title>
</head>
<body>
<nav>
    <ul>
    <li><a href ="index.php">Home</a></li>
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


   <div class="container">
    <header> 
      
     <h1>Welcome to public chat! </h1>
<br>

  <div id ="main">
  <h2>Send Message:</h2><br>
    
  <div class = "input-group mb-3">
    <input type="text" placeholder="Search..." class="form-control" > 
    <button class = "btn btn-primary"><i class= "fa fa-search"></i></button>
    



  </div>


  </form>
  


    </h3>

  </div>

  
   </header>
  
</form>
</div>
</body>
</html>
