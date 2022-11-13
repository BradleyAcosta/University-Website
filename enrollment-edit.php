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
    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel="stylesheet" href="CSS/Table.css">

    <title>User dashboard</title>
  </head>
  <body>

  
<div class="container">
<div class="Table-class">
  <h4> Enrollment Information
  <a href="enrollment.php" class = "btn-delete">BACK</a>
  </h4>


     <form action="codeUpdate.php" method="POST">

    
           <label for="">First Name</label>
           <br>
       <input type="text" name="firstName" value="<?=$user['firstName'];?>"  class="form-control">
<br>
    <label for="">Last Name</label>
    <br>
     <input type="text" name="lastName" value="<?=$user['lastName'];?>" class="form-control">
<br>
   
      <label for="">Address</label>
      <br>
      <input type="text" name="Address" value="<?=$user['Address'];?>" class="form-control">
  <br>
         <label for="">Age</label>
         <br>
         <input type="number" name="Age" value="<?=$user['Age'];?>" class="form-control">
<br>
  
<label for="">Sex</label>

    <br>
    <br>
    
  <select class = "Sex" name = "Sex" required value = "">
    <option value = ""> --Select--</option>
    <option value = "Male" <?= $user['Sex'] == 'Male' ? 'selected':'' ?> > Male</option>
    <option value = "Female"<?= $user['Sex'] == 'Female' ? 'selected':'' ?> > Female</option>
  </select>
        
  <br>
  <br>

         <br>
       <label for="">Academic Program</label>
         <br>
         <input type="text" name="academicProgram"  value="<?=$user['academicProgram'];?>"  class="form-control">
<br>  
 
<label for="">Home Phone</label>
      <br>
      <input type="text" name="homePhone" value="<?=$user['homePhone'];?>"  class="form-control">

      <br>

      <label for="">Past School</label>
      <br>
      <input type="text" name="pastSchool"  value="<?=$user['past`````'];?>" class="form-control">
                       
 
    <div class = "field-button">
    <button type="submit" name="add_enrollment">Submit!</button>
    </div>

     </form>
     <br>
     <br>
     </div>
    </div>
   </div>
  </div>
</div>