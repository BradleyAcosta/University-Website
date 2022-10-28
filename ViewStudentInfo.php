<?php

require 'database/server.php';
include('allcode.php');
include('authentication.php');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/index.css">
    <link rel="stylesheet" href="CSS/Table.css">

    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel="stylesheet" href="CSS/Chat.css">
    <title>User dashboard</title>
  </head>
  <body>

   <nav>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="enrollment.php">Enrollment</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "#">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="ViewStudentInfo.php">Student</a></li>

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
  <h1> Students Information</h1>

  
  <table id="myDataTable" class="Table-class">
  <thead>
  <tr>
 <th>ID</th>
  <th>First Name</th>
  <th>Username</th>
  <th>Email</th>
  <th>User Type</th>
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
</td>
                                    
<td>
<a href="register-edit.php?id=<?=$row['id'];?>" class="btn btn-success">Edit</a>
</td>
   <td>
  <?php if($row['Check'] == '1'): ?>
 <button type="button" class="btn btn-danger">No</button>
 <?php else: ?>
 <form action="Admin.php" method="POST">
 <button type="submit" name="user_delete" value="<?=$row['id'];?>" class="btn btn-danger">Delete</button>
  </form>
        <?php endif; ?>
   </td>
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

   </div>

  </body>
</html>