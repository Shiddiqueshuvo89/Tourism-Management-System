


<?php

$con=mysqli_connect('localhost','root','','tour');
/*
$id=$_POST['sid'];
$name=$_POST['sn'];
$age=$_POST['sa']; */

$firstname=$_POST['ffirst'];
$lastname=$_POST['flast'];
$email=$_POST['femail'];
$phone=$_POST['fphone'];


$sql="insert into signup(firstname,lastname,email,phone)values('$firstname','$lastname','$email','$phone')";
mysqli_query($con,$sql);





?>
