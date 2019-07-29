<?php

$con=mysqli_connect('localhost','root','','tour');
?>
<h1> Student Information </h1>


<?php

$sql="select * FROM signup";

$res=mysqli_query($con,$sql);

?>

<html>
<head>
	
</head>

  <body>

  <table border="5">

<tr> 

<th> First Name </th>
<th> Last Name </th>
<th> email </th>
<th> Phone </th> </tr>
<button style="color:red" onClick="window.print()">print</button>
</table>

</body> 
</html>


<?php



while($row=mysqli_fetch_assoc($res))
	
 


	{			
		echo $row["firstname"];
		echo $row["lastname"];
		echo $row["email"];
		echo $row["phone"];
		echo "</br>";
	}


?>

