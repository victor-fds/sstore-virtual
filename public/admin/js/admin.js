/**
* addproduct.php
*/
function addnewProduct()
{
	$(document).ready(function(){
	$.post('require/class/CommandMan.php',
	{
		nav_name:$('#nav_name').val(),
		hide:$('input:radio[id=hide]:checked').val(),
		img_ref:$('#img_ref').val(),
		des:$('#des').val(),
		price:$('#price').val(),
		price2:$('#price2').val(),
		price3:$('#price3').val(),
		price4:$('#price4').val(),
		sec: 1008716
	},
		function(resp){
			if(resp)
				$('main > section > form > div > span').html(resp).css({color: '#F00'});
			else
				window.location.href = "?opt=addprod";
		})
	});
};

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

function menubodyNew()
{
	$(document).ready(function(){
	$.post('require/class/CommandMan.php',
	{
		nav_name:$('#nav_name').val(),
		array_id:$('#link_array_id_').val(),
		sec: 456872
	},
		function(resp){
			if(resp)
				$('main > section > form > div > span').html(resp).css({color: '#F00'});
			else
				window.location.href = "?opt=mbody";
		})
	});
};

/**
* Menunav.php
*/
function menunavSave()
{
	$(document).ready(function(){
	$.post('require/class/CommandMan.php',
	{
		id:$('#id_').val(),
		nav_name:$('#nav_name').val(),
		img_ref:$('#img_ref').val(),
		title:$('#title').val(),
		des:$('#des').val(),
		link_array_id_:$('#link_array_id_').val()
		
	},
		function(resp){
			if(resp)
				$('main > section > form > div > span').html(resp).css({color: '#F00'});
			else
				window.location.href = "?opt=mnav";
		})
	});
};
function menunavNew()
{
	$(document).ready(function(){
	$.post('require/class/CommandMan.php',
	{
		nav_name:$('#nav_name').val(),
		typeA:$('input:radio[id=typeA]:checked').val(),
		hide:$('input:radio[id=hide]:checked').val(),
		img_ref:$('#img_ref').val(),
		title:$('#title').val(),
		des:$('#des').val(),
		link_array_id_:$('#link_array_id_').val(),
		sec: 3256008
	},
		function(resp){
			if(resp)
				$('main > section > form > div > span').html(resp).css({color: '#F00'});
			else
				window.location.href = "?opt=mnav";
		})
	});
};
function saveMenuOrder()
{
	$(document).ready(function(){
	$.post('require/class/CommandMan.php',
	{
		orderMenu:$('#orderMenu').val(),
		sec: 3256008
	},
		function(resp){
			if(resp)
				$('main > section > form > div > span').html(resp).css({color: '#F00'});
			else
				window.location.href = "?opt=mnav";
		})
	});
};


/**
* Login and Logout
*/
function funcLoginAdm()
{
	$(document).ready(function(){
	$.post('require/class/jLogin.php',
	{
		email:$('#email').val(),
		pass:$('#pass').val()
	},
		function(resp){
			if(resp)
				$('main form span').html(resp).css({color: '#F00'});
			else
				window.location.href = "index.php";
		})
	});
};


function logoutAdm()
{
	$(document).ready(function(){
		window.location.href = "logout.php";
	});
};