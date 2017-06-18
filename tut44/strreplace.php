<?php
	echo $string ='This is a string, and is an example<br><br><br>';
	
	$find = array('is','string','example');
	$replace = array('IS','STRING','');
	
	$new_string = str_replace($find,$replace,$string);	//takes 3 arguments
												//1st:- looking for( 'a word'  || array of words)
												//2nd:- to replace (             "              )
												//3rd:- main string
	
	//application of this pgm is to remove a list of bad words posted in a web page
	echo $new_string;
	
	
?>