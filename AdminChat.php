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
    <li><a href ="Admin.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "AdminChat.php">Chat</a></li>
      <li><a href = "Calendar.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="#">Student</a></li>

    <a class= "Logout" href="logout.php">Logout</a>
    </ul>
   </nav>

<div class="container">

<header> Hello Welcome to Chat </header>

<form method="post" action="">

      Send user a message: <input type="textarea" name = "input"/>

      <input type = "submit" value="Send"/> <br /> <br />

      </form>
</div>


    
</body>
</html>