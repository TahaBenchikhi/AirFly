	var yourplace;
		var array;
	$(function(){
var id;
 var error=0;



$("div.first_class,div.midle_class,div.last_class").find("div").click(function(){
var x = $(object).find('input.plac').val();

if(x)
{
	$("div#"+x+"").removeClass('purple').css({"cursor":"pointer"});
var ins = array.indexOf(x);
while (ins != -1){
        array.splice(ins, 1);
        ins = array.indexOf(x);
    }

var ine = table.indexOf(x);
while (ine != -1){
        table.splice(ine, 1);
        ine = table.indexOf(x);
    }

}
		$("div.first_class,div.midle_class,div.last_class").find("div").css({"background-color":"#009688"});
		
			$("div.red").css({"background-color":"#F44336"});
			$("div.purple").css({"background-color":"#3F51B5"});
			id=$(this).attr('id');
for (var i = 0; i < array.length; i++) {

	if(array[i]==id){error++;}

};
if (error==0) {
		$(this).css({"background-color":"#FFC107"});
		
			yourplace=$(this).attr('id');
}

else{

	error=0;
	yourplace=null;
}

});

  });



/*f1,f2,f7,f27,f39,f27,f29,f48,f37,f12,f20,f35,f43,f33,m2,m4,m6,m5,l1,l2,l6,l8,l9,l23,l98,l78,l56,l34,l45,l90,l101,l120,l55*/