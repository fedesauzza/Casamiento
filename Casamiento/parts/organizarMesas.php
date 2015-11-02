
<div class="col-md-8">
  <label class="col-md-2" for="txtNombreMesa">Mesa:</label>  
  <div class="col-md-4">
  <input id="txtNombreMesa" name="txtNombreMesa" type="text" placeholder="" class="input-md" required="">
  <div class="col-md-8">
   <button id="btnAceptar" name="btnAceptar" onclick="CrearMesa()" class="btn btn-success btn-lg">Agregar</button> 
   </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnAceptar"></label>
  <div class="col-md-4">
    
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-8" id="paginaCasamiento">
      <?php if(isset($_SESSION['idCasamiento']))
        include("grillaMesas.php");
       ?>
    </div>
  </div>
</div>