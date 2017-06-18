<?php
	
	echo $string = '<br> My Name is <br> @JuBee Ayoob!.';
	
	//to find number of words
	echo '<br>'.$string_word_count = str_word_count($string).'<br> <br> <br>';
	
	//words number finder and show words array
	$string_word_count = str_word_count($string,1,'<>');
	print_r($string_word_count);
	
	//position finder array
	echo'<br><br><br>';
	$string_word_count = str_word_count($string,2,'!.@');      //third argument to include symbols(eg '.') in string function
	print_r($string_word_count);
	
?>