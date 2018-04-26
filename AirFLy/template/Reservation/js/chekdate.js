$(function() {
$('div.form input:nth-child(4),input:nth-child(2),input:nth-child(3)').focus(function(){
  $(this).css({'border':'1px solid #CECDCD'});
});

var error;
$('div.f button').click(function(){
  error = 0;
  $('div.form').find('input:nth-child(4)').css({'border':'1px solid #CECDCD'});
  $('div.form').each(function(){
var t = $(this).find('input:nth-child(4)').val();
var type = $(this).find('p:nth-child(5) i').text();
$(this).find('input:nth-child(4),input:nth-child(2),input:nth-child(3)').addClass('begin');
if(type=='Adulte' && !isadulte(t))
  {$(this).find('input:nth-child(4)').css({'border':'2px solid rgba(244, 67, 54, 0.66)'});error++;alert("Desolé Vous n'ete pas un adulte");
$(this).find('input:nth-child(4)').removeClass('begin');
}
if(type=='Enfant' && !isenfant(t))
  {$(this).find('input:nth-child(4)').css({'border':'2px solid rgba(244, 67, 54, 0.66)'});error++;alert("Desolé Vous n'ete pas un Enfant");
$(this).find('input:nth-child(4)').removeClass('begin');
}
if(type=='Bebe' && !isbebe(t))
  {$(this).find('input:nth-child(4)').css({'border':'2px solid rgba(244, 67, 54, 0.66)'});error++;alert("Desolé Vous n'ete pas un bebe");
$(this).find('input:nth-child(4)').removeClass('begin');
}
/**************************chek prenom et nom*****************************/
var nom =  $(this).find('input:nth-child(2)').val().length;
var prenom = $(this).find('input:nth-child(3)').val().length;
if(nom == 0)
{
  $(this).find('input:nth-child(2)').css({'border':'2px solid rgba(244, 67, 54, 0.66)'});error++;alert('Veuillez saisir votre nom');
$(this).find('input:nth-child(2)').removeClass('begin');
}
if(prenom == 0)
{
  $(this).find('input:nth-child(3)').css({'border':'2px solid rgba(244, 67, 54, 0.66)'});error++;alert('Veuillez saisir votre prenom');
$(this).find('input:nth-child(3)').removeClass('begin');
}

/******************************************************************************/
  });

$('.begin').css({'border':'2px solid #4CAF50'});



});





  $('div.f button').click(function(){
  var one = [];
  var two = [];
  var i = 0;
$('div.form').each(function(){
var vplace = $(this).find('input.plac').val();
var vnom = $(this).find('input:nth-child(2)').val();
var civiliter = $(this).find('select').val();
var vprenom = $(this).find('input:nth-child(3)').val();
var date = $(this).find('input:nth-child(4)').val();
var classe = $('input#cl').val();

two = [civiliter,vnom,vprenom,date,vplace,classe];
one[i] = two;
i++;
});

  if(error == 0)
    {
      $.post("http://localhost/AirFly/web/client/controller/",{"Data":one},function(retour){
     if (retour == 1) 
     {
      window.location.href = 'http://localhost/AirFly/web/client/controller/';
     }
      });
   }


 
});

});



function isadulte(dates)
{
 var chek = getAge(dates);
 if(chek >= 16) 
  return true;
else
  return false;
}
function isenfant(dates)
{
 var chek = getAge(dates);
 if(chek >= 4 && chek < 16) 
  return true;
else
  return false;
}
function isbebe(dates)
{
 var chek = getAge(dates);
 if(chek > 0 && chek < 4) 
  return true;
else
  return false;
}




function getAge(dateString) {
    var today = new Date();
    var birthDate = new Date(dateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return age;
}























































/*function chekdate(datee)
{
  var valdate = datee;
  if(valdate == '')
    return false;
  

  var format = /^(\d{1,2})(\/|-)(\d{1,2})(\/|-)(\d{4})$/; 
  var cheking = valdate.match(format); 

  if (cheking == null)
     return false;
 

  dmois = cheking[1];
  dday= cheking[3];
  danne = cheking[5];

  if (dmois < 1 || dmois > 12)
      return false;
  else if (dday < 1 || dday> 31)
      return false;
  else if ((dmois==4 || dmois==6 || dmois==9 || dmois==11) && dday ==31)
      return false;
  else if (dmois == 2)
  {
     var isleap = (danne % 4 == 0 && (danne % 100 != 0 || danne % 400 == 0));
     if (dday> 29 || (dday ==29 && !isleap))
          return false;
  }
  return true;
}*/