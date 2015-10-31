<?php
	$foto = "find_user.png";
	$usuario = new Usuario();
	$usuario->idUsuario=$_POST['idUsuario'];
	$usuario->nombre=$_POST['txtNombre'];
	$usuario->apellido=$_POST['txtApellido'];
	$usuario->email=$_POST['txtEmail'];
	$usuario->clave=$_POST['txtClave'];
	$usuario->domicilio=$_POST['txtDomicilio'];
	$usuario->telefono=$_POST['txtTelefono'];
	$usuario->sexo=$_POST['rbSexo'];
	$usuario->tipo=$_POST['tipo'];
	//echo var_dump($_FILES);

	if(!isset($_FILES["txtFoto"]))
	{
		//echo "1";
		// no se cargo una imagen
	}
	else
	{//echo "10";
		if($_FILES["txtFoto"]['error'])
		{//echo "9";
			//error de imagen
			if ($_POST['imgPerfil'] != "img/find_user.png") {
				$nombreFoto = substr($_POST['imgPerfil'], 4);
				$foto = $nombreFoto;
				//echo "ok";
			}
		}
		else
		{//echo "8";
			$tamanio =$_FILES['txtFoto']['size'];
    		if($tamanio>1024000)
    		{
    	///			echo "2";
    				// "Error: archivo muy grande!"."<br>";
    		}
    		else
    		{//	echo "7";
    			//OBTIENE EL TAMAÑO DE UNA IMAGEN, SI EL ARCHIVO NO ES UNA
				//IMAGEN, RETORNA FALSE
				$esImagen = getimagesize($_FILES["txtFoto"]["tmp_name"]);
				if($esImagen === FALSE) 
				{
				//	echo "3";
							//NO ES UNA IMAGEN
				}
				else
				{
				//	echo "4";
					$NombreCompleto=explode(".", $_FILES['txtFoto']['name']);
					$Extension=  end($NombreCompleto);
					$arrayDeExtValida = array("jpg", "jpeg", "gif", "bmp","png");  //defino antes las extensiones que seran validas
					if(!in_array($Extension, $arrayDeExtValida))
					{
				//		echo "5";
					   //"Error archivo de extension invalida";
					}
					else
					{
						//$destino =  "fotos/".$_FILES["foto"]["name"];
						$destino = "img/". $_POST['txtEmail'].".".$Extension;
						$foto=$_POST['txtEmail'].".".$Extension;
				//		echo "6";
						//MUEVO EL ARCHIVO DEL TEMPORAL AL DESTINO FINAL
    					if (move_uploaded_file($_FILES["txtFoto"]["tmp_name"],$destino))
    					{		
      			//			 echo "ok";
      					}
      					else
      					{   
      			//			echo "7";
      						// algun error;
      					}
					}
				}
    		}			
		}
	}
	$usuario->foto = $foto;
	/*if ($_FILES['foto']['name'] == "") {
		if ($_POST['imgPerfil'] != 'fotos/pordefecto.png') {
			$nombre = substr($_POST['imgPerfil'], 6);
			$local->foto = $nombre;
		}
	}
	if (!isset($local->foto)) {
		$local->foto = "pordefecto.png";			
	}*/
	$cantidad=$usuario->GuardarUsuario();
?>