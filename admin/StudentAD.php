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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="Chat.css">
    <title>Admin dashboard</title>
  </head>
  <body>

   <nav>
  <p>  Welcome <?php echo $row["name"]; ?></p>
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
   

    <a class= "Logout" href="logout.php">Logout</a>
    </ul>
   </nav>

   <div class="container">
  <h1> Student Information</h1>

<?php
if(isset($_GET['id'])){

$category_id = $_GET['id'];
$category_edit = "SELECT * FROM registration WHERE id = '$id'";
$category_run = mysqli_query($conn, $category_edit);
}
?>


   </div>

  </body>
</html>