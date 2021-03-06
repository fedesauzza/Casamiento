<?php
class Usuario
{
	public $idUsuario;
 	public $nombre;
 	public $apellido;
  	public $email;
  	public $clave;
  	public $domicilio;
  	public $telefono;
  	public $sexo;
  	public $tipo;
  	public $foto;
  	public $idCasamiento;

public function AgregarCasamiento($idCasamiento)
{
	$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
	$consulta =$objetoAccesoDato->RetornarConsulta("UPDATE usuario SET idCasamiento= '$idCasamiento' WHERE idUsuario='$this->idUsuario'");
	$consulta->execute();
}
 public static function ValidarUsuario($email, $clave) 
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuario WHERE email=:email AND clave=:clave");
		$consulta->bindValue(':email',$email, PDO::PARAM_STR);
		$consulta->bindValue(':clave',$clave, PDO::PARAM_STR);
		$consulta->execute();
		$usuarioBuscado= $consulta->fetchObject('Usuario');
		return $usuarioBuscado;			
	}

public function GuardarUsuario()
	 {
	 	if($this->idUsuario>0)
	 		{
	 			$this->ModificarUsuario();
	 		}else {
	 			
	 			if($this->TraerUnUsuarioPorEmail())
	 			{echo"Ya existe";}
	 			else
	 				{
						$this->InsertarUsuario();
	 					}
	 		}
	 }

	 public function InsertarUsuario()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO usuario
					(nombre
					,apellido
					,email
					,clave
					,domicilio
					,telefono
					,sexo
					,tipo
					,foto) 
				VALUES
				('$this->nombre'
				,'$this->apellido'
				,'$this->email'
				,'$this->clave'
				,'$this->domicilio'
				,'$this->telefono'
				,'$this->sexo'
				,'$this->tipo'
				,'$this->foto')");
				//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Insertarusuario('$this->nombre','$this->clave','$this->correo','$this->sexo')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	 public static function TraerTodosLosUsuarios()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM usuario");
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerTodoLosusuarios");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "Usuario");		
	}
  	
  	public function BorrarUsuario($idUsuario)
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("DELETE FROM usuario WHERE idUsuario=:idUsuario");	
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Borrarusuario(:id)");		
			$consulta->bindValue(':idUsuario',$idUsuario, PDO::PARAM_INT);		
			$consulta->execute();
			return $consulta->rowCount();
	 }

	 public static function TraerUnUsuario($correo, $clave) 
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select * from usuario where correo = $correo AND clave=$clave");
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL TraerUnusuario($id)");
			$consulta->execute();
			$usuarioBuscado= $consulta->fetchObject('usuario');
			return $usuarioBuscado;				
	}

	public static function TraerUnUsuarioPorId($idUsuario)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDato->RetornarConsulta("SELECT * FROM usuario WHERE idUsuario = :idUsuario");
		$consulta->bindValue(':idUsuario',$idUsuario, PDO::PARAM_INT);
		$consulta->execute();
		$usuarioBuscado = $consulta->fetchObject('Usuario');
		return $usuarioBuscado;
	}
	public function TraerUnUsuarioPorEmail()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();
		$consulta = $objetoAccesoDato->RetornarConsulta("SELECT * FROM usuario WHERE email = '$this->email'");
		$consulta->execute();
		$usuarioBuscado = $consulta->fetchObject('Usuario');
		return $usuarioBuscado;
	}

	public function ModificarUsuario()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				UPDATE usuario 
				SET nombre=:nombre,
					apellido=:apellido,
					email=:email,
					domicilio=:domicilio,
					telefono=:telefono,
					sexo=:sexo,
					tipo=:tipo,
					foto=:foto
				WHERE idUsuario=:idUsuario");
			$consulta->bindValue(':idUsuario',$this->idUsuario, PDO::PARAM_INT);
			$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
			$consulta->bindValue(':apellido',$this->apellido, PDO::PARAM_STR);
			$consulta->bindValue(':email',$this->email, PDO::PARAM_STR);
			$consulta->bindValue(':domicilio',$this->domicilio, PDO::PARAM_STR);
			$consulta->bindValue(':telefono',$this->telefono, PDO::PARAM_STR);
			$consulta->bindValue(':sexo',$this->sexo, PDO::PARAM_STR);
			$consulta->bindValue(':tipo',$this->tipo, PDO::PARAM_STR);
			$consulta->bindValue(':foto',$this->foto, PDO::PARAM_STR);
			//$consulta =$objetoAccesoDato->RetornarConsulta("CALL Modificarusuario('$this->id','$this->clave','$this->correo','$this->sexo')");
			return $consulta->execute();

	 }
}
?>