function MostrarLogin()
{
	//alert("Hola");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
function validarLogin()
{
	//alert("logear");
	var varUsuario=$("#txtEmail").val();
	var varClave=$("#txtClave").val();
	//alert(varUsuario+varClave);	
	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			txtEmail:varUsuario,
			txtClave:varClave
		}
	});

	funcionAjax.done(function(retorno){
		//alert(retorno);
		if(retorno!="No-logeado"){	
			//alert("Log");
			Mostrar("CrearCasamiento");
			}else
			{
				alert("Usuario no registrado");
				Mostrar("MostrarRegistro");
			}
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);	
	});
}