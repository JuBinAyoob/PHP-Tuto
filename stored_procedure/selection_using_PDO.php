<?php

	$con= new PDO("mysql:host=localhost;dbname=test",'root','');
	
	$sql="CALL Show_Users()";
	$result=$con->prepare($sql);
	
	$result->setFetchMode(PDO::FETCH_ASSOC);
	$result->execute();
	
	while($values=$result->fetch())
	{
		print "<pre>";
		print_r($values);
	}
?>