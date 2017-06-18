<?php
	
	@mysql_connect('localhost','root','Allah') or die('Could not connect to database <br>');
	
	//@ for not displaying errors at that line
	//die('message') <==> exit('message') 
	
	echo 'connected';
	
?>