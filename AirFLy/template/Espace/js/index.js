$(function(){


$('tbody tr').each(function(){
timeout($(this));
});


$('button.rm').click(function(){
var d = $(this);

	$.confirm({
    title: 'Suppression',
    content: 'Vous Voulez Vraiment Supprimer Cette Reservation',
    confirmButton : 'Confirmer',
    cancelButton : 'Nom',
    confirm: function(){
    	var id = $(d).parent().parent().find('td:first-child').text();
    	
$.post("http://localhost/AirFly/web/espace/controller/",{"id":id},function(retour){
 
if(retour==1)
{
	$.alert({
	title: '',
	content : 'Suppression Avec Succes',
	confirmButton : 'OK',
	confirm: function(){
		window.location.reload();
	}
});
	
}


});

    },
    cancel: function(){
      $.alert({
	title: '',
	content : 'Annuler La Suppression',
	confirmButton : 'OK',
})
    }
});

});



	
});
function timeout(x)
{


	var s = setInterval(function(){
				var time = $(x).find('span.time').text();
				var array = time.split(':');
				var h = array[0];
				var m = array[1];
				var s = array[2];
				s = parseInt(s);
				m = parseInt(m);
				h = parseInt(h);
				s = parseInt(s);
				m = parseInt(m);
				h = parseInt(h);
            if(s==0)
            {
             s=60;
             m=m-1;
             if(m == -1)
             {
             	m = 59;
             	h = h-1;
             }
            }
         s= s - 1;

    if(h == -1) {$(x).remove();}
				if(s < 10) s = "0"+s;
				if(m < 10) m = "0"+m;
				if(h < 10) h = "0"+h;

                   $(x).find('span.time').text(h+":"+m+":"+s);


		    },1000);
	
}