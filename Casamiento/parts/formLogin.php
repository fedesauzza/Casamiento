<?php 
session_start();
if(!isset($_SESSION['usuario'])){ 
?>
<form class="form-horizontal" onsubmit="validarLogin();return false;">
<fieldset>

<!-- Form Name -->
<legend>Conectarse</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtEmail">Email:</label>  
  <div class="col-md-4">
  <input id="txtEmail" name="txtEmail" type="text" placeholder="" class="form-control input-md" required="" value="<?php  if(isset($_COOKIE["registro"])){echo $_COOKIE["registro"];}?>">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtClave">Contraseña:</label>
  <div class="col-md-4">
    <input id="txtClave" name="txtClave" type="password" placeholder="" class="form-control input-md" required="">
  <a onclick="">¿Olvido contraseña?</a>
    
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="rbRecordame"></label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="rbRecordame-0">
      <input type="radio" name="rbRecordame" id="rbRecordame-0" value="R" checked="checked">
      Recordarme
    </label>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnRegistrar"></label>
  <div class="col-md-2">
      <a onclick="Mostrar('MostrarRegistro')" class="btn btn-block btn-primary btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Registrarse</a>
    </div>
    <div class="col-md-2">
      <button type="submit" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-ok-sign"></span> Conectarse</a>
    </div>
</div>

</fieldset>
</form>
<?php  }  ?>