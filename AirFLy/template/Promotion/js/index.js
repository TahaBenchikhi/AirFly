$(function(){
$('div.promo button').click(function(){
var des = $(this).parent().find('p i:nth-child(1)').text();
var fullDate = new Date()
var twoDigitMonth = ((fullDate.getMonth().length+1) === 1)? (fullDate.getMonth()+1) : '0' + (fullDate.getMonth()+1);
var date = fullDate.getDate();
if(date < 10) date = '0'+date;
 
var currentDate = fullDate.getFullYear()+ "-" + twoDigitMonth + "-" + date;


window.location.href = 'http://localhost/AirFly/web/recherche/controller/?date_depart='+currentDate+'&date_retour=&depart=casablanca&retour='+des+'&class=economique&adulte=1&enfant=0&b%C3%A9b%C3%A9=0';
});



});