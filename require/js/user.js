function funcLogin()
{
	$.post('require/jpost/jLogin.php',
	{
		email:$('#email').val(),
		pass:$('#pass').val()
	},
		function(resp){
			if(resp)
				$('main form span').html(resp).css({color: '#F00'});
			else
				location.href='index.php';
		})
};