$(function(){
	var time=500;
    var c=0;
	var elems = $('div.one');
	var count = elems.length;
if(count == 0)
{
	$('div.nofound').css({"opacity":"1"});
}

	 
$.each($('div.one'), function(){
	
	var a = $(this);
	setTimeout(function(){
		c++;$(a).css({"opacity":"1"});
        if(c==count){$('div.found').css({"opacity":"1"});}
	},time)
	time += 500;

});







});