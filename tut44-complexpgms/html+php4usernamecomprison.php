<?php
	
	if(isset($_GET['user_name'])&&!empty($_GET['user_name']))
		echo $user_name = $_GET['user_name'];
	
	if(($user_name_lc=strtolower($user_name))=='jubin ayoob')
		echo '<br>'.$user_name.' .... U r great...<br>';
?>


<form action="index.php" method="GET">
	Name:<input type="text" name="user_name"><br><br>
	<input type="submit" value="Submit">
</form>