<?php 
	session_start();

		$_SESSION['usuario']=null;
		$_SESSION['clave']=null;
		$_SESSION['sexo']=null;
		$_SESSION['tipo']= null;
		$_SESSION['idUsuario']= null;

	session_destroy();

	//echo var_dump($_SESSION);
 ?>