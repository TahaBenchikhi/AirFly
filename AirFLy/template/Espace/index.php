<?php


class espace_template
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
       $this->head .= "<link href='../../../template/Espace/css/bootstrap.css' rel='stylesheet' type='text/css' />"; 
        $this->head .= "<link href='../../../template/Espace/css/bootstrap-responsive.css' rel='stylesheet' type='text/css' />";  
      /*****************LinkSearchBar************/
        $this->head .= NavBar::LinkNavBar();
       /******************************************/

       $this->head .= "<link href='../../../template/Espace/css/billet.css' rel='stylesheet' type='text/css' />";   
        $this->head .= "<link href='../../../template/Espace/css/jquery-confirm.css' rel='stylesheet' type='text/css' />"; 
        $this->head .= "<link href='../../../template/Espace/css/style.css' rel='stylesheet' type='text/css' />"; 
        $this->head .= "<link href='../../../template/Espace/css/airplane.css' rel='stylesheet' type='text/css' />";  
       
        $this->head .= " <script src='../../../template/Espace/js/bootstrap.js' type='text/javascript'></script>"; 
        $this->head .= " <script src='../../../template/Espace/js/jquery-confirm.js' type='text/javascript'></script>"; 
        $this->head .= " <script src='../../../template/Extras/Nav/inscri.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Espace/js/index.js' type='text/javascript'></script>";      
        $this->head .= " <script src='../../../template/Espace/js/reservation.js' type='text/javascript'></script>";  
        $this->head .= " <script src='../../../template/Espace/js/for.js' type='text/javascript'></script>";          
        $this->head .= " <script src='../../../template/Espace/js/formulaire.js' type='text/javascript'></script>";
        $this->head .= " <script src='../../../template/Client/js/html2canvas.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Client/js/jspdf.js' type='text/javascript'></script>";                
        $this->head .= " <script src='../../../template/Client/js/app.js' type='text/javascript'></script>";                      
        $this->head .= "<title>AIR FLY Plus Facile,Moins Couteuse</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body($T)
  {
         $this->body="<body>";

/**************Print Navigation Bar****************/   
         $this->body .=NavBar::GetNavBar();
/**************************************************/
     
          $this->body .="<div class='container'>";


    $this->body .="<section> ";
$this->body .="<div  class='tbl-header'>";
$this->body .="<table cellpadding='0' cellspacing='0' border='0'>";
 $this->body .=" <thead>";
    $this->body .="<tr>";
     $this->body .=" <th>N° Reservation</th>";
      $this->body .="<th>Nom</th>";
     $this->body .=" <th>Prenom</th>";
      $this->body .=" <th>Date Reservation</th>";
     $this->body .=" <th>N° Vol</th>";
     $this->body .=" <th>Place</th>";
     $this->body .=" <th>Supprimer</th>";
     $this->body .=" <th>Changer</th>";
     $this->body .=" <th>Temps Restant</th>";
    $this->body .="</tr>";
  $this->body .="</thead>";
$this->body .="</table>";
$this->body .="</div>";
$this->body .="<div  class='tbl-content'>";
$this->body .="<table cellpadding='0' cellspacing='0' border='0'>";
  $this->body .="<tbody>";
foreach($T as $t)
{  

$dates = explode(' ', $t['datereservation']);
$datetime1 = new DateTime($t['datereservation']);
$datetime1->add(new DateInterval('P2D'));
$d = new DateTime();
$seconds = strtotime($datetime1->format('d-m-Y H:i:s')) - strtotime($d->format('d-m-Y H:i:s')) ;


$days    = floor($seconds / 86400);
$hours   = floor($seconds/ 3600);
$minutes = floor(($seconds  - ($hours * 3600))/60);
$seconds = floor(($seconds -($hours * 3600) - ($minutes*60)));

if($hours >= 0 )
{
  if($hours < 10){$hours = "0".$hours;}
if($minutes < 10){$minutes = "0".$minutes;}
if($seconds < 10){$seconds = "0".$seconds;}

$this->body .=" <tr>";
          $this->body .=" <td>".$t['id']."</td>";
          $this->body .=" <td>".$t['nom']."</td>";
          $this->body .=" <td>".$t['prenom']."</td>";
          $this->body .=" <td>".$dates[0]."</td>";
          $this->body .=" <td>".$t['numvol']."</td>";
          $this->body .=" <td>".$t['place']."</td>";
          $this->body .=" <td><button class='rm'>Supprimer</button></td>";
          $this->body .=" <td><button class='ch'>Choisir</button></td>";
          $this->body .=" <td><span class='time'>".$hours.":".$minutes.":".$seconds."</span></td>";
          $this->body .= "<input type='hidden' id='cl' value='".$t['classe']."'/>"; 
          $this->body .= "<input type='hidden' id='d1' value='".format::Days($t['datedepart2'])." Le ".format::Days($t['datedepart'])."'/>"; 
          $this->body .= "<input type='hidden' id='g1' value='".$t['gate']."'/>";  
          $this->body .=" </tr>";}
 }
    
    
  $this->body .="</tbody>";
$this->body .="</table>";
$this->body .="</div>";
$this->body .="</section>";


          $this->body .="</div>";
/***************************************************Air Container********************************/


          $this->body .= "<div class='schema'>";
         $this->body .= "<div class='air_container'>";
       $this->body .="<img src='../../../template/Extras/Image/enfin.png' width='1200px' height='200px'>";
       $this->body .="<div class='first_class'></div>";
       $this->body .="<div class='midle_class'> </div>";
       $this->body .="<div class='last_class'> </div>";
       $this->body .="<p class='exit'>Exit</p>";
       $this->body .="<div class='map1'><span></span>Place Vide</div>";
              $this->body .="<div class='map2'><span></span>Place Deja Reserver</div>";
                     $this->body .="<div class='map3'><span></span>Votre Place</div>";
       $this->body .="<button class='valid'>Validation</button>";
       $this->body .="<button class='annuler'>Annuler</button>";
     
                 $this->body .= "<p>Selectioner Votre Place</p>";

       $this->body .="</div>";  
       $this->body .="</div>";  




/*************************************************************************************************/

$this->body .=billet::GetBillet('zzz','ssss','qqqq','dddd','fffff','Benchikhi','Taha','jjjj','kkkk','Modifier','nnnnn');

          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>


