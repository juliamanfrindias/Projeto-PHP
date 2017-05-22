
$('#salvar').click(function(){

	if ($('#nome').val() == "") {
		alert("Campo vazio");
	}
	else{
		$.ajax({
			url: 'formulariophp.php',
			type: 'post',
			dataType: 'html',
			data: {
				'metodo': $('#metodo').val(),
				'nome': $('#nome').val()
			}

		}).done(function(data){
			alert(data);

			$('#salvar').val('Salvar');
			$('#nome').val('');
			$('#show').val('');
			

		});
	}

	
});


$('#buscar').click(function(){

	if ($('#nome').val() == "") {
		alert("Campo vazio");
		$('#show').val('');
	}
	else
	{
		$.ajax({

			url: 'formulariobusca.php',
			type: 'post',
			dataType: 'html',
			
			data : {
				'metodo': $('#metodo').val(),
				'nome': $('#nome').val()
			}
			
		}).done(function(data){
			$('#nome').val('');
			$('#show').val(data);
		});
	}

	
});