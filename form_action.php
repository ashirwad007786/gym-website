<?php
$full_name=$_POST['full_name'];
$father_name=$_POST['father_name'];
$Age=$_POST['Age'];
$address=$_POST['address'];
$mobile_no=$_POST['mobile_no'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$date = date('Y-m-d H:i:s');
include("config.php");
$query="insert into gym(full_name,father_name,Age,address,mobile_no,email,gender,time)values('$full_name','$father_name','$Age','$address','$mobile_no','$email','$gender','$date')";
mysqli_query($conn,$query);
?>