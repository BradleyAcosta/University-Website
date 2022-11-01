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
if(!isset($_SESSION['auth']))
{
    $_SESSION['message'] = "Login to Access Website";
    header("Location: login.php");
    exit(0);
}
?>