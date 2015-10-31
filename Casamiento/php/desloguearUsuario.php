<?php 
	session_start();

		$_SESSION['usuario']=null;
		$_SESSION['clave']=null;
		$_SESSION['sexo']=null;

	session_destroy();

	//echo var_dump($_SESSION);
 ?>