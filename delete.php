<?php


$con=mysqli_connect('localhost','root','','tour');
?>

<?php

    $sql = "DELETE FROM SIGNUP WHERE phone=17";
	$res = mysqli_query($con,$sql);
	echo "The data has been deleted successfully";
	?>

