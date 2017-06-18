<?php
	
	$food = array(
					'Healthy'=>array('salad','vegetables','pasta'),
					'Unhealthy'=>array('pizza','icecreame')
				 );
	
	foreach($food as $element =>$inner_array)
	{
		echo '<br><strong>'.$element.'</strong><br><br>';
		foreach($inner_array as $item)
		{
			echo $item.'<br>';
		}
	}
	
?>