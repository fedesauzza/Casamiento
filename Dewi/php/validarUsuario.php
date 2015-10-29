<?php 
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$email=$_POST['txtEmail'];
	$clave=$_POST['txtClave'];

//echo(var_dump(($email.$clave)));
	$usuario = Usuario::validarUsuario($email,$clave);

//echo(var_dump($usuario));	

	if($usuario)
	{
		session_start();
		$_SESSION['usuario']= $usuario->email;
		$_SESSION['clave']= $usuario->clave;
		$_SESSION['sexo']= $usuario->sexo;
		echo("Logeado");
	}
	else{
		echo("No-logeado");
	}
?>