<?php


class recherche_template
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

       /*****************LinkSearchBar************/
        $this->head .= SearchBar::LinkSearchBar();
       /******************************************/

        $this->head .= "<link href='../../../template/Recherche/css/style.css' rel='stylesheet' type='text/css' />";  
        $this->head .= "<link href='../../../template/Recherche/css/new.css' rel='stylesheet' type='text/css' />";  
        $this->head .= " <script src='../../../template/Extras/Nav/inscri.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Recherche/js/index.js' type='text/javascript'></script>";
        $this->head .= " <script src='../../../template/Recherche/js/aaa.js' type='text/javascript'></script>";                 
        $this->head .= "<title>AIR FLY Plus Facile,Moins Couteuse</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body($k,$z)
  {
         $this->body="<body>";
/******************************Auto Remplisage Des Champs Du Formulaire**********************/
if(isset($_GET['retour']))
{
  $_SESSION['DESTINATION'] = $_GET['retour'];
  $_SESSION['PROVENANCE'] = $_GET['depart'];
  $_SESSION['RETOUR'] = $_GET['date_retour'];
  $_SESSION['ALLER'] = $_GET['date_depart'];
}
/**************Print Navigation Bar****************/   
         $this->body .=NavBar::GetNavBar();
/**************************************************/
     
          $this->body .="<div class='container'>";

/**************Print Search Bar****************/   
         $this->body .=SearchBar::GetSearchBar();
/**************************************************/

 $this->body .='<div class="nofound">Aucun vol trouvé</div>';
 if($z)
 {
              $this->body .='<div class="info">';
            $this->body .='<p><i></i> <i>'.$z["codeIATA"].'</i> <i>'.$z["codeIATA2"].'</i> <i>'.$z["ville"].'</i><i>'.$z["ville2"].'</i></p>';
           $this->body .='<p><i></i><i>X '.intval($_GET['bébé']).'</i><i></i><i>X '.intval($_GET['enfant']).'</i><i></i><i>X '.intval($_GET['adulte']).'</i></p>';
            $this->body .='</div>';}

        if($k)
         { 



        
          $this->body .='<div class="found"></div>';
        
         
          $this->body .='<div class="flights">';
          foreach ($k as $ks)
         {
        if($ks['vv'])
          {


                         $this->body .='<div class="one">';
                  
                           $this->body .='<div class="one_cnt">';
                           $this->body .='<div class="direct">';
                             $this->body .='<p>'.$ks['time'].'<i></i></p>';
                     if($ks['escale'] == 'direct'){$this->body .='<span>Vol Direct</span>';}
                     else{$this->body .='<span style="background-color:#607D8B;">Escale '.$ks['escale'].'</span>';}
                             $this->body .='<p> '.substr($ks["hdepart"], 0, 5).'<i>'.$ks["provenance"].'</i></p>';
                             $this->body .='<p>'.substr($ks["harriver"], 0, 5).'<i>'.$ks["destination"].'</i></p>';
                           $this->body .='</div>';
                            $this->body .='<p id="cmpy">'.$ks["company"].'</p>';
                             $this->body .='<img src="../../../template/Extras/CompanyImage/'.$ks["company"].'.png"/>';
                            $this->body .='<div class="tarif">';

                          $adulte = intval($_GET['adulte']);
                          $enfant = intval($_GET['enfant']);
                          $bébé = intval($_GET['bébé']);  
                          $tot = $ks["total"];



                          $this->body .='<p>'.substr($tot, 0, strpos($tot,'.')).'<i>,'.substr($tot,strpos($tot,'.')+1,strlen($tot)).'</i><i>Dh</i></p>';
                              $this->body .=' <p>Total :</p>';
                               $this->body .='<p>/personne aller et retour <i>'.substr($ks["prix"], 0, strpos($ks["prix"],'.')).'</i><i>,'.substr($ks["prix"],strpos($ks["prix"],'.')+1,strlen($ks["prix"])).'</i><i>Dh</i></p>';
                  
                  
                            $this->body .='</div>';
                            $this->body .='<span class="one_cnt_detail">Détails <i>+</i></span>';
                                    if(is_array($ks['vv'])){ $this->body .='<span class="back" style="background:#607D8B;">Choisir Retour <i></i></span>';}
                                    else{ $this->body .='<span class="back">Choisir Ce Vol<i></i></span>';}
                           
                           
                            $this->body .='</div>';
                  
                           $this->body .='<div class="one_detail">';
                           $this->body .='<p class="close_one_detail">X</p>';

                       

                           $this->body .='<p>'.$ks["datedepart2"].' '.$ks["datedepart"].'</p>';
                           $this->body .='<p>'.$ks["company"].' - <i>'.$ks["numvol"].'</i></p>';
                           $this->body .='<p>Depart : <i>'.substr($ks["hdepart"], 0, 5).'</i><i>'.$ks["provenance"].'</i>
                           <i>'.$ks["iatapro"].'-'.$ks["gate"].'</i></p>';
                           $this->body .='<p>Arrivée : <i>'.substr($ks["harriver"], 0, 5).'</i><i>'.$ks["destination"].'</i>
                           <i>'.$ks["iatades"].'-'.$ks["gate"].'</i></p>';

                           $this->body .='<p>Durée : <i>'.$ks['time'].'</i></p>';

                           $this->body .='<span>'.$_GET['class'].'</span>';
                           $this->body .='<p>Adulte * <i>'.$adulte.'</i> <i>'.$ks["prix"].'</i><i>*</i><i>'.$adulte.'</i><i>=</i>
                           <i>'.($ks["prix"] * $adulte).'</i><i>Dh</i></p>';
                           $this->body .='<p>Enfant * <i>'.$enfant.'</i> <i>'.($ks["prix"]-($ks["prix"] * ($ks["enfant"]/100)  )).'</i><i>*</i><i>'.$enfant.'</i><i>=</i><i>'.(($ks["prix"]-($ks["prix"] * ($ks["enfant"]/100)  )) * $enfant).'</i><i>Dh</i></p>';
                           $this->body .='<p>Bébé * <i>'.$bébé.'</i> <i>'.($ks["prix"]-($ks["prix"] * ($ks["bebe"]/100)  )).'</i><i>*</i><i>'.$bébé.'</i><i>=</i><i>'.(($ks["prix"]-($ks["prix"] * ($ks["bebe"]/100)  )) * $bébé).'</i><i>Dh</i></p>';
                           $this->body .='<img src="../../../template/Extras/CompanyImage/'.$ks["company"].'.png"/>';
                           $this->body .='</div>';
                         $this->body .='</div>';
        if(is_array($ks['vv']) )
        {

            $this->body .='<div class="two">';
          

        foreach ($ks['vv'] as $ts)
          {

                  $this->body .='<span class="back_list">';
                      $this->body .='<div class="back_cnt"> ';
                      $this->body .='<span class="back_cnt_detail">Détails <i>+</i></span>';          
                      $this->body .='<span class="confirm">Confirmer Le Vol</span>';
                              
                   $this->body .='<div class="direct">';
                     $this->body .='<p>'.$ts['time'].'<i></i></p>';
                     if($ts['escale'] == 'direct'){$this->body .='<span>Vol Direct</span>';}
                     else{$this->body .='<span style="background-color:#555;">Escale '.$ts['escale'].'</span>';}
                             $this->body .='<p> '.substr($ts["hdepart"], 0, 5).'<i>'.$ts["provenance"].'</i></p>';
                             $this->body .='<p>'.substr($ts["harriver"], 0, 5).'<i>'.$ts["destination"].'</i></p>';
                   $this->body .='</div>';
                    $this->body .='<p id="cmpy">'.$ts["company"].'</p>';
                     $this->body .='<img src="../../../template/Extras/CompanyImage/'.$ts["company"].'.png"/>';
                   $this->body .='<p class="close_back">X</p>';
                  $this->body .='<div class="tarif">';
                      
                          $adulte = intval($_GET['adulte']);
                          $enfant = intval($_GET['enfant']);
                          $bébé = intval($_GET['bébé']);  
                          $tote = $ts["total"];



                          $this->body .='<p>'.substr($tote, 0, strpos($tote,'.')).'<i>,'.substr($tote,strpos($tote,'.')+1,strlen($tote)).'</i><i>Dh</i></p>';
                              $this->body .=' <p>Total :</p>';
                               $this->body .='<p>/personne aller et retour <i>'.substr($ts["prix"], 0, strpos($ts["prix"],'.')).'</i><i>,'.substr($ts["prix"],strpos($ts["prix"],'.')+1,strlen($ts["prix"])).'</i><i>Dh</i></p>';
          
          
                    $this->body .='</div>';
                     $this->body .=' </div>';
                   $this->body .='<div class="back_detail">';
                   $this->body .='<p class="close_back_detail">X</p>';


                    $this->body .='<p>'.$ts["datedepart2"].' '.$ts["datedepart"].'</p>';
                    $this->body .='<p>'.$ts["company"].' - <i>'.$ts["numvol"].'</i></p>';
                    $this->body .='<p>Depart : <i>'.substr($ts["hdepart"], 0, 5).'</i><i>'.$ts["provenance"].'</i>
                           <i>'.$ts["iatapro"].'-'.$ts["gate"].'</i></p>';
                   $this->body .='<p>Arrivée : <i>'.substr($ts["harriver"], 0, 5).'</i><i>'.$ts["destination"].'</i>
                           <i>'.$ts["iatades"].'-'.$ts["gate"].'</i></p>';
                   $this->body .='<p>Durée : <i>'.$ts['time'].'</i></p>';

                           $this->body .='<span>'.$_GET['class'].'</span>';
                           $this->body .='<p>Adulte * <i>'.$adulte.'</i> <i>'.$ts["prix"].'</i><i>*</i><i>'.$adulte.'</i><i>=</i>
                           <i>'.($ts["prix"] * $adulte).'</i><i>Dh</i></p>';
                           $this->body .='<p>Enfant * <i>'.$enfant.'</i> <i>'.($ts["prix"]-($ts["prix"] * ($ts["enfant"]/100)  )).'</i><i>*</i><i>'.$enfant.'</i><i>=</i><i>'.(($ts["prix"]-($ts["prix"] * ($ts["enfant"]/100)  )) * $enfant).'</i><i>Dh</i></p>';
                           $this->body .='<p>Bébé * <i>'.$bébé.'</i> <i>'.($ts["prix"]-($ts["prix"] * ($ts["bebe"]/100)  )).'</i><i>*</i><i>'.$bébé.'</i><i>=</i><i>'.(($ts["prix"]-($ts["prix"] * ($ts["bebe"]/100)  )) * $bébé).'</i><i>Dh</i></p>';
                          
                   $this->body .='<img src="../../../template/Extras/CompanyImage/'.$ts["company"].'.png"/>';
                   $this->body .='</div>';
                  $this->body .='</span>';
          
          
          
                 
               }$this->body .='</div>';
        }
   }
                  }
         
       
         
         $this->body .='</div>';
       }





       







          $this->body .="</div>";
          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>
