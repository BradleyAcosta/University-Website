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
       <input type="text" name="firstName"   class="form-control">
<br>
    <label for="">Last Name</label>
    <br>
     <input type="text" name="lastName"  class="form-control">
<br>
   
      <label for="">Address</label>
      <br>
      <input type="text" name="Address"  class="form-control">

   <br>
         <label for="">Age</label>
         <br>
         <input type="number" name="Age"  class="form-control">
<br>
  
 <label for="">Sex</label>

    <br>
    <br>
    
  <select class = "Sex" name = "Sex">
    <option value = ""> --Select--</option>
    <option value = "Male"> Male</option>
    <option value = "Female"> Female</option>
  </select>
        
  <br>
  <br>

         <br>
       <label for="">Academic Program</label>
         <br>
         <input type="text" name="academicProgram"    class="form-control">
<br>  
 
<label for="">Home Phone</label>
      <br>
      <input type="text" name="homePhone"  class="form-control">

      <br>

      <label for="">Past School</label>
      <br>
      <input type="text" name="pastSchool"   class="form-control"> 
                       
 
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