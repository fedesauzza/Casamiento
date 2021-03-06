<?php
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");
require_once("clases/Casamiento.php");
require_once("clases/Mesa.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'CrearCasamiento':
		session_Start();
		$casamiento = new Casamiento();
		$casamiento->idUsuario = $_SESSION['idUsuario'];
		$resultado = $casamiento->CrearCasamiento();
		$usuario = Usuario::TraerUnUsuarioPorId($_SESSION['idUsuario']);		
		$usuario->AgregarCasamiento($resultado);
	break;
	case 'CrearMesa':
		session_start();
		$mesa = new Mesa();
		$mesa->idCasamiento = $_SESSION['idCasamiento'];
		$mesa->nombreMesa = $_POST['nombreMesa'];
		$resultado = $mesa->CrearMesa();
		echo $resultado;
	break;
	case 'grillaMesas':
		include("parts/grillaMesas.php");
		break;
	case 'Home':
		include("parts/home.php");
		break;
	case 'Contacto':
			include("parts/contact.php");
		break;
	case 'MostrarCasamiento':
			include("parts/crearCasamiento.php");
		break;
		case 'adminPanel':
			include("parts/adminPanel.php");
		break;
		case 'userPanel':
			include("parts/usuarioPanel.php");
		break;
		case 'adminHome':
			include("parts/adminHome.php");
		break;
		case 'usuarioHome':
			include("parts/usuarioHome.php");
		break;
		case 'adminTablaUsuarios':
			include("parts/adminTablaUsuarios.php");
		break;
		case 'MostrarMenu':
			include("parts/barraMenu.php");
		break;	/*	
	case 'MostarBotones':
			include("partes/botonesABM.php");
		break;
	case 'MostrarGrilla':
			include("partes/formGrilla.php");
		break;*/
	case 'MostrarLogin':
			include("parts/formLogin.php");
		break;
	case 'MostrarRegistro':
			include("parts/formRegistro.php");
		break;	/*
	case 'MostrarFormAlta':
			include("partes/formCd.php");
		break;*/
	case 'BorrarUsuario':
			$usuario = new Usuario();
			$usuario->idUsuario=$_POST['idUsuario'];
			$cantidad=$usuario->BorrarUsuario($usuario->idUsuario);
			echo $cantidad;

		break;/**/
	case 'GuardarUsuario':
			include("parts/guardarUsuario.php");
		break;
	case 'TraerUsuario':
			$usuario = Usuario::TraerUnUsuarioPorId($_POST['idUsuario']);		
			echo json_encode($usuario) ;

		break;
	default:
		# code...
		break;
}
?>