function GuardarUsuario()
{
	alert("hola");
	var formData = new FormData(document.getElementById("FormRegistro"));
    formData.append("queHacer", "GuardarUsuario");
    formData.append("imgPerfil", $('#imgPerfil').attr("src"));
	formData.append("tipo", "us");
	//formData.append("rbSexo", sexo);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		dataType: "html",
        data: formData,
        cache: false,
        contentType: false,
	    processData: false
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		if(retorno=="Ya existe")
		{
			alert(retorno);
			Mostrar('MostrarRegistro');

		}
		else
		{
			MostrarLogin();	
		}
		
		
	});
	funcionAjax.fail(function(retorno){
	alert(retorno);	
		$("#principal").html(retorno.responseText);	
	});
}
function BorrarUsuario(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarUsuario",
			idUsuario:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		MostrarAdmin("adminTablaUsuarios");		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);	
	});	
}
function EditarUsuario(idParametro)
{	//alert("Hola");
	alert(idParametro);
	MostrarAdmin('MostrarRegistro');
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerUsuario",
			idUsuario:idParametro
		}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		var usuario =JSON.parse(retorno);
		$('#idUsuario').val(usuario.idUsuario);
		$('#txtNombre').val(usuario.nombre);
		$('#txtApellido').val(usuario.apellido);
		$('#txtEmail').val(usuario.email);
		$('#txtClave').val(usuario.clave);
		$('#txtClave').prop('readonly', true);
		$('#txtDomicilio').val(usuario.domicilio);
		$('#txtTelefono').val(usuario.telefono);
		if (usuario.sexo == 'M') {
			document.getElementById('sexoM').checked = true;
		}
		else{
			document.getElementById('sexoF').checked = true;
		}
		$('#imgPerfil').attr("src","img/"+usuario.foto);
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
	});
}

function CrearCasamiento()
{
	//alert("hola");
	var funcionAjax=$.ajax({
	url:"nexo.php",
	type:"post",
	data:{queHacer:"CrearCasamiento"}
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		alert("lala");
		MostrarMenu();
		Mostrar("MostrarCasamiento");
		//MostrarAdmin("adminTablaUsuarios");		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);
		alert("chau");	
	});	
}
function CrearMesa()
{
	alert("hola");
	var nombreMesa=$("#txtNombreMesa").val();
	var funcionAjax=$.ajax({
	url:"nexo.php",
	type:"post",
	data:{
		queHacer:"CrearMesa",
		nombreMesa:nombreMesa	
	}
	});
	funcionAjax.done(function(retorno){
		alert(retorno);
		alert("lala");
		MostrarEnCasamiento("grillaMesas");
		
	});
	funcionAjax.fail(function(retorno){	
		alert(retorno);	
	});	
}