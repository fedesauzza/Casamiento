<?php 
	session_start();

		$_SESSION['email']=null;
		$_SESSION['clave']=null;

	session_destroy();
 ?>