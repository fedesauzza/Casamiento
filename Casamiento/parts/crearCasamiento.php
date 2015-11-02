<?php session_start(); 
 require_once("clases/AccesoDatos.php");
 require_once("clases/Casamiento.php");
 require_once("clases/Mesa.php");
 require_once("clases/usuario.php");
?>
<div class="container">
<fieldset>
<!-- Form Name -->
<legend>Crea TU  Casamiento!</legend>

	<div class="row">	
		
		<?php

			$usuario = Usuario::TraerUnUsuarioPorId($_SESSION['idUsuario']);
			if($usuario->idCasamiento)
			{
				include("parts/organizarMesas.php");
			}
			else
			{
				echo "
				<button onclick='CrearCasamiento()' class='btn btn-lg btn-success'><span class='glyphicon glyphicon-gift'></span> Crear Casamiento</button>";
			}
			
		?>
			

		
	</div>

</br>
</fieldset>
</div>