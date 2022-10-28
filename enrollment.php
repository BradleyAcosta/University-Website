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
	<link rel="stylesheet" href="CSS/index.css">
	<link rel="stylesheet" href="CSS/Table.css">

    <link rel="stylesheet" href="CSS/Admin.css">
	<title>Enrollment</title>
</head>
<body>
<nav>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="enrollment.php">Enrollment</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "#">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="ViewStudentInfo.php">Student</a></li>
   

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
				<button type="button" name = "enroll_btn"><i class="fa fa-plus"></i> Enroll New Student</button>
			
			<br>
				<table class="Table-class">
					<thead>
						<tr>
							<th class="text-center">#</th>
							<th class="text-center">Name</th>
							<th class="text-center">Level Section</th>
							<th class="text-center">Adviser</th>
							<th class="text-center">Student Type</th>
							<th class="text-center">Action</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
			
		</div>
	</div>
	
</div>
</div>
</body>
</html>