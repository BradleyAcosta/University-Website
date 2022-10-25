<?php
include('database/server.php');
if(isset($_POST["id"]))
{
    //Delete Calendar Event
    $id = $_POST['id'];

    //Delete event on database
    $sql = "DELETE FROM events WHERE id = $id"; 
    $conn->query($sql);
}   
?>