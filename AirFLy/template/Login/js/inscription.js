	$(function(){

$("span#inscription").click(function(){
$("div.inscription").css({"display":"block"});
setTimeout(function(){
$("div.inscription").css({"opacity":"1"});
},200);
	
return false;
});
$("div.inscription").click(function(){
$(this).css({"opacity":"0"});
setTimeout(function(){
$("div.inscription").css({"display":"none"});
},400);

});
$('form.form_inscri').click(function(event){
    event.stopPropagation();
});

if ($("div.error").length){  
$("div.errors_cn").css({"opacity":"1"});
$("div.inscription").css({"display":"block"});
setTimeout(function(){
$("div.inscription").css({"opacity":"1"});
},200);


}
if ($('div#showform').length){  
$("div.inscription").css({"display":"block"});
setTimeout(function(){
$("div.inscription").css({"opacity":"1"});
},200);


}






  });



