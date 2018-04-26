$(function(){

$("input#date").click(function(){
$("aside.aside1").css({"display":"block","opacity":"0.9"});
$("aside.aside2").css({"display":"none","opacity":"0"});
$("div.choseplace").css({"display":"none","opacity":"0"});
});
$("input#date2").click(function(){
$("aside.aside2").css({"display":"block","opacity":"0.9"});
$("aside.aside1").css({"display":"none","opacity":"0"});
$("div.choseplace").css({"display":"none","opacity":"0"});
});
$("#find,.s1,.s2,#places").click(function(){
$("aside.aside2").css({"display":"none","opacity":"0"});
$("aside.aside1").css({"display":"none","opacity":"0"});
});
$("span#places").click(function(){
$("aside.aside2").css({"display":"none","opacity":"0"});
$("aside.aside1").css({"display":"none","opacity":"0"});
$("div.choseplace").css({"display":"block","opacity":"1"});
});


$('html').click(function() {
$("aside.aside1").css({"display":"none","opacity":"0"});
$("aside.aside2").css({"display":"none","opacity":"0"});
$("div.choseplace").css({"display":"none","opacity":"0"});
});

$('#search').click(function(event){
    event.stopPropagation();
});

$("div.choseplace").find('input').click(function(){
var att = $(this).attr('name');
var text = $("span#places").text();
var vale=$(this).val();

if(att == 'adulte')
{
	 $("span#places i:first-child").text('');
   $("span#places i:first-child").text(vale+''+att);
}
if(att == 'enfant')
{
	 $("span#places i:nth-child(2)").text('');
   $("span#places i:nth-child(2)").text(','+vale+''+att);
}
if(att == 'bébé')
{
	 $("span#places i:nth-child(3)").text('');
   $("span#places i:nth-child(3)").text(','+vale+''+att);
}

});

$('input#date2').val('');
$('input#date').val('');
/*session('ALLER');*/



  });



function get(name){
   if(name=(new RegExp('[?&]'+encodeURIComponent(name)+'=([^&]*)')).exec(location.search))
      return decodeURIComponent(name[1]);/*var d1 = get("date_depart");
var d2 = get("date_retour");
if(d1) $('input#date').val(d1);
if(d2) $('input#date2').val(d2);*/
}
function session(val)
{
	
	$.get('http://localhost/AirFly/web/sessioninfo.php', {getsession: val}, function (retour) {
   alert(retour);
});
	
	
}
