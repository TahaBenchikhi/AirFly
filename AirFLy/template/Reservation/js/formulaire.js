var placechek =0;
$(function() {
  var c = $('div.one:first-child').find('div.one_cnt div.one_detail p:nth-child(3) i').text();
  bring_place(c);



	
});




function bring_place(num)
{
	$.post("http://localhost/AirFly/web/reservation/controller/index.php",{"idplane":num},function(retour){

array = retour.split(',');
clas = $('input#cl').val();
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

});

}




/*function send_data(yourplace,idvol,name,lastname,date,clas)
{


$.post("http://localhost/PFE/web/reservation/controller/index.php",{"placenum":yourplace,"volid":idvol,"nom":name,"prenom":lastname,"daten":date,"type":clas},function(retour){

var ar = retour.split(',');
  $(".namek").find("span").text(name+","+lastname);
  $(".jfk").text(ar[0]);
  $(".sfo").text(ar[1]);
  $(".gate").find("span").text(ar[4]);
  $(".flight").find("span").text(idvol);
  $(".seat").find("span").text(yourplace.toUpperCase());
  $(".boardingtime").find("span").text(ar[2]+","+ar[3]);
             	createPDF();
location.reload();

	});
}*/