<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Chat.css">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Admin.css">


    <title>Chat</title>
</head>
<body>
<nav>
  <p>  Welcome to chat </p>
    <ul>
    <li><a href ="Admin.php">Home</a></li>
    <li><a href ="#">Enrollment</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "AdminChat.php">Chat</a></li>
      <li><a href = "Calendar.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="StudentAD.php">Student</a></li>

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
     <h3>Welcome to chat! Were you can communicate with us.</h3>
    
    
      <form method="post" action="">

      Send user a message: <input type="textarea" name = "input"/>

      <input type = "submit" value="Send"/> <br /> <br />




      <iframe src="ChatServerS.php" width= "450" height = "200" scrolling= "yes" >

</iframe> 

      </form>
    </header>


    
</body>
</html>