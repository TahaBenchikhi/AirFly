$(function(){
$('div.menu_list li').click(function(){
var inde = $(this).index();
$('div.menu').find('span').css({"z-index":"0","opacity":"0"});
$('div.menu').find('span:nth-child('+(inde+2)+')').css({"z-index":"1","opacity":"1"});
});



});