<?php
	$string = 'This is a string and it is  an example.';
	
	$offset=0;
	$find ='is';
	$search_length = strlen($find);
	
	
	while($string_pos = strpos($string,$find,$offset))   //$offset is optional parameter and is used to impliment continous search after finding one
	{
		echo '<br>found at'.$string_pos;
		$offset = $string_pos+1;     // || $offset=$string_pos+$search_length;
	}
?>