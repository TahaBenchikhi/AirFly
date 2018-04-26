<?php


class client_template
{

  private $root;
  private $head;
  private $body;


    public function print_root()
    {
      $this->root="<html>";
      return $this->root;
    }



    public function print_head()
    {
        $this->head="<head>";
        
      /*****************LinkSearchBar************/
        $this->head .= NavBar::LinkNavBar();
       /******************************************/


        $this->head .= "<link href='../../../template/Client/css/style.css' rel='stylesheet' type='text/css' />"; 
         $this->head .= billet::LinkBillet();    
        $this->head .= " <script src='../../../template/Extras/Nav/inscri.js' type='text/javascript'></script>";
         $this->head .= " <script src='../../../template/Client/js/count.js' type='text/javascript'></script>";       
        $this->head .= " <script src='../../../template/Client/js/index.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Client/js/html2canvas.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Client/js/jspdf.js' type='text/javascript'></script>";                
        $this->head .= " <script src='../../../template/Client/js/app.js' type='text/javascript'></script>";    
        $this->head .= "<title>AIR FLY Plus Facile,Moins Couteuse</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body($place1,$place2)
  {
    $table2 = null;
    $i=0;
    $j=0;
    $table1 = $_SESSION['vol1'];
    if(isset($_SESSION['vol2']))$table2 = $_SESSION['vol2'];
         $this->body="<body>";


/**************Print Navigation Bar****************/   
         $this->body .=NavBar::GetNavBar();
/**************************************************/
     
          $this->body .="<div class='container'>";


          $this->body .="</div>";

  if($_SESSION['Data'] && $table1)
{
    foreach ($_SESSION['Data'] as $ms) {

    $this->body .=billet::GetBillet($ms[1],$ms[2],$table1['numvol'],$table1['gate'],$_SESSION['classe'],$table1['provenance'],$table1['destination'],$table1['datedepart2'],$table1['datedepart'],'ALLER',$place1[$i]);
  $i++;
    }
} 
  if($_SESSION['Data'] && $table2)
{
    foreach ($_SESSION['Data'] as $ms) {

    $this->body .=billet::GetBillet($ms[1],$ms[2],$table2['numvol'],$table2['gate'],$_SESSION['classe'],$table2['provenance'],$table2['destination'],$table2['datedepart2'],$table2['datedepart'],'RETOUR',$place2[$j]);
 $j++;
    }
} 





   $this->body .="<div class='box tickets'><ul class='left'>";
       $this->body .="<li></li>";
      $this->body .=" <li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
      $this->body .=" <li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
      $this->body .=" <li></li>";
      $this->body .=" <li></li>";
       $this->body .="<li></li></ul><ul class='right'>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li>";
       $this->body .="<li></li></ul><div class='ticket'>";
       $this->body .="<div class='content'><span>Merci Pour Votre Visite Et Bon Voyage</span><span>Vous Aller Etre Redirecter Dans <i>10</i></span><img src='../../../template/Extras/Image/logo.png'></div>";
       $this->body .="<div class='barcode'></div></div></div>";







          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>




