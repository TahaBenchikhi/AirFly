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



$("button.annuler").click(function(){
		$("div.air_container").animate({"opacity":"0"},500,function(){
$("div.schema").animate({"opacity":"0"},500,function(){
	$("div.schema").css({"display":"none"});
});
});});




$("button.valid").click(function(){

	if(yourplace)
	{
		var idplace = $(object).find('td:nth-child(1)').text();
		var num = $(object).find('td:nth-child(5)').text();
		var old = $(object).find('td:nth-child(6)').text();
     $.post('http://localhost/AirFly/web/espace/controller/',{"yourplace":yourplace,"idplace":idplace,"numvol":num,"old":old},function(retour){
    if(retour==1) 
    {
    	$('.jfkslip,.n').text($(object).find('td:nth-child(3)').text());
    	$('.sfoslip,.y').text($(object).find('td:nth-child(2)').text());
    	 $('.classe span').text($(object).find('input#cl').val());
       $('.boardingtime span').text($(object).find('input#cl').next().val());
       $('.gate span').text($(object).find('input#cl').next().next().val());
    	 $('.flight span').text($(object).find('td:nth-child(5)').text());
    	 $('.seat span').text(yourplace);
    	 $('.namek span').text($(object).find('td:nth-child(3)').text()+","+$(object).find('td:nth-child(2)').text());

    	createPDF($('div.box'),'Modfication');
    	window.location.reload();

    }
    else alert(retour);
     });
    }
  else
  {
  	alert('Valid Ta place');
  }
  });



  });



