      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- BOOTSTRAP STYLES-->
    <!--<link href="css/bootstrap.css" rel="stylesheet" />-->
     <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <?php 
        require_once("clases/usuario.php");
        $usuarios = Usuario::TraerTodosLosUsuarios();          
            echo"<div class='row'>
                <div class='col-md-12'>
                    <!-- Advanced Tables -->
                    <div class='panel panel-default'>
                        <div class='panel-heading'>
                             Tabla de usuarios
                        </div>
                        <div class='panel-body'>
                            <div class='table-responsive'>
                                <table class='table table-striped table-bordered table-hover' id='dataTables-example'>
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Email</th>
                                            <th>Domicilio</th>
                                            <th>Telefono</th>
                                            <th>Sexo</th>
                                            <th>Modificar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>";
                            foreach ($usuarios as $usuario) {
                                # code...
                            
                                    echo"<tbody>
                                        
                                        <tr class='gradeA'>
                                            <td>$usuario->nombre</td>
                                            <td>$usuario->apellido</td>
                                            <td>$usuario->email</td>
                                            <td>$usuario->domicilio</td>
                                            <td>$usuario->telefono</td>
                                            <td>$usuario->sexo</td>
                                            <td><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modalEliminar'><i class='fa fa-pencil'></i> Eliminar</button></td>
                                            <td><button class='btn btn-primary' onclick='EditarUsuario($usuario->idUsuario)'><i class='fa fa-edit '></i> Editar</button></td>
                                            <!--<td><button class='btn btn-danger' onclick='BorrarUsuario($usuario->idUsuario)'><i class='fa fa-pencil'></i> Borrar</button></td>-->
                                        </tr>
                                       
                                        
                                    </tbody>";}
                                echo"</table>
                                <div class='modal fade' id='modalEliminar' role='dialog'>
                                    <div class='modal-dialog'>
                                <!-- Modal content-->
                                        <div class='modal-content'>
                                            <div class='modal-header'>
                                            <button type='button' class='close' data-dismiss='modal'>&times;</button>
                                            <h4 class='modal-title'>Confirmar</h4>
                                            </div>
                                        <div class='modal-body'>
                                            <p>¿Seguro quiere eliminar el usuario? Una vez eliminado no podrá recuperarlo.</p>
                                        </div>
                                        <div class='modal-footer'>
                                        <button class='btn btn-danger' onclick='BorrarUsuario($usuario->idUsuario)' data-dismiss='modal'><i class='fa fa-pencil'></i> Borrar</button>
                                            <button type='button' class='btn btn-info' data-dismiss='modal'>Cancelar</button>
                                            
                                        </div>
                                    </div>
                                  
                                    </div> 
                                </div> 
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->";
    ?>
    
    
                 
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="js/dataTables/jquery.dataTables.js"></script>
    <script src="js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
