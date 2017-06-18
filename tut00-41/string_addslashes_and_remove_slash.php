<?php
	
	echo $string = 'This is a <img src="image.jpg"> string.';     //<img src="image.jpg"> 
	
	echo '<br><br>'.$string_slash = htmlentities($string);
	echo '<br><br>'.$string_slash = htmlentities(addslashes($string));
	
	echo '<br><br>'.stripslashes($string_slash);
?>