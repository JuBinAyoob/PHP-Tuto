<?php

	$sid="123,321,423,324";
	$l=strlen($sid);
	$i=0;
	
	while($i<$l)
	{
		if($sid[$i]==',')
			echo '<br>';
		else
			echo $sid[$i];
		$i++;
	}
	
	
?>