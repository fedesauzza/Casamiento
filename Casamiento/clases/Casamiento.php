<?php
class Casamiento
{
	public $idCasamiento;
	public $idUsuario;

	public function CrearCasamiento()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO casamiento (idUsuario) VALUES ($this->idUsuario)");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}
}
?>