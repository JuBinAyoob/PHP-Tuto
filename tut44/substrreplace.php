<?php
	
	$string ='This part don\'t search. This part search';
	
	
	$string_new=substr_replace($string,'alex',29,4);  	//takes 4 arguments
						//1st:- main string
						//2nd:- substring to replace
						//3rd:- for where we want to start
						//4th:- for where we want to end
	
	echo $string_new;
?>