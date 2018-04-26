<?php


class SearchBar
{
  static $Bar;
  static $Link;
  
  public static function LinkSearchBar()
  {
        $Link= "<link href='../../../template/Extras/Search/calendar.css' rel='stylesheet' type='text/css' /> "; 
        $Link.= "<script src='../../../template/Extras/Search/jquerydatepicker.js' type='text/javascript'></script>";
        $Link.= "<script src='../../../template/Extras/Search/calendar.js' type='text/javascript'></script>";
        $Link.= "<script src='../../../template/Extras/Search/events.js' type='text/javascript'></script>";

        return $Link;
  }

  public static function GetSearchBar()
  {
    $d = null;
    $p = null;
    if(isset($_SESSION['DESTINATION']))
    {
        $d = $_SESSION['DESTINATION'];
        $p = $_SESSION['PROVENANCE'];
    }
  $Bar="<div id='search_cn'>";
  $Bar.="<div id='search'>";
    
                    $Bar.=" <aside class='aside1'>";
                    $Bar.="<div id='calendar'>";
                    $Bar.=" <div class='date-block ui-datepicker-trigger'>";
                    $Bar.=" <div class='date-day'></div>";
                    $Bar.=" <div class='date-date'></div>";
                    $Bar.=" <span class='date-month'></span>";
                    $Bar.=" <span class='date-year'></span>";
                    $Bar.="</div>";
                    $Bar.=" <div id='datepicker'></div>";
                    $Bar.=" </div>";
                    $Bar.="</aside> ";
                   

                    $Bar.=" <aside class='aside2'>";
                    $Bar.=" <div id='calendar'>";
                    $Bar.="<div class='date-block ui-datepicker-trigger'>";
                    $Bar.=" <div class='date-day'></div>";
                    $Bar.="<div class='date-date'></div>";
                    $Bar.=" <span class='date-month'></span>";
                    $Bar.=" <span class='date-year'></span>";
                    $Bar.=" </div>";
                    $Bar.=" <div id='datepicker2'></div>";
                    $Bar.="</div>";
                    $Bar.="</aside> ";
                 
            $Bar.="<form method='GET' action='http://localhost/AirFly/web/recherche/controller/' id='form_search'>";
            $Bar.="<img src='../../../template/Extras/Image/calendar.png'><input  id='date' type='text' required placeholder='Date Depart' readonly='readonly' name='date_depart'>"; 
            $Bar.="<img src='../../../template/Extras/Image/calendar.png'><input  id='date2' type='text'  placeholder='Date Retour' readonly='readonly' name='date_retour'>  "; 
            $Bar.="<img src='../../../template/Extras/Image/depart.png'><input  type='text' class='s1' required placeholder='Destination Depart' name='depart' value='".$p."' />";   
            $Bar.="<img src='../../../template/Extras/Image/retour.png'><input type='text' class='s2' required placeholder='Destination Arriver' name='retour' value='".$d."' />";
             $Bar.="<span id='places'><i>1 adulte</i><i></i><i></i></span>";
             $Bar.='<select name="class" id="class">';
             $Bar.='<option value="economique">Economique</option>';
             $Bar.='<option value="affaires">Affaires</option>';
             $Bar.='<option value="premiere">Premiere</option>';
             $Bar.='</select>';    
             $Bar.="<div class='choseplace'>";
             $Bar.="<p>Adultes</p><input type='number' name='adulte'  value='1' min='1'/>";
             $Bar.="<p>Enfant</p><input type='number' name='enfant'  value='0' min='0'/>";
             $Bar.="<p>Bébé</p><input type='number' name='bébé' value='0' min='0'/>";
             $Bar.=" </div>";
            $Bar.="<button id='find'><img src='../../../template/Extras/Image/search.png'></button>";
            $Bar.=" </form> ";   

    $Bar.=" </div>";
     $Bar.="<div id='search_background'></div>";
     $Bar.=" </div>";

    return $Bar;
  }

 

}          