$(function(){
   var M = 9;

setInterval(function(){
	if(M==0) window.location.href = "http://localhost/AirFly/web/espace/controller/";
$('div.tickets div.content span:nth-child(2) i').text(M);
M--;
},1000);

});