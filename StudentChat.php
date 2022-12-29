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
      
     <h1>Welcome to public chat!</h1> 
<br>
  <div id ="main">
  <h2>Send Message to:</h2><br>

  <h3 style="background-color:rgb(78, 78, 240); color: white;"> 
 
  <div class = "output">
    <?php
  $sql = "Select * from posts";
  $result = $conn->query($sql);
  if($result-> num_rows > 0) {
    //output of the data
    while($row = $result->fetch_assoc()) {
      echo "".$row["name"]. " "."::".$row["msg"]."-- ".$row["date"]."<br>";
      echo "<br>";
  }
}
else {
  echo "No messages found yet!!";
}

$conn->close();
    ?>
    </h3>
  </div>
  <form method="post" action="codeUpdate.php">
<textarea name="msg" placeholder="Type your message here..." class = "form-control"></textarea><br>
<button type="submit" name="stu_msg">Send!</button>
  </form><br>

  </div>

  
   </header>
  
</form>
</div>
    
</body>
</html>