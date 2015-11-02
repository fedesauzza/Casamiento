<?php
  require_once("clases/Mesa.php");
  require_once("clases/AccesoDatos.php");
  if(!isset($_SESSION))
  	session_start();
  $arrayDeMesas=Mesa::TraerMesasPorIdCasamiento($_SESSION['idCasamiento']);
  $i=0;

echo"<table class='table table-bordered'>
<thead>
  <tr>
    <th>Numero</th>
    <th>Nombre</th>
    <th>Agregar Invitado</th>
  </tr>
</thead>";
	foreach ($arrayDeMesas as $mesas) {
		$i=$i+1;
	 	echo"
	 	<tbody>
	 		<tr>
			    <td>$i</td>
			    <td>$mesas->nombreMesa</td>
			    <td>john@example.com</td>
			</tr>
	 	</tbody>
	 	";
	 } 

echo"</table>";
?>