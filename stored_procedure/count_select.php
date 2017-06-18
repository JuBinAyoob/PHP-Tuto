<?php

	$con= new PDO("mysql:host=localhost;dbname=test",'root','');
	
	$sql="CALL Count_Users()";
	$result=$con->prepare($sql);
	
	$result->execute();
	
	$values=$result->fetch();
	
	foreach($values as $item)
	{
		echo "<br>     The number of users ==    $item";
	}
	
	echo "<br><br><br><br>     The number of users =  ";
	print_r($values);
	
	echo "<br><br><br><br>     The number of users =   $values[0] ";
?>