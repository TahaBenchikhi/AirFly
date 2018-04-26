<?php


class login_template
{

  private $root;
  private $head;
  private $body;


    public function print_root()
    {
      $this->root="<html>";
      return $this->root;
    }



    public function print_head($NavLink,$SearchLink)
    {
        $this->head="<head>";
        
      /*****************LinkSearchBar************/
        $this->head .= $NavLink;
       /******************************************/

       /*****************LinkSearchBar************/
        $this->head .= $SearchLink;
       /******************************************/

       $this->head .= "<link href='../../../template/Login/css/style.css' rel='stylesheet' type='text/css' />";  
        $this->head .= " <script src='../../../template/Login/js/inscription.js' type='text/javascript'></script>";     
        $this->head .= "<title>AIR FLY Plus Facile,Moins Couteuse</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body($NavBar,$search)
  {
         $this->body="<body>";
         $this->body .="<div class='cn'>";

/**************Print Navigation Bar****************/   
         $this->body .=$NavBar;
/**************************************************/
     
         $this->body .="<div class='cn__body'>";
         $this->body .="<div class='cn__body__center'>";

/**************Print Search Bar****************/   
         $this->body .=$search;
/**************************************************/

         $this->body .= "<p class='text'><i>Air Fly </i>Reservation Plus Facile , Moins Couteuse</p>";
         $this->body .=  "<img src='../../../template/Extras/Image/yooo.png' id='decolage'/>";
         $this->body .="</div>";
         $this->body .="</div>";

         $this->body .="<div class='cn__footer'>";
         $this->body .="<div class='cn__footer__center'>";
         $this->body .="<span><img src='../../../template/Extras/Image/1.png'/><p>Choisir Destination</p><i></i></span>";
         $this->body .="<span><img src='../../../template/Extras/Image/2.png'/><p>Se Connecter</p><i></i></span>";
         $this->body .="<span><img src='../../../template/Extras/Image/3.png'/><p>Remplir Les Informations</p><i></i></span>";
         $this->body .= "<span><img src='../../../template/Extras/Image/4.png'/><p>Valider</p><i></i></span>";
         $this->body .= "<span><img src='../../../template/Extras/Image/5.png'/><p>Payer</p><i></i></span>";
         $this->body .= "<span><img src='../../../template/Extras/Image/6.png'/><p>Voyager</p></span>";
         $this->body .= "</div>";
         $this->body .="</div>";
         $this->body .="</div>";
         $this->body .="<div class='inscription'>";
         $this->body .="<form class='form_inscri' method='POST' action=''>";
         $this->body .="<div class='ligne'><p>INSCRIPTION</p><p>Veuillez Saisir Vos Donneés Pour L'Inscription</p>";
       $this->body .="<div class='errors_cn'>";
        if(isset($_SESSION["Errors"]))
          {
                  foreach ($_SESSION["Errors"] as $k) 
                  {
                        $this->body .="<div class='error'>".$k."</div>";
                      
                 }
                   $_SESSION["Errors"] = null;
           }
          $this->body .="</div>";
          if(isset($_GET['insc']))
          {
             $this->body .="<div id='showform'></div>";
          }

         $this->body .="</div>";
         $this->body .="<div class='ligne'>";
         $this->body .="<span class='col'><label>LOGIN *</label><input type='text' placeholder='Votre Login' name='Ilogin' required /></span>";
         $this->body .="<span class='col'><label>PASSWORD *</label><input type='password' placeholder='Password' name='Ipass' required /></span>";
         $this->body .="</div>";

         $this->body .="<div class='ligne'>";
         $this->body .="<span class='col'><label>NOM *</label><input type='text' placeholder='Votre Nom' name='Inom' required /></span>";
         $this->body .="<span class='col'><label>PRENOM *</label><input type='text' placeholder='Votre Prenom' name='Iprenom' required /></span>";
         $this->body .="</div>";

        $this->body .=" <div class='ligne'>";
         $this->body .="<span class='col'><label>EMAIL *</label><input type='email' placeholder='Example@gmail.com' name='Iemail' required /></span>";
         $this->body .="<span class='col'><label>N° CARTE (CIN)*</label><input type='text' placeholder='BJXXXXX' name='Icarte' required /></span>";
         $this->body .="</div>";

         $this->body .="<div class='ligne captcha'>";
         $this->body .="<label>CAPTCHA *</label>";
         $this->body .="<input type='text' placeholder='Captcha Code' required  name='captcha'/>";
         $this->body .="<div id='captcha1'><img id='captcha' src='../../../template/Extras/securimage/securimage_show.php' alt='CAPTCHA Image'/></div>";
         $this->body .="</div>";

         $this->body .="<div class='ligne end'>";
         $this->body .="<input type='checkbox' required/>";
         $this->body .="<p>J'accepete Les Termes de la contract</p>";
         $this->body .="<button>Valider</button>";
         $this->body .="</div>";
         $this->body .="</form>";
         $this->body .=" </div>";
         $this->body .="</body";
         $this->body .="</html>";




     return $this->body;
  }

}

?>
