function Mostrar(queMostrar)
{
	//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}
function MostrarAdmin(queMostrar)
{
	//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:queMostrar}
	});
	funcionAjax.done(function(retorno){
		$("#page-wrapper").html(retorno);
	});
	funcionAjax.fail(function(retorno){
		$("#page-wrapper").html(":(");
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}