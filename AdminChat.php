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
    <link rel="src/stylesheet" href="CSS/Chat.css">
    <link rel="src/stylesheet" href="CSS/Table.css">

    <link rel="stylesheet" href="CSS/Admin.css">
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
    <ul>
  <?php

  $msgs = mysqli_query($conn, "SELECT * FROM registration") or die("Failed to query database");
  while($msg = mysqli_fetch_assoc($msgs)) {
    echo '<li><a href ="?toUser='.$msg["id"].'">'.$msg["name"].'</a></li>';
  }
  ?>
    </ul>
<h3><?php
if(isset($_GET["toUser"]))
{
  $userName = mysqli_query($conn, "SELECT * FROM registration WHERE id = '".$_GET["toUser"]."'") 
  or die("Failed to query database");
 $uName = mysqli_fetch_assoc($userName);
    echo '<input type = "text" value ='.$_GET["toUser"].' id = "toUser" hidden/>';
    echo $uName["name"];
} else {
  $userName = mysqli_query($conn, "SELECT * FROM registration") 
  or die("Failed to query database");
 $uName = mysqli_fetch_assoc($userName);
 $_SESSION["toUser"] = $uName["id"];
    echo '<input type = "text" value ='.$_SESSION["toUser"].' id = "toUser" hidden/>';
    echo $uName["name"];
}

?>
</h3>
<div class="modal-body" id = "msgBody" style = "height: 400px; overflow-y: scroll; overflow-x: hidden;">
<?php
 if(isset($_GET["toUser"]))
 {
  $chats = mysqli_query($conn, "SELECT * FROM chat1 WHERE (FromUser = '".$_SESSION["id"]."' AND 
  ToUser = '".$_GET["toUser"]."') OR (FromUser = '".$_GET["toUser"]."' AND ToUser = '".$_SESSION["id"]."')") 
  or die("Failed to query database");

 } else { 

  $chats = mysqli_query($conn, "SELECT * FROM chat1 WHERE (FromUser = '".$_SESSION["id"]."' AND 
  ToUser = '".$_SESSION["toUser"]."') OR (FromUser = '".$_SESSION["toUser"]."' AND ToUser = '".$_SESSION["id"]."')") 
  or die("Failed to query database");

while($chat = mysqli_fetch_assoc($chats)) {

  if($chat["FromUser"] == $_SESSION["id"]) {
    echo "<div style = 'text-align: right;'>
    <p style = 'background-color: lightblue; word-wrap:break-word; display:inline-block;
    padding: 5px; border-radius:10px; max width: 70%;'>
    ".$chat["Message"]."
    </p>
    </div>";
  } else {
    echo "<div style = 'text-align: left;'>
    <p style = 'background-color: yellow; word-wrap:break-word; display:inline-block;
    padding: 5px; border-radius:10px; max width: 70%;'>
    ".$chat["Message"]."
    </p>
    </div>";
  }
 


}

}
 
?>
</div>
     
    </header>
</body>
</html>