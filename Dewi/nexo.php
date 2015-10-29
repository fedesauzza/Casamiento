<?php
require_once("clases/AccesoDatos.php");
require_once("clases/usuario.php");

$queHago=$_POST['queHacer'];

switch ($queHago) {
	case 'Home':
		include("parts/home.php");
		break;
	case 'Contacto':
			include("parts/contact.php");
		break;
	case 'CrearCasamiento':
			include("parts/crearCasamiento.php");
		break;
		case 'adminPanel':
			include("parts/adminPanel.php");
		break;
		case 'adminHome':
			include("parts/adminHome.php");
		break;
		case 'adminTablaUsuarios':
			include("parts/adminTablaUsuarios.php");
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
			//session_start();
			$usuario = new Usuario();
			$usuario->idUsuario=$_POST['idUsuario'];
			$usuario->nombre=$_POST['txtNombre'];
			$usuario->apellido=$_POST['txtApellido'];
			$usuario->email=$_POST['txtEmail'];
			$usuario->clave=$_POST['txtClave'];
			$usuario->domicilio=$_POST['txtDomicilio'];
			$usuario->telefono=$_POST['txtTelefono'];
			$usuario->sexo=$_POST['rbSexo'];
			$cantidad=$usuario->GuardarUsuario();
			echo $usuario->idUsuario;
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