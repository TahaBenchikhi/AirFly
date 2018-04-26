	var object ;
	var table = [];
	$(function(){

for (var i = 1; i < 19; i++) {
	
	$("div.first_class").append("<div id='f"+i+"'></div>");
};
for (var i = 1; i < 49; i++) {
	
	$("div.midle_class").append("<div id='m"+i+"'></div>");
};
for (var i = 1; i < 121; i++) {
	
	$("div.last_class").append("<div id='l"+i+"'></div>");
};




$("button.valid").click(function(){
	if(yourplace)
	{
		$("body").css({"overflow-y":"scroll"});
		$("div.air_container").animate({"opacity":"0"},500,function(){
$("div.schema").animate({"opacity":"0"},500,function(){
	$("div.schema").css({"display":"none"});
});
});
		var money = $(object).find('input.plac').val();
		if(!money){
						var s = parseFloat($('div.f span i:nth-child(3)').text().replace('dh', ''));
	$('div.f span i:nth-child(3)').text(s+300+' dh');
		}
		$(object).find('input.plac').val(yourplace);

	table.push(yourplace);
	array.push(yourplace);
	yourplace = null;

	}
else
{
	alert("Valide Ta place !!!")
}
});



/*********************************************************************************************/
$("span.chema").click(function(){
	object = $(this).parent();
		yourplace =  $(object).find('input.plac').val(); 
$("div.schema").css({"display":"block"});
$("div.air_container").css({"display":"block"});
setTimeout(function(){
	$(window).scrollTop(0);
	$("body").css({"overflow":"hidden"});
		$("div.air_container").animate({"opacity":"1"},200,function(){
$("div.schema").animate({"opacity":"1"},200);
});
	},10);


});

/*********************************************************************************************/
$("button.annuler").click(function(){
$("body").css({"overflow-y":"scroll"});
		$("div.air_container").animate({"opacity":"0"},500,function(){
$("div.schema").animate({"opacity":"0"},500,function(){
	$("div.schema").css({"display":"none"});
});
});

var current = $(object).find('input.plac').val();

if(current)
{
	$("div#"+current+"").removeClass().css({"background-color":"#009688","cursor":"pointer"});
	$(object).find('input.plac').val('');



var ins = array.indexOf(current);
while (ins != -1){
        array.splice(ins, 1);
        ins = array.indexOf(current);
    }

var ine = table.indexOf(current);
while (ine != -1){
        table.splice(ine, 1);
        ine = table.indexOf(current);
    }



	var s = parseFloat($('div.f span i:nth-child(3)').text().replace('dh', ''));
	$('div.f span i:nth-child(3)').text(s-300+' dh');

}


});




/******************************************************************************************************/  
$("span.chema").click(function(){
	
var current = $(this).parent().find('input.plac').val();

for (var i = 0; i < table.length; i++) {
	$("div#"+table[i]+"").addClass('purple').css({"background-color":"#3F51B5","cursor":"no-drop"});
}

if(current)
{$("div#"+current+"").removeClass('purple').css({"background-color":"#FFC107"});}



});











});



