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
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/Table.css">

    <link rel="stylesheet" href="CSS/Admin.css">
	<title>Promotion/News</title>
</head>
<body>
<nav>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="enrollment.php">Enrollment</a>

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
          <h2>University Promotions/News :</h2>
       
          <br>
          <br>

        <?php 
        //ADDED DATA BASE IMAGE FROM ADMIN TO STUDENT
    
       
        $query = " select * from image ";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <img src="./image/<?php echo $data['image_url']; ?>">
 
    <?php
        }
    ?>
    <tr>
    <td colspan="6">No Record Found</td>
    </tr>

   </div>  
</body>
</html>
      
     