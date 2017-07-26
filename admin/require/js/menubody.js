/**
* menubody.php
*/
function menubodyAlter()
{
	$(document).ready(function(){
	$.post('require/class/CommandMan.php',
	{
		id:$('#id_').val(),
		nav_name:$('#nav_name').val(),
		array_id:$('#link_array_id_').val(),
		sec: 38655
	},
		function(resp){
			if(resp)
				$('main > section > form > div > span').html(resp).css({color: '#F00'});
			else
				window.location.href = "?opt=mbody";
		})
	});
};
