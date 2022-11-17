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

    <link rel="stylesheet" href="CSS/Admin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
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
   <p><?php include('message.php'); //Display any error on succeed Message?></p>
   

   <div class="card-header">
<h2>Students Already Enrolled <br><br>
<h4>Enrollment:</h4>

</h2>
 </div>
				<table class="Table-class">
					<thead>
						<tr>
							<th>#</th>
							<th>First Name</th>
							<th>Last Name</th>
							<th>Address</th>
							<th>Date of birth</th>
              <th>Sex</th>
							<th>Academic Program</th>
              <th>Home phone</th>
              <th>Past School</th>
              <th>Delete</th>
            
						</tr>
					</thead>
					<tbody>
          
          <?php
      $query = "SELECT * FROM enrollment_info";
      $query_run = mysqli_query($conn, $query);

 if(mysqli_num_rows($query_run) > 0)
  {
  foreach($query_run as $row)
  {
  ?>
  <tr>
  <td><?= $row['id']; ?></td>
  <td><?= $row['firstName']; ?></td>
   <td><?= $row['lastName']; ?></td>
   <td><?= $row['Address']; ?></td>
   <td><?= $row['Age']; ?></td>
 <td><?= $row['Sex']; ?></td>
 <td><?= $row['academicProgram']; ?></td>
 <td><?= $row['homePhone']; ?></td>
 <td><?= $row['pastSchool']; ?></td>

 <td>
  <form action ="codeUpdate.php" method="POST">  
    
  <button type="submit" name = "user_deleted" value= "<?= $row['id']; ?>" class = "btn-delete">Delete</button>
  </td>
</td>
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
      
			



  </body>
</html>