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
    <link rel="stylesheet" href="Chat.css">
    <link rel="stylesheet" href="index.css">

    <title>Chat/Send Message</title>
</head>
<body>
<nav>
  <p>  Welcome to chat </p>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "CalendarA.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="#">Student</a></li>

    <a class= "Logout" href="logout.php">Logout</a>
    </ul>
   </nav>


   <div class="container">
    <header> 
      
    <h1>Hello <?php echo $row["name"]; ?> </h1>
     <h3>Welcome to chat! Were you can communicate with us.</h3>
    
    
      <form method="post" action="">

      Send user a message: <input type="textarea" name = "input"/>

      <input type = "submit" value="Send"/> <br /> <br />

      </form>


<!-- Add later on -->

 <!--<iframe src="ChatServerS.php" width= "450" height = "200" scrolling= "yes" >

   </iframe> -->
    
    
    
    </header>
 </div>
    
</body>
</html>