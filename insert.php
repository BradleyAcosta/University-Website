//insert.php
<?php
include('database/server.php');
if(isset($_POST["title"]))
{
    //Add calendar event
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    //Add event on database
    $sql = "INSERT INTO events(title, start_event, end_event) VALUES ('$title','$start','$end')"; 
    $conn->query($sql); 
}
?>