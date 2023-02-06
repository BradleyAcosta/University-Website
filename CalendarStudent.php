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
  
    <title>Calendar/Date</title>
	<!-- Bootstrap core CSS -->
	
		<!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<link rel="stylesheet" href="CSS/Calendar.css">
    <link rel="stylesheet" href="CSS/Table.css">
<link rel="stylesheet" href="CSS/Admin.css">



</head>
<body>


<nav>
    <ul>
    <li><a href ="index.php">Home</a></li>
    <li><a href ="#">Communication</a>
    <ul>
      <li><a href = "StudentChat.php">Chat</a></li>
      <li><a href = "CalendarStudent.php">Calendar</a></li>
    </ul>
  </li>
  
    <li><a href ="ViewStudentInfo.php">Contacts</a></li>
    <li><a href ="Promotion.php">Uploads</a></li>

    <li>
    <div class = "field button">
    <form action = "allcode.php" method="POST">
    <button type = "submit" name = "logout_btn">Logout</button>
   </div>
    </form>
    </li>
    </ul>
   </nav>

   <?php
include('database/server.php');
$query = $conn->query("SELECT * FROM events ORDER BY id");
?>
  <script>
    $(document).ready(function() {
     var calendar = $('#calendar').fullCalendar({
      editable:true,
      header:{
       left:'prev,next today',
       center:'title',
       right:'month,agendaWeek,agendaDay'
      },
      events: [<?php while ($row = $query ->fetch_object()) { ?>{ id : '<?php echo $row->id; ?>', title : '<?php echo $row->title; ?>', start : '<?php echo $row->start_event; ?>', end : '<?php echo $row->end_event; ?>', }, <?php } ?>],
      selectable:true,
      selectHelper:true,
      select: function(start, end, allDay)
      {
      var title = prompt("Enter Event Title");
      if(title)
      {
        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
        $.ajax({
        url:"insert.php",
        type:"POST",
        data:{title:title, start:start, end:end},
        success:function(data)
        {
          calendar.fullCalendar('refetchEvents');
          alert("Added Successfully");
          window.location.replace("CalendarStudent.php");
        }
        })
      }
      },
 
      editable:true,
      eventResize:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function(){
        calendar.fullCalendar('refetchEvents');
        alert('Event Update');
        }
      })
      },
 
      eventDrop:function(event)
      {
      var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
      var title = event.title;
      var id = event.id;
      $.ajax({
        url:"update.php",
        type:"POST",
        data:{title:title, start:start, end:end, id:id},
        success:function()
        {
        calendar.fullCalendar('refetchEvents');
        alert("Event Updated");
        }
      });
      },
 
    });
  });
</script>
  <br />
  <br />
  <div class="container">
  <h1> Calendar</h1>
  <br>
  <br>
    <div id="calendar"></div>

    

<h2>Here's the Calendar Updates:</h2>
<table class="Table-class">
					<thead>
						<tr>
							<th>Title</th>
							<th>Start Event</th>
							<th>End event</th>
              </tr>
					</thead>
					<tbody>
 <?php 
 
   $query = "SELECT * FROM events";
      $query_run = mysqli_query($conn, $query);

 if(mysqli_num_rows($query_run) > 0)
  {
  foreach($query_run as $row)
  {
  ?>
  <tr>
  <td><?= $row['title']; ?></td>
  <td><?= $row['start_event']; ?></td>
   <td><?= $row['end_event']; ?></td>
  


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