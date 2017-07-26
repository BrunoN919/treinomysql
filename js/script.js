$("document").ready(function(){
	$("#resgistrar").click(function(){
		var data = {value : '2'}
		$.ajax({
			type : 'POST',
			url : 'registro.php',
			data : data,
			success : function(response){
				$("body").html(response);
			}
		});
	});
	$("#tabela").click(function(){
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