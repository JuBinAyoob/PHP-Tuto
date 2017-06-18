<?php

	@require 'doesntexist.php'; // if the file exist then it act as same as include function
							//@ to not show errors at that page
							//can specify directoty and folder path in require section
							//i.e eg:- c:program_files/xampp....
				 				
							//require kills the current executing page if
							// requiring file is not exist.....

	echo 'Var1 is '.$var1;

?>