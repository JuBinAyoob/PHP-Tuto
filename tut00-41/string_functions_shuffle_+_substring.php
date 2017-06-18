<?php
	
	echo $string = 'abcdefghijklmnopqrstuvwxyz0123456789';
	echo '<br>'.$string_shuffled = str_shuffle($string);
	
	$half = substr($string_shuffled,0,strlen($string)/2);
	echo '<br><br><br>'.$half;
?>