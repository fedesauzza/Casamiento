<?php 
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$dni=$_POST['dni'];
	$clave=$_POST['clave'];

	$unUsuario = usuario::ValidarUsuario($dni,$clave);
		
	if($unUsuario)
	{
		session_start();
		$_SESSION['dni'] = $unUsuario->dni;
		$_SESSION['clave'] = $unUsuario->clave;
		$_SESSION['tipo'] = $unUsuario->tipo;
		echo $unUsuario->tipo;
	}
	else
	{
		echo "error";		
	}
?>