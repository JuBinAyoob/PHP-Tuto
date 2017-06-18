<?php
	
	$user_ip = $_SERVER['REMOTE_ADDR'];
	
	function echo_ip()
	{
		global $user_ip;     //u can separate variable names by commas in global variable defining section
		$string = 'Your IP address is: '.$user_ip;
		echo $string;
	}
	
	echo_ip();
	
	
?>