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
    <link rel="stylesheet" href="CSS/Chat.css">
    <link rel="stylesheet" href="CSS/Admin.css">

    <title>Admin dashboard</title>
  </head>
  <body>

   <nav>
    <ul>
    <li><a href ="Admin.php">Home</a></li>
    <li><a href ="enrollment.php">Enrollment</a>

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
  <h1> Students Information</h1>


  <div class="card-header">
  <h4>Edit User
     <a href="StudentAD.php" class="btn btn-danger float-end">BACK</a>
     </h4>
    </div>
    <div class="card-body">

    <?php
   if(isset($_GET['id']))
     {
      $user_id = $_GET['id'];
      $users = "SELECT * FROM registration WHERE id='$user_id' ";
      $users_run = mysqli_query($conn, $users);

   if(mysqli_num_rows($users_run) > 0)
       {
        foreach($users_run as $user)
       {
     ?>

     <form action="codeUpdate.php" method="POST">
        <input type="hidden" name="user_id" value="<?=$user['id'];?>">
  <input type="hidden" name="old_password" value="<?=$user['password'];?>">

      
           <label for="">First Name</label>
       <input type="text" name="name" value="<?=$user['name'];?>" class="form-control">

    <label for="">Username</label>
     <input type="text" name="username" value="<?=$user['username'];?>" class="form-control">

   
      <label for="">Email Address</label>
      <input type="text" name="email" value="<?=$user['email'];?>" class="form-control">
  
         <label for="">Password</label>
         <input type="text" name="password" value="<?=$user['password'];?>" class="form-control">

  
         <?php if($user['Check'] != '2'): ?>
         <label for="">Role as</label>
         <select name="Check" required class="form-control">
          <option value="">--Select Role--</option>
          <option value="1" <?= $user['Check'] == '1' ? 'selected':'' ?> >Admin</option>
         <option value="0" <?= $user['Check'] == '0' ? 'selected':'' ?> >User</option>
         </select>
       <?php endif; ?>
                       
    
    <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
  
  
     </form>
                            
    <?php
      }
   }
   else
   {
    ?>
  <h4>No Record Found</h4>
  <?php
  }
 }
   ?>
                
      </div>
    </div>
   </div>
  </div>
</div>
