<?php
	$unitdetails=array('unitno'=>array(100,101,102),'Institution'=>array("college 1","college 2","college 3"));
	$unitdetails = array
	(
		array(101,"college 1"),
		array(102,"college 2"),
		array(103,"college 3"),
		array(XXX,"college n")
		
	);
	echo '<br>|-----------------------------------------|';
	echo '<br>|&nbsp&nbsp&nbsp&nbspUnit NO&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbspInstitution Name&nbsp&nbsp|';
	echo '<br>|-----------------------------------------|';
	echo '<br>|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[0][0].'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[0][1].'&nbsp&nbsp|';
	echo '<br>|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[1][0].'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[1][1].'&nbsp&nbsp|';
	echo '<br>|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[2][0].'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[2][1].'&nbsp&nbsp|';
	echo '<br>|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|';
	echo '<br>|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|';
	echo '<br>|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|';
	echo '<br>|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[3][0].'&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp&nbsp'.$unitdetails[3][1].'&nbsp&nbsp|';
	echo '<br>|-----------------------------------------|<br>';
	
?>

