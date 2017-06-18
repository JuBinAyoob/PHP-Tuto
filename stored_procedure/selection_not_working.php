<?php

	$host="localhost"; // Host name
	$username="root"; // Mysql username
	$password=""; // Mysql password
	$db_name="test"; // Database name

	// Connect to server and select databse.
	$con=mysqli_connect("$host", "$username", "$password") or die("cannot connect");
	mysqli_select_db($con,"$db_name")or die("cannot select DB");
	
	$sql="CALL Show_Users()";
	$result=mysqli_query($con,$sql);
	
	if(! $result ) 
		die('Could not get data: ' . mysqli_error($con));
	
	while($row=mysql_fetch_assoc($result))
	{
		echo '<br>';
		
		foreach($row as $item)
		{
			echo $item.'   ';
		}
	}
?>