$(function(){
$("div.left_bar ul li").click(function(){
var sd = $(this).index();
$("div.container1,div.container2,div.container3,div.container4").css({"z-index":"0","opacity":"0"});
$("div.container"+(sd+1)).css({"z-index":"1","opacity":"1"});
});
$("div.left_bar ul li").mouseover(function(){
	$("div.left_bar ul li").css({"background-color":"#50626C"});
	$(this).css({"background-color": "#607D8B"})});

/*************Modification vol**************************************************************/

$('span#md').click(function(){
	var par = $(this).parent().parent();
	for (var i = 1; i<13 ; i++) {
		var currentval = $(par).find('td:nth-child('+i+')').text();
			$(par).find('td:nth-child('+i+')').html('<input type="text" value="'+currentval+'"/>');
	}

});


$('button#flush').click(function(){
	var to = [];

$('div.container1 table tr').each(function(){
	var t = [];
	for (var i = 1; i<13 ; i++) {
		var currentval = $(this).find('td:nth-child('+i+') input').val();
		if(currentval)t.push(currentval);
			
	}
	if(t['0']){t.push($(this).find('input[type="hidden"]').val());to.push(t);}
	
});

$.post('http://localhost/AirFly/web/admin/controller/',{"change":to},function(retour){
 if (retour > 0) 
 {
 	window.location.href = 'http://localhost/AirFly/web/admin/controller/';
 }
});

});
/*********************************************************************************/
/*****************************Ajout D'un Vol**************************/
$('div.formu div button').click(function(){
var s = [];
$('div.formu div').each(function(){
	var inp = $(this).find('input').val() ;
if(inp)s.push(inp);
});

$.post('http://localhost/AirFly/web/admin/controller/',{"add":s},function(retour){
 if (retour > 0) 
 {
 	window.location.href = 'http://localhost/AirFly/web/admin/controller/';
 }
});
});


/*********************************************************************/


});