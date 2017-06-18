<?php
	$book[1]='$bookathand3';
	$book[2]='$bookathand2';
	$book[3]='$bookathand1';
	//$bk['$bookathand13']="34664y";
	
	$i=1;
	
	while($i<4)
	{
		$disp=$book[0+$i].$i;
		echo $disp;
		$i++;
	}
	if(empty($bk["$disp"]))
		echo "<br>empty variable";
	else
		echo '<br>'.$bk["$disp"];
	
?>