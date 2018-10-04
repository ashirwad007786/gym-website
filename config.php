<?php
$dbhost_name = "localhost";
$database = "gym";
$username = "root";
$password = "";

$conn = new mysqli($dbhost_name,$username,$password,$database);
if(!$conn){
	die("connection failed:".mysqli_connect_error());
}
?>