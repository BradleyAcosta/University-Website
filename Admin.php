<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Admin.css">
    <title>Index</title>
  </head>
  <body>

   <nav>
  <p>  Welcome <?php echo $row["name"]; ?></p>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "#">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="#">Programs</a></li>
   

    <a class= "Logout" href="logout.php">Logout</a>
    </ul>
   </nav>





    

  </body>
</html>