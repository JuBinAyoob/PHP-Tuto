<?php

	$offset = 0;
	
	if(isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith']))
	{
		$text = $_POST['text'];
		$search = $_POST['searchfor'];
		$search_length = strlen($search);
		$replace = $_POST['replacewith'];
		
		 
		if(!empty($text)&&!empty($search)&&!empty($replace))
		{
			while($strpos = strpos($text,$search,$offset))
			{
				$text = substr_replace($text,$replace,$strpos,$search_length);
				$offset=$strpos+$search_length;
				
			}
			
			echo $text;
		}
		else
			echo 'Fill all the feilds....';
	}
	
	
?>

<hr>

<form action="index.php" method="POST">
	<textarea name="text" rows="6" cols="30"></textarea><br><br>
	search for:<br>
	<input type="text" name="searchfor"><br><br>
	replace with:<br>
	<input type="text" name="replacewith"><br><br>
	<input type="submit" value="Find and Replace">
</form>