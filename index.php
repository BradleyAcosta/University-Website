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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Index</title>
  </head>
  <body>

   <nav>
  <p>  Welcome <?php echo $row["name"]; ?></p>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="#">Contact</a>
    <ul>
      <li><a href = "#">Chat</a></li>
    </ul>
  </li>
    <li><a href ="#">About Us</a></li>
   

    <a href="logout.php">Logout</a>
    </ul>
   </nav>





    

  </body>
</html>