var object;
$(function() {


$('button.ch').click(function(){
var thi = $(this).parent().parent();
var num = $(thi).find('td:nth-child(5)').text();

object = thi;
bring_place(num,thi);



$("div.schema").css({"display":"block"});
$("div.air_container").css({"display":"block"});
setTimeout(function(){
		$("div.air_container").animate({"opacity":"1"},200,function(){
$("div.schema").animate({"opacity":"1"},200);
});
	},10);

});

});








function bring_place(num,thi)
{
	$.post("http://localhost/AirFly/web/reservation/controller/index.php",{"idplane":num},function(retour){
array = null;
$('div.first_class div , div.midle_class div ,div.last_class div ').removeClass('red');
$("div.first_class,div.midle_class,div.last_class").find("div").css({"background-color":"#009688","cursor":"pointer"});
array = retour.split(',');
clas = $(thi).find('input#cl').val();
if(clas == 'economique')
{
  for (var i = 1; i < 19; i++) {
  
   array.push('f'+i);

};
for (var i = 1; i < 49; i++) {
  array.push('m'+i);
};
}



if(clas == 'affaires')
{
  for (var i = 1; i < 19; i++) {
  
   array.push('f'+i);

};
for (var i = 1; i < 121; i++) {
  array.push('l'+i);
};
}



if(clas == 'premiere')
{
  for (var i = 1; i < 121; i++) {
  
   array.push('l'+i);

};
for (var i = 1; i < 49; i++) {
  array.push('m'+i);
};
}






for (var i = 1; i < array.length; i++) {

	$("div#"+array[i]+"").addClass("red").css({"background-color":"#F44336","cursor":"no-drop"});
};
var plac = $(thi).find('td:nth-child(6)').text();
$("div#"+plac+"").removeClass('red').css({"background-color":"rgb(255, 193, 7)","cursor":"pointer"});
});

}
