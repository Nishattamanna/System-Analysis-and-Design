<?php include_once("db.php");?>	


<?php

	session_start();   #start the session
	
	session_unset(); #remove all the variables in the session
	
	session_destroy();  #destroy the session
	
		
	echo "Sussessfully LogOut!<br/>";
	echo "<br/><a href='index.php'>HOME</a><br/>";
	echo "<br/><a href='login.php'>LOGIN</a><br/>";
	echo "<br/><a href='login.php'>SIGNUP</a>";
	
	

?>