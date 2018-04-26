$(function(){
	K=200;
$('div.ALLER,div.RETOUR').each(function(){
	$(this).css({"top":K+"%"});
	var nom = $(this).find('.nameslip span').text();
	var cl = $(this).attr('class');
	cl = cl.substr(cl.indexOf(' '),cl.length);
createPDF($(this),nom+" "+cl);
K = K+100;
});


});