<?php
require 'database/server.php';
include('allcode.php');
include('authentication.php');

//Submit images from Admin to Student
if(isset($_POST['submit_img']))
{
  $filename = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];
  $folder = "./image/" . $filename;

  // Get all the submitted data from the form
  $sql = "INSERT INTO images (filename) VALUES ('$filename')";


  $query_run = mysqli_query($conn, $sql);

  // Now let's move the uploaded image into the folder: image
  if (move_uploaded_file($tempname, $folder)) {
    $_SESSION['message'] = "Image uploaded successfully!";
    header("Location: PromotionS.php");
    exit(0);
  } else {
    $_SESSION['message'] = "HAVE TO ADD AN IMAGE FIRST!!";
    header("Location: PromotionS.php");
   exit(0);
  }
}




//Delete Images From Admin
if(isset($_POST['Image_delete']))
{
  $user_id = $_POST['Image_delete'];

  $query = "DELETE FROM images WHERE id = '$user_id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run) 
  {
    $_SESSION['message'] = "Admin/user Deleted Image Successfully";
    header("Location: PromotionS.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location: PromotionS.php");
   exit(0);

}
}

//Submit videos from Admin to Student
if(isset($_POST['submit_video']))
{
  $videoname = $_FILES["videoName"]["name"];
  $tempAname = $_FILES["videoName"]["tmp_name"];
  $Folder = "./video/" . $videoname;


  // Get all the submitted data from the form
  $sql = "INSERT INTO videos (videoname) VALUES ('$videoname')";


  $query_run = mysqli_query($conn, $sql);

  // Now let's move the uploaded video into the folder: video
  if (move_uploaded_file($tempAname, $Folder)) {
    $_SESSION['message'] = "Video uploaded successfully!";
    header("Location: PromotionS.php");
    exit(0);
  } else {
    $_SESSION['message'] = "HAVE TO ADD A VIDEO FIRST!!";
    header("Location: PromotionS.php");
   exit(0);
  }
}

//Delete Videos From ADmin
if(isset($_POST['Video_delete']))
{
  $user_id = $_POST['Video_delete'];

  $query = "DELETE FROM videos WHERE id = '$user_id' ";
  $query_run = mysqli_query($conn, $query);

  if($query_run) 
  {
    $_SESSION['message'] = "Admin/user Deleted Video Successfully";
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
//Admin Messages
if(isset($_POST['add_msg'])) 
{

$msg = $_POST['msg'];
$name = $_SESSION['name'];

$query = 'INSERT INTO `posts`(`msg`, `name`) VALUES ("'.$msg.'", "'.$name.'")';
$query_run = mysqli_query($conn, $query);

if($query_run) 
  
  {
    $_SESSION['message'] = "Message Sended!!";
    header("Location: AdminChat.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : AdminChat.php");
   exit(0);

}
}
//Student Messages
if(isset($_POST['stu_msg'])) 
{

$msg = $_POST['msg'];
$name = $_SESSION['name'];

$query = 'INSERT INTO `posts`(`msg`, `name`) VALUES ("'.$msg.'", "'.$name.'")';
$query_run = mysqli_query($conn, $query);

if($query_run) 
  
  {
    $_SESSION['message'] = "Message Sended!!";
    header("Location: StudentChat.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : StudentChat.php");
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
    header("Location: index.php");
    exit(0);
  } else {
    $_SESSION['message'] = "An error occurred";
    header("Location : index.php");
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

  $query = "INSERT INTO registrations (name, username, email, password, `Check`, phoneNumber) VALUES ('$name', '$user_name', '$email','$password','$role_as', '$phoneNumber')";
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




  $query = "UPDATE registrations SET name = '$name', username = '$user_name', email = '$email', password = '$password', `Check` ='$role_as', phoneNumber = '$phoneNumber'
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