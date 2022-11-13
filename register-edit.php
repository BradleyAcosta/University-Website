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
  <h1> Students Information</h1>


  <div class="Table-class">
  <h4>Edit User
     <a href="StudentAD.php" class = "btn-delete">BACK</a>
     </h4>
     <br>
     <br>
   

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
           <br>
       <input type="text" name="name" value="<?=$user['name'];?>" class="form-control">
<br>
    <label for="">Username</label>
    <br>
     <input type="text" name="username" value="<?=$user['username'];?>" class="form-control">
<br>
   
      <label for="">Email Address</label>
      <br>
      <input type="text" name="email" value="<?=$user['email'];?>" class="form-control">
  <br>
         <label for="">Password</label>
         <br>
         <input type="text" name="password" value="<?=$user['password'];?>" class="form-control">
<br>
  
         <?php if($user['Check'] != '2'): ?>
         <label for="">Role as</label>
         <br>
         <select name="Check" required class="form-control">
          <option value="">--Select Role--</option>
          <option value="1" <?= $user['Check'] == '1' ? 'selected':'' ?> >Admin</option>
         <option value="0" <?= $user['Check'] == '0' ? 'selected':'' ?> >User</option>
         </select>
       <?php endif; ?>
<br>
       <label for="">Phone Number</label>
         <br>
         <input type="text" name="phoneNumber" value="<?=$user['phoneNumber'];?>" class="form-control">
<br>  
                       
 
    <div class = "field-button">
    <button type="submit" name="update_user">Update User</button>
    </div>

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
