$(function(){
$("span#rm").click(function(){
var par = $(this).parent().parent();
var id = $(par).find('td:first-child').text();

$.post('http://localhost/AirFly/web/admin/controller/',{"remove":id},function(retour){
 if (retour > 0) 
 {
 	window.location.href = 'http://localhost/AirFly/web/admin/controller/';
 }
});

});
/*****************************Modification Promotion*********************************/
$('span#mdp').click(function(){
	var par = $(this).parent().parent();
	for (var i = 1; i<7 ; i++) {
		var currentval = $(par).find('td:nth-child('+i+')').text();
			$(par).find('td:nth-child('+i+')').html('<input type="text" value="'+currentval+'"/>');
	}

});

$('button#flushpro').click(function(){
	var to = [];

$('div.container2 table tr').each(function(){
	var t = [];
	for (var i = 1; i<7 ; i++) {
		var currentval = $(this).find('td:nth-child('+i+') input').val();
		if(currentval)t.push(currentval);
			
	}
	if(t['0']){t.push($(this).find('input[type="hidden"]').val());to.push(t);}
	
});

$.post('http://localhost/AirFly/web/admin/controller/',{"changepromo":to},function(retour){
 if (retour > 0) 
 {
 	window.location.href = 'http://localhost/AirFly/web/admin/controller/';
 }

});

});
/************************************************************************************/
/*********************************************Supression Promo*********************/
$("span#rmp").click(function(){
var par = $(this).parent().parent();
var id = $(par).find('input[type="hidden"]').val();

$.post('http://localhost/AirFly/web/admin/controller/',{"removepromo":id},function(retour){
 if (retour > 0) 
 {
 	window.location.href = 'http://localhost/AirFly/web/admin/controller/';
 }
});

});
/***********************************************************************************/
$('div.formus div button').click(function(){
var s = [];
$('div.formus div').each(function(){
	var inp = $(this).find('input').val() ;
if(inp)s.push(inp);
});
$.post('http://localhost/AirFly/web/admin/controller/',{"addpromo":s},function(retour){
 if (retour > 0) 
 {
 	window.location.href = 'http://localhost/AirFly/web/admin/controller/';
 }
});
});
});