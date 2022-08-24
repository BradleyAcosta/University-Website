<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "student_user";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!!");
}
