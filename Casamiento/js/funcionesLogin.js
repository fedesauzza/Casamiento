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
			MostrarMenu();
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

function Desconectarse()
{
	var funcionAjax=$.ajax({
		url:"php/desloguearUsuario.php",
		type:"post"
	});
	funcionAjax.done(function(retorno){
		//alert(retorno);
		$("#principal").html(retorno);
		MostrarMenu();
		MostrarLogin();
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);	
	});
}
function MostrarMenu()
{
	//alert("MostarMenu");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarMenu"}
	});
	funcionAjax.done(function(retorno){
		$("#barraMenu").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		alert(retorno);
	});
}