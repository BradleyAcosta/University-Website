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

    <title>Chat</title>
</head>
<body>
<nav>
  <p>  Welcome to chat </p>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "Chat.php">Chat</a></li>
      <li><a href = "#">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="#">Programs</a></li>

    <a class= "Logout" href="logout.php">Logout</a>
    </ul>
   </nav>


   <div class="container">
    <header> 
      
    <h1>Hello <?php echo $row["name"]; ?> </h1>
     <h3>Welcome to chat! Were you can communicate with us.</h3>
    
    

     
    
    
    
    
    </header>
 </div>
    
</body>
</html>