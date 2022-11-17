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
      <input type="text" name="address"  class="form-control">

   <br>
         <label for="">Date of Birth</label>
         <br>
         <input type="date" name="Age"  class="form-control">
<br>
  
 <label for="">Gender</label>
 <br>
 <br>
 <input type = "radio" name = "Sex" value = "Male"/>Male
 <input type = "radio" name = "Sex" value = "Female"/>Female

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