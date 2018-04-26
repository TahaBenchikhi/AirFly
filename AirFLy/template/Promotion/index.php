<?php


class promotion_template
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

        $this->head .= "<link href='../../../template/Promotion/css/style.css' rel='stylesheet' type='text/css' />";  
        $this->head .= " <script src='../../../template/Extras/Nav/inscri.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Promotion/js/index.js' type='text/javascript'></script>"; 
        $this->head .= " <script src='../../../template/Promotion/js/show.js' type='text/javascript'></script>";           
        $this->head .= "<title>AIR FLY Plus Facile,Moins Couteuse</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body($promo)
  {
    $c=0;
         $this->body="<body>";


/**************Print Navigation Bar****************/   
         $this->body .=NavBar::GetNavBar();
/**************************************************/
     
          $this->body .="<div class='container'>";
          $this->body .="<form action='../../promotion/controller/' class='sf'>";
          $this->body .="<input type='search' name='pays' placeholder='Pays'/>";
          $this->body .="<input type='search' name='ville' placeholder='Ville'/>";
          $this->body .='<button><img src="../../../template/Extras/Image/search.png"></button>';  
           $this->body .="</form>";

          $this->body .="<div class='promos'>";

      foreach ($promo as $P) {
     
 
          $this->body .="<div class='promo'>";
           $this->body .="<img src='../../../template/Extras/VilleImage/".$P['img'].".jpg'>";
           $this->body .="<p><i>".$P['ville']."</i><i>à partir de</i><i>".$P['prixmin']."</i><i>Dh / ttc</i><i>Jusqu'au ".$P['datefin']."</i></p>";
           $this->body .="<div class='desc'>".$P['description']."</div>";
         $this->body .='<button>Chercher</button>';    
          $this->body .="</div>";
 $c++;
          }
           $this->body .='<div class="found">'.$c.' Resultas Trouvées...</div>';
          $this->body .="</div>";


          $this->body .="</div>";
          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>
