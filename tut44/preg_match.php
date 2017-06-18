<?php
	
	function has_space($string)
	{
		if(preg_match('/ /',$string))
			return true;
		else
			return false;
	}
	
	echo $string='hai... its me jubin...<br>';
	
	if(has_space($string))
		echo 'Has atleast one space';
	else
		echo'Has no spaces';
	
	
?>