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
    <h2> Add Images or videos for further Updates for the University</h2>
    <br>
    <br>
    <form method="post" enctype="multipart/form-data" action="upload.php">

    <!-- <input type="hidden" name="MAX_FILE_SIZE" value="1048576"> -->
    <label for="image">Image file</label>
    <input type="file" id="image" name="my_image">

    <button class ="btn-upload" name = "submit">Upload</button>

    <table id="myDataTable" class="Table-class">
  <thead>
  <tr>
 <th>ID</th>
  <th>Images</th>
  <th>Delete</th>
 </tr>
</thead>
<tbody>
<?php // Get Student information from database
 $query = "SELECT * FROM images";
 $query_run = mysqli_query($conn, $query);

 if(mysqli_num_rows($query_run) > 0)
  {
  foreach($query_run as $row)
  {
  ?>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['image_url']; ?></td>
<td>            
  <form action ="codeUpdate.php" method="POST">  
    
  <button type="submit" name = "Image_delete" value= "<?= $row['id']; ?>" class = "btn-delete">Delete</button>
  </td>
  </form>
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
    </body>
  </html>