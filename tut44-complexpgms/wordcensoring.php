<?php
	//application to remove bad words from web

	$find = array('alex','billy','dale');
	$replace = array ('a**x','b***y','d**e');

	if(isset($_POST['user_input'])&&!empty($_POST['user_input']))
	{
		$user_input = $_POST['user_input'];
		//$user_input_lc = strtolower($user_input); to get rid of this line we use str_ireplace function below
		$user_input_new = str_ireplace($find,$replace,$user_input); //str_replace() === str_ireplace()
		
		echo $user_input_new;
	}
		 
?>

<hr>

<form action="wordcensoring.php" method="post">
	<textarea name="user_input" rows="6" cols="30"><?php echo $user_input;?></textarea><br><br>
	<input type="submit" value="Submit">
</form>