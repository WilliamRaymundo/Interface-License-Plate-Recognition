$(document).ready(function(){

alert("oi");
	$('#placa').keyup(function(){
		alert("keyup");
		$('form').submit(function(){

			var dados = $(this).serialize();

			$.ajax({

				url: 'processa.php',
				type: 'POST',
				dataType: 'html',
				data: dados,
				success: function(data){
					alert("SUBMIT");
					$('#resultado').empty().html(data);

				}


			});
			return false;

		});

		$('form').trigger('submit');

	});



});