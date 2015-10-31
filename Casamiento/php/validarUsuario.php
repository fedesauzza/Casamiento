<?php 
	
	require_once("../clases/AccesoDatos.php");
	require_once("../clases/usuario.php");

	$email=$_POST['txtEmail'];
	$clave=$_POST['txtClave'];

//echo(var_dump(($email.$clave)));
	$usuario = Usuario::validarUsuario($email,$clave);

//echo var_dump($usuario);

	if ($usuario) {
		session_start();
		$_SESSION['usuario']= $usuario->email;
		$_SESSION['clave']= $usuario->clave;
		$_SESSION['sexo']= $usuario->sexo;
		$_SESSION['tipo']= $usuario->tipo;
		$_SESSION['idUsuario']= $usuario->idUsuario;
		$_SESSION['idCasamiento']= $usuario->idCasamiento;
		echo var_dump($_SESSION['idUsuario']);
		echo ("Logeado");
		//echo var_dump($_SESSION);
	} else {
		echo("No-logeado");
	}
?>