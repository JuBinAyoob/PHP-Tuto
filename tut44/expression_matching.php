<?php
	
	$string = 'This is a string.';
	
	
	if(preg_match('/ str/',$string))
		echo '<br>match found';
	else
		echo '<br>not match found';
		
?>