<?php
class Mesa
{
	public $idMesa;
	public $idCasamiento;
	public $nombreMesa;

	public function CrearMesa()
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("INSERT INTO mesa (idCasamiento, nombreMesa) VALUES ('$this->idCasamiento', '$this->nombreMesa')");
		$consulta->execute();
		return $objetoAccesoDato->RetornarUltimoIdInsertado();
	}
	public static function TraerMesasPorIdCasamiento($idCasa)
	{
		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
		$consulta =$objetoAccesoDato->RetornarConsulta("SELECT * FROM mesa WHERE idCasamiento = $idCasa");
		$consulta->execute();
		return $consulta->fetchAll(PDO::FETCH_CLASS, "Mesa");
	}	
}
?>