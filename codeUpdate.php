<?php
require 'database/server.php';
include('allcode.php');
include('authentication.php');

//Delete Images From Admin
if(isset($_POST['Image_delete']))
{
  $user_id = $_POST['Image_delete'];

  $query = "DELETE FROM images WHERE id = '$user_id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run) 
  {
    $_SESSION['message'] = "Admin/user Deleted Successfully";
    header("Location: PromotionS.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : PromotionS.php");
   exit(0);

}
}

//Delete User From Admin
if(isset($_POST['user_delete']))
{
  $user_id = $_POST['user_delete'];

  $query = "DELETE FROM registration WHERE id = '$user_id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run) 
  {
    $_SESSION['message'] = "Admin/user Deleted Successfully";
    header("Location: StudentAD.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : StudentAD.php");
   exit(0);

}
}


//Submit Enrollment
if(isset($_POST['add_enrollment'])) {

  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $Address = $_POST['address'];
  $Age = $_POST['Age'];
  $Sex = $_POST['Sex'];
  $Academic_Program = $_POST['academicProgram'];
  $Home_Phone = $_POST['homePhone'];
  $Past_School = $_POST['pastSchool'];
  
  $query = 'INSERT INTO `enrollment_info` (`firstName`, `lastName`, `address`, `Age`, `Sex`, `academicProgram`, `homePhone`, `pastSchool`) VALUES ("'.$firstName.'", "'.$lastName.'", "'.$Address.'", "'.$Age.'", "'.$Sex.'", "'.$Academic_Program.'","'.$Home_Phone.'","'.$Past_School.'")';
  $query_run = mysqli_query($conn, $query);
  if($query_run) 
  
  {
    $_SESSION['message'] = "Enrollment completed!!";
    header("Location: enrollment.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : enrollment.php");
   exit(0);

}
}
//Delete Enrollment Student
if(isset($_POST['user_deleted']))
{
  $user_id = $_POST['user_deleted'];

  $query = "DELETE FROM enrollment_info WHERE id = '$user_id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run) 
  {
    $_SESSION['message'] = "Student Enrollment Deleted Successfully";
    header("Location: Admin.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : Admin.php");
   exit(0);

}
}

//Add an ADMIN/USER From Admin
if(isset($_POST['add_user'])) {
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $user_name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role_as = $_POST['Check'];
  $phoneNumber = $_POST['phoneNumber'];

  $query = "INSERT INTO registration (name, username, email, password, `Check`, phoneNumber) VALUES ('$name', '$user_name', '$email','$password','$role_as', '$phoneNumber')";
  $query_run = mysqli_query($conn, $query);

  if($query_run) 
  {
    $_SESSION['message'] = "Admin/user Added Successfully";
    header("Location: StudentAD.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : StudentAD.php");
   exit(0);

}
}

//EDIT THE USER INFO FROM ADMIN
if(isset($_POST['update_user']))
{
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $user_name = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role_as = $_POST['Check'];
  $phoneNumber = $_POST['phoneNumber'];




  $query = "UPDATE registration SET name = '$name', username = '$user_name', email = '$email', password = '$password', `Check` ='$role_as', phoneNumber = '$phoneNumber'
  WHERE id ='$user_id' ";

  $query_run = mysqli_query($conn, $query);

  if($query_run) {
    $_SESSION['message'] = "Update Successfully";
    header("Location: StudentAD.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : StudentAD.php");
   exit(0);
}

}


?>