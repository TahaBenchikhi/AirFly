$(function(){
	

                      $('#datepicker2').datepicker({  
            
            inline: true,  
            showOtherMonths: true,
            dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            altField: "#date2",
        }); 


          $('#datepicker').datepicker({  
            
            inline: true,  
            showOtherMonths: true,
            dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
            altField: "#date",
        }); 


  var d= $(".aside1 .ui-state-active").text();
  var m= $(".aside1 .ui-datepicker-month").text();
  var y= $(".aside1 .ui-datepicker-year").text();
  $(".aside1 .date-date").text(d);
  $(".aside1 .date-month").text(m);
  $(".aside1 .date-year").text(y);
$("body").mousedown(function(event) {
    if(event.which==1) {
        setTimeout(function(){
  var d= $(".aside1 .ui-state-active").text();
  var m= $(".aside1 .ui-datepicker-month").text();
  var y= $(".aside1 .ui-datepicker-year").text();
  var x = $(".aside1 .ui-state-active").parent().index();
  switch(x)
  {
    case 0 : $(".aside1 div.date-day").text("Dimanche");
    break;
        case 1 :  $(".aside1 div.date-day").text("Lundi");
    break;
        case 2 :  $(".aside1 div.date-day").text("Mardi");
    break;
        case 3 :  $(".aside1 div.date-day").text("Mercredi");
    break;
        case 4 :  $(".aside1 div.date-day").text("Jeudi");
    break;
        case 5 :  $(".aside1 div.date-day").text("Vendredi");
    break;
        case 6 :  $(".aside1 div.date-day").text("Samedi");
    break;
  }
if(d)
{
  $(".aside1 .date-date").text(d);
  $(".aside1 .date-month").text(m);
  $(".aside1 .date-year").text(y);


}

},200);


    }
});


  var d= $(".aside2 .ui-state-active").text();
  var m= $(".aside2 .ui-datepicker-month").text();
  var y= $(".aside2 .ui-datepicker-year").text();
  $(".aside2 .date-date").text(d);
  $(".aside2 .date-month").text(m);
  $(".aside2 .date-year").text(y);
$("body").mousedown(function(event) {
    if(event.which==1) {
        setTimeout(function(){
  var d= $(".aside2 .ui-state-active").text();
  var m= $(".aside2 .ui-datepicker-month").text();
  var y= $(".aside2 .ui-datepicker-year").text();
  var x = $(".aside2 .ui-state-active").parent().index();
  switch(x)
  {
    case 0 : $(".aside2 div.date-day").text("Dimanche");
    break;
        case 1 :  $(".aside2 div.date-day").text("Lundi");
    break;
        case 2 :  $(".aside2 div.date-day").text("Mardi");
    break;
        case 3 :  $(".aside2 div.date-day").text("Mercredi");
    break;
        case 4 :  $(".aside2 div.date-day").text("Jeudi");
    break;
        case 5 :  $(".aside2 div.date-day").text("Vendredi");
    break;
        case 6 :  $(".aside2 div.date-day").text("Samedi");
    break;
  }
if(d)
{
  $(".aside2 .date-date").text(d);
  $(".aside2 .date-month").text(m);
  $(".aside2 .date-year").text(y);


}

},200);
    }
});


});

