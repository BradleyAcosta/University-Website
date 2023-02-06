<?php
require 'database/server.php';
include('allcode.php');
include('authentication.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Table.css">
    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">



	<title>Uploads</title>
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

    <h2> Add Images or videos for further Updates for the University</h2>
    <br>
    <br>
   

    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> -->
    <form action ="codeUpdate.php" method="POST" enctype="multipart/form-data">

    <label for="image">Image file</label>
    <input type="file"  name="uploadfile">

  
    <table class="Table-class">
  <thead>
  <tr>
 <th>ID</th>
  <th>Images</th>
  <th>Delete</th>
 </tr>
</thead>
<tbody>


    <button class = "btn btn-primary" type = "submit" name = "submit_img">Upload</button>
    

<?php // Get Student information from database
 $query = "SELECT * FROM image";
 $query_run = mysqli_query($conn, $query);

 if(mysqli_num_rows($query_run) > 0)
  {
  foreach($query_run as $row)
  {
  ?>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['filename']; ?></td>

  
<td>              
    
  <button type="submit" name = "Image_delete" value= "<?= $row['id']; ?>" class = "btn btn-delete">Delete</button>

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

<table class="Table-class">
  <thead>
  <tr>
 <th>ID</th>
  <th>Videos</th>
  <th>Delete</th>
 </tr>
</thead>
<tbody>

<label for="image">Video file</label>
<input type="file"  name="videoName">


    <button class = "btn btn-primary" type = "submit" name = "submit_video">Upload</button>
   

<?php // Get Student information from database
 $query = "SELECT * FROM videos";
 $query_run = mysqli_query($conn, $query);

 if(mysqli_num_rows($query_run) > 0)
  {
  foreach($query_run as $row)
  {
  ?>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['videoname']; ?></td>

  
<td>              
    
  <button type="submit" name = "Video_delete" value= "<?= $row['id']; ?>" class = "btn btn-delete">Delete</button>

  </tr>
  <?php
  } 
   }
?>
           </form>                   
   </tbody>
   </table>
  </div>
  </div>
    </div>
    </body>
  </html>