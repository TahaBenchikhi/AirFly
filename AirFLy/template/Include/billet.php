<?php
class billet
{
  static $Billet;
  static $Link;
  public static function LinkBillet()
  {       

        $Link = "<link href='../../../template/Extras/Billet/billet.css' rel='stylesheet' type='text/css' />"; 

        return $Link;
  }

  public static function GetBillet($a,$b,$c,$d,$e,$f,$g,$i,$j,$k,$place)
  {       
        
      $Billet ="<div class='box ".$k."'>";

	  $Billet .="<ul class='left'>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>";
	  $Billet .="</ul>";
  
	  $Billet .="<ul class='right'>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>";
       $Billet .="</ul>";
       $Billet .="<div class='ticket'>";
       $Billet .=" <span class='airline'>Air Fly</span>";
       $Billet .="<span class='airline airlineslip'>Air Fly</span>";
       $Billet .=" <span class='boarding'>TICKET ".$k."</span>";
       $Billet .=" <div class='content'>";
       $Billet .=" <span class='jfk n'>".$f."</span>";
       $Billet .="<span class='plane'><path d='M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z' fill='#222' stroke-linejoin='round' stroke-width='10'/></g></svg></span>";
       $Billet .="<span class='sfo y'>".$g."</span>";
      
       $Billet .="<span class='jfk jfkslip'>".$f."</span>";
       $Billet .="<span class='plane planeslip'><path d='M98 325c-9 10 10 16 25 6l311-156c24-17 35-25 42-50 2-15-46-11-78-7-15 1-34 10-42 16l-56 35 1-1-169-31c-14-3-24-5-37-1-10 5-18 10-27 18l122 72c4 3 5 7 1 9l-44 27-75-15c-10-2-18-4-28 0-8 4-14 9-20 15l74 63z' fill='#222' stroke-linejoin='round' stroke-width='10'/></g></svg></span>";
      $Billet .="<span class='sfo sfoslip'>".$g."</span>";
      $Billet .="<div class='sub-content'>";
       $Billet .=" <span class='watermark'>Air Fly</span>";
       $Billet .=" <span class='namek'>NOM DE PASSENGER <br><span>".$b.",".$a."</span></span>";
       $Billet .=" <span class='flight'>VOL N&deg;<br><span>".$c."</span></span>";
       $Billet .=" <span class='gate'>GATE<br><span>".$d."</span></span>";
       $Billet .=" <span class='seat'>PLACE<br><span>".$place."</span></span>";
       $Billet .=" <span class='classe'>CLASSE<br><span>".$e."</span></span>";
       $Billet .=" <span class='boardingtime'>DATE DE DEPART<br><span>".$i." Le ".$j."</span></span>";
            
       $Billet .="  <span class='flight flightslip'>VOL N&deg;<br><span>".$c."</span></span>";
        $Billet .=" <span class='gate gateslip'>GATE<br><span>".$d."</span></span>";
       $Billet .="   <span class='seat seatslip'>PLACE<br><span>".$place."</span></span>";
       $Billet .="  <span class='namek nameslip'>NOM DE PASSENGER<br><span>".$b.",".$a."</span></span>";
       $Billet .=" <span class='classe classeslip'>CLASSE<br><span>".$e."</span></span>";
       $Billet .=" </div>";
       $Billet .="</div>";
       $Billet .="<div class='barcode'></div>";
       $Billet .="<div class='barcode slip'></div>";
       $Billet .="<div class='strips'></div>";

       $Billet .="</div>";
       $Billet .="</div>";

return $Billet;
       
  }
  

   }    

  ?> 