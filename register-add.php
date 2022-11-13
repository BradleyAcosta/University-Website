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

<div class="container">
  <h1> Students Information</h1>


  <div class="Table-class">
  <h4>Add User/Admin
     <a href="StudentAD.php" class = "btn-delete">BACK</a>
     </h4>

     <form action="codeUpdate.php" method="POST">

      
           <label for="">First Name</label>
           <br>
       <input type="text" name="name"  class="form-control">
<br>
    <label for="">Username</label>
    <br>
     <input type="text" name="username" class="form-control">
<br>
   
      <label for="">Email Address</label>
      <br>
      <input type="text" name="email"  class="form-control">
  <br>
         <label for="">Password</label>
         <br>
         <input type="text" name="password"  class="form-control">
<br>
  
         <label for="">Role as</label>
         <br>
         <select name="Check" required class="form-control">
          <option value ="">--Select Role--</option>
          <option value ="1">Admin</option>
         <option value ="0">User</option>
         </select>

         <br>
       <label for="">Phone Number</label>
         <br>
         <input type="text" name="phoneNumber"  class="form-control">
<br>  
 
                       
 
    <div class = "field-button">
    <button type="submit" name="add_user">Add User/Admin</button>
    </div>

     </form>
     <br>
     <br>
     </div>
    </div>
   </div>
  </div>
</div>
