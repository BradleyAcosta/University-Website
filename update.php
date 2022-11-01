<?php
include('database/server.php');

if(isset($_POST["id"]))
{
        //Update calendar event
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $id = $_POST['id'];

    
        //Update event on database
    $sql = "UPDATE events SET title='$title', start_event='$start', end_event='$end' WHERE id = $id"; 
    $conn->query($sql); 
}

?>