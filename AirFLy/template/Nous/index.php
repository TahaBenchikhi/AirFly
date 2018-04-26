<?php


class nous_template
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


        $this->head .= "<link href='../../../template/Nous/css/style.css' rel='stylesheet' type='text/css' />"; 
         $this->head .= billet::LinkBillet();    
        $this->head .= " <script src='../../../template/Extras/Nav/inscri.js' type='text/javascript'></script>";
        $this->head .= "<title>AIR FLY Plus Facile,Moins Couteuse</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body()
  {

         $this->body="<body>";


/**************Print Navigation Bar****************/   
         $this->body .=NavBar::GetNavBar();
/**************************************************/
     
          $this->body .="<div class='container'>";


          $this->body .="</div>";

  





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
       $this->body .="<div class='content'>
       <span>AirFly Est une Application Creé Pour Notre Projet De Fin D'Etude</span>
       <span>Télephone : <i>06 99 93 31 12</i></span>
       <span>Email : <i>AirFly@gmail.com</i></span>
       <img src='../../../template/Extras/Image/logo.png' class='imk'></div>";
       $this->body .="<div class='barcode'></div></div></div>";







          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>




