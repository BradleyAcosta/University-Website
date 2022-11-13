<?php

require 'database/server.php';
include('allcode.php');
include('authentication.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel="stylesheet" href="CSS/Table.css">

    <title>Admin dashboard</title>
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
<?php    include('message.php'); ?>

  <h2> Students Information</h2>


  <div class="card-header">
<h4>Registered User
 <a href="register-add.php" class="btn-success">Add Admin</a>
 </h4>
 </div>
  <table id="myDataTable" class="Table-class">
  <thead>
  <tr>
 <th>ID</th>
  <th>First Name</th>
  <th>Username</th>
  <th>Email</th>
  <th>UserType</th>
  <th>Phone Number</th>
  <th>Edit</th>
  <th>Delete</th>
 </tr>
</thead>
<tbody>
 <?php // Get Student information from database
 $query = "SELECT * FROM registration";
 $query_run = mysqli_query($conn, $query);

 if(mysqli_num_rows($query_run) > 0)
  {
  foreach($query_run as $row)
  {
  ?>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['name']; ?></td>
   <td><?= $row['username']; ?></td>
   <td><?= $row['email']; ?></td>
     <td>
   <?php
  if($row['Check'] == '1'){
  echo 'Admin';
 }elseif($row['Check'] == '0'){
  echo 'User';
 }
?>
 <td><?= $row['phoneNumber']; ?></td>
</td>
                                    
<td>
<a href="register-edit.php?id=<?=$row['id'];?>" class="btn-success">Edit</a>
</td>

 <td>
  <form action ="codeUpdate.php" method="POST">  
    
  <button type="submit" name = "user_delete" value= "<?= $row['id']; ?>" class = "btn-delete">Delete</button>
  </td>
</form>
  </tr>
  <?php
      }
     }
   else
   {
   ?>
  <tr>
  <td colspan="6">No Record Found</td>
  </tr>
   <?php
   }
  ?>
                          
 </tbody>
 </table>
</div>
</div>
</div>
</div>
</div>
</div>
  </body>
</html>