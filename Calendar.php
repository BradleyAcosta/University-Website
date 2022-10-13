<?php
require 'CalendarConnection.php';

$calendar = new Calendar();
$calendar->setYear(2022);
$calendar->setMonth(10);
$calendar->create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <title>Calendar/Date</title>
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="Chat.css">
</head>
<body>


<nav>
  <p>  Welcome to Calendar </p>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="#">Curriculum</a>

    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "Calendar.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="#">Student</a></li>

    <a class= "Logout" href="logout.php">Logout</a>
    </ul>
   </nav>


   <div id = "calendar" class = "container">
  <table class="table table-bordered mt-4">
	<thead>
	<tr>
		<?php 
		foreach($calendar->getWeekDays() as $dayName): ?>
		<th>

		<?php echo $dayName; ?>

		</th>
		<?php endforeach; ?>
	</tr>
	</thead>
		<tbody>
			<?php foreach($calendar->getweeks() as $weeks): ?>
				<tr>

				<?php foreach($weeks as $dayNumber): ?>
					<td>
						<?php echo $dayNumber;?>
					</td>
					<?php endforeach; ?>
				</tr>
				<?php endforeach; ?>
		</tbody>


  </table>

  </div>

</body>
</html>