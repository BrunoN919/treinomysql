$("document").ready(function(){
	$("#enviar").click(function(){
		var data = {value : '1'}
		$.ajax({
			type : 'POST',
			url : 'tabela.php',
			data : data,
			success : function(response){
				$("body").html(response);
			}
		});
	});
});