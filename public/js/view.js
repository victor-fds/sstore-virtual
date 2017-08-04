function checkTruckPrice()
{
	/*Search for Street Name*/
	$(document).ready(function(){
	$.post('../post/correios.php',
	{
		cep:$('#cep').val(),
		we_cep: 14056260,
		sec: 48656
	},
		function(resp){
			if(resp){
				document.getElementById("correios").style.display = "block";
				$('main > div > div > form > div > div:nth-of-type(1) > p').html(resp);
			}
			else
				window.location.href = "#";
		})
	});
	
	/*Calc the price*/
	$(document).ready(function(){
	$.post('../post/correios.php',
	{
		cep:$('#cep').val(),
		we_cep: 14056260,
		sec: 4861
	},
		function(resp){
			if(resp){
				document.getElementById("correios").style.display = "block";
				$('main > div > div > form > div > div:nth-of-type(2) > span').html(resp);
			}
			else
				window.location.href = "#";
		})
	});
};
