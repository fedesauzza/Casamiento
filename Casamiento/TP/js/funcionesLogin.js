function MostrarLogin()
{
	//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//MostrarLogin();
	});
	funcionAjax.fail(function(retorno){
		alert(retorno.responseText);	
	});
}

function validarLogin()
{
	//alert("Login");
	var dni=$("#dni").val();
	var clave=$("#clave").val();

	var funcionAjax=$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			dni:dni,
			clave:clave
		}
	});

	funcionAjax.done(function(retorno){
		//alert(retorno);
		if (retorno!="error") {
			$("#loguear").css("display", "none");
			$("#desloguear").css("display", "block");
			$("#locales").css("display", "block");
			if (retorno=="admin") {
				$("#usuarios").css("display", "block");
			};
		}
		else{
			alert("Usuario o clave incorecta.");
		}		
	});

	funcionAjax.fail(function(retorno){
		alert(retorno.responseText);	
	});
}

function deslogear()
{	
	//alert("desloguear");
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
		$("#loguear").css("display", "block");
		$("#desloguear").css("display", "none");
		$("#locales").css("display", "none");
		$("#usuarios").css("display", "none");
		MostrarLogin();			
	});
}