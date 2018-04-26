	$(function(){
var chek = $('div.two').length;
var c = 0;
$('div.one').each(function(){
c++;
});
$('div.found').text(c+' Resultas Trouvées...');
/******************************************************************************************/
if(chek > 0)
{
	

	$('span.confirm').click(function(){
		var p = $(this).parent().parent().parent().prev('div.one');
		var ps = $(this).parent().parent();

		var num = $(p).find('div.one_detail p:nth-child(3) i').text();
		var adulte = $(p).find('div.one_detail p:nth-child(8) i:nth-child(1)').text();
		var enfant = $(p).find('div.one_detail p:nth-child(9) i:nth-child(1)').text();
		var bebe = $(p).find('div.one_detail p:nth-child(10) i:nth-child(1)').text();
		var classe = $(p).find('div.one_detail span:nth-child(7)').text(); 
        var num2 = $(ps).find('div.back_detail p:nth-child(3) i').text();

		var thins = '"num":"'+num+'","adulte":"'+adulte+'","enfant":"'+enfant+'","bebe":"'+bebe+'","classe":"'+classe+'","num2":"'+num2+'"';
		
        var Data = '{'+thins+'}';

		form(Data);


});


	$('.back').click(function(){

	var thi = $(this).parent().parent();
	var s = $(thi).next('div.two');


	$(s).slideDown( "slow");

});
$('.back_cnt_detail').click(function(){

			var thi = $(this).parent();
	var s = $(thi).next('div.back_detail');
var sa = $(s).is(":visible");

	$(s).slideDown( "slow");

});
$('.close_back_detail').click(function(){
	var s= $(this).parent();


	$(s).slideUp( 1000);
	

});

$('.close_back').click(function(){
	var s= $(this).parent().parent().parent();


	$(s).slideUp( 1000);
	

});


$('.one_cnt_detail').click(function(){
		var thi = $(this).parent();
	var s = $(thi).next('div.one_detail');
var sa = $(s).is(":visible");


	$(s).slideDown( "slow");

});
$('.close_one_detail').click(function(){
	var s= $(this).parent();


	$(s).slideUp( 1000);
	

});

}
/***************************************************************************************************************/
else
{
	$('.close_one_detail').click(function(){
	var s= $(this).parent();


	$(s).slideUp( 1000);
	

});
$('.one_cnt_detail').click(function(){
		var thi = $(this).parent();
	var s = $(thi).next('div.one_detail');
var sa = $(s).is(":visible");


	$(s).slideDown( "slow");

});


	$('.back').click(function(){
		var p = $(this).parent().parent();
		var num = $(p).find('div.one_detail p:nth-child(3) i').text();
		var adulte = $(p).find('div.one_detail p:nth-child(8) i:nth-child(1)').text();
		var enfant = $(p).find('div.one_detail p:nth-child(9) i:nth-child(1)').text();
		var bebe = $(p).find('div.one_detail p:nth-child(10) i:nth-child(1)').text();
		var classe = $(p).find('div.one_detail span:nth-child(7)').text();
		
        var thins = '"num":"'+num+'","adulte":"'+adulte+'","enfant":"'+enfant+'","bebe":"'+bebe+'","classe":"'+classe+'"';
		
        var Data = '{'+thins+'}';

		form(Data);
});


}


  });



function form(Data)
{
	var url = 'http://localhost/AirFly/web/reservation/controller/';
	var forms = '<input type="text" name="reservation" value="reservation" />';
    var Data = $.parseJSON(Data);

       $.each(Data, function(k, v) {
             forms+='<input type="text" name="'+k+'" value="'+v+'" />';
        });
	
        var form = $('<form method="post" action="' + url + '" >'+forms+'</form>');
        var s = $('')

		$('body').append(form);
		form.submit();
		
		
}




