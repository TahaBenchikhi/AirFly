<?php


class Reservation_template
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

        $this->head .= "<link href='../../../template/Reservation/css/style.css' rel='stylesheet' type='text/css' />";  
        $this->head .= "<link href='../../../template/Reservation/css/schema.css' rel='stylesheet' type='text/css' />";  
        $this->head .= " <script src='../../../template/Extras/Nav/inscri.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Reservation/js/index.js' type='text/javascript'></script>";
        $this->head .= " <script src='../../../template/Reservation/js/reservation.js' type='text/javascript'></script>";        
        $this->head .= " <script src='../../../template/Reservation/js/formulaire.js' type='text/javascript'></script>";   
        $this->head .= " <script src='../../../template/Reservation/js/chekdate.js' type='text/javascript'></script>";            
        $this->head .= "<title>AIR FLY Plus Facile,Moins Couteuse</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body($k,$z)
  {
         $this->body="<body>";


/**************Print Navigation Bar****************/   
         $this->body .=NavBar::GetNavBar();
/**************************************************/
          /*******************************************************************************************/
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
                     $this->body .="<div class='map4'><span></span>Place de Vos Camarde</div>";
       $this->body .="<button class='valid'>Validation</button>";
       $this->body .="<button class='annuler'>Annuler</button>";
       $this->body .= "<input type='hidden' id='cl' value='".$_POST["classe"]."'/>";       
                 $this->body .= "<p>Selectioner Votre Place</p>";

       $this->body .="</div>";  
       $this->body .="</div>";  
  /*******************************************************************************************/     
          $this->body .="<div class='container'>";

           $this->body .="<div class='flights'>";
                     if(!$z){    $this->body .='<div class="one" style="left:262px";>'; }
                     else{    $this->body .='<div class="one">'; }
                           $this->body .='<div class="one_cnt">';
                           $this->body .='<div class="direct">';
                             $this->body .='<p>'.$k['time'].'<i></i></p>';
                           if($k['escale'] == 'direct'){$this->body .='<span>Vol Direct</span>';}
                           else{$this->body .='<span style="background-color:#607D8B;">Escale '.$k['escale'].'</span>';}
                             $this->body .='<p> '.substr($k["hdepart"], 0, 5).'<i>'.$k["provenance"].'</i></p>';
                             $this->body .='<p>'.substr($k["harriver"], 0, 5).'<i>'.$k["destination"].'</i></p>';
                           $this->body .='</div>';
                            $this->body .='<p id="cmpy">'.$k["company"].'</p>';
                             $this->body .='<img src="../../../template/Extras/CompanyImage/'.$k["company"].'.png"/>';
                           



                           $this->body .='<div class="one_detail">';
                           $this->body .='<p>Vol Depart</p>';

                           $this->body .='<p>'.$k["datedepart2"].' '.$k["datedepart"].'</p>';
                           $this->body .='<p>'.$k["company"].' - <i>'.$k["numvol"].'</i></p>';
                           $this->body .='<p>Depart : <i>'.substr($k["hdepart"], 0, 5).'</i><i>'.$k["provenance"].'</i>
                           <i>'.$k["iatapro"].'-'.$k["gate"].'</i></p>';
                           $this->body .='<p>Arrivée : <i>'.substr($k["harriver"], 0, 5).'</i><i>'.$k["destination"].'</i>
                           <i>'.$k["iatades"].'-'.$k["gate"].'</i></p>';

                           $this->body .='<p>Durée : <i>'.$k['time'].'</i></p>';

                           $this->body .='<span>'.$_POST["classe"].'</span>';
                           $this->body .='<img src="../../../template/Extras/CompanyImage/'.$k["company"].'.png"/>';
                           $this->body .='</div>';
                         $this->body .='</div>';
                         $this->body .='</div>';

if($z){
                       $this->body .='<div class="one">';
                  
                           $this->body .='<div class="one_cnt">';
                           $this->body .='<div class="direct">';
                             $this->body .='<p>'.$z['time'].'<i></i></p>';
                           if($z['escale'] == 'direct'){$this->body .='<span>Vol Direct</span>';}
                           else{$this->body .='<span style="background-color:#607D8B;">Escale '.$z['escale'].'</span>';}
                             $this->body .='<p> '.substr($z["hdepart"], 0, 5).'<i>'.$z["provenance"].'</i></p>';
                             $this->body .='<p>'.substr($z["harriver"], 0, 5).'<i>'.$z["destination"].'</i></p>';
                           $this->body .='</div>';
                            $this->body .='<p id="cmpy">'.$z["company"].'</p>';
                             $this->body .='<img src="../../../template/Extras/CompanyImage/'.$z["company"].'.png"/>';
                           



                           $this->body .='<div class="one_detail">';
                           $this->body .='<p>Vol Retour</p>';

                           $this->body .='<p>'.$z["datedepart2"].' '.$z["datedepart"].'</p>';
                           $this->body .='<p>'.$z["company"].' - <i>'.$z["numvol"].'</i></p>';
                           $this->body .='<p>Depart : <i>'.substr($z["hdepart"], 0, 5).'</i><i>'.$z["provenance"].'</i>
                           <i>'.$z["iatapro"].'-'.$z["gate"].'</i></p>';
                           $this->body .='<p>Arrivée : <i>'.substr($z["harriver"], 0, 5).'</i><i>'.$z["destination"].'</i>
                           <i>'.$z["iatades"].'-'.$z["gate"].'</i></p>';

                           $this->body .='<p>Durée : <i>'.$z['time'].'</i></p>';

                           $this->body .='<span>'.$_POST["classe"].'</span>';
                           $this->body .='<img src="../../../template/Extras/CompanyImage/'.$z["company"].'.png"/>';
                           $this->body .='</div>';
                         $this->body .='</div>';
                         $this->body .='</div>';
}
 
        $this->body .="</div>";


            $this->body .="<div id='all'>";
             $this->body .="<div class='titling'><i></i>Veuillez Remplir Les Formulaires : </div>";

                 $this->body .="<div class='forms'>";   
                 for ($i=0; $i < $_POST['adulte'] ; $i++) { 
                $this->body .="<div class='form'>

              <select name='sexe'>
              <option value='monsieur'>Monsieur</option>
              <option value='madame'>Madame</option>
              </select>
              <input type='text' name='nom' placeholder='Nom'/>
              <input type='text' name='prenom' placeholder='Prenom'/>
                 <input type='date' name='date'/>
                 <p><i>Adulte</i>".($i+1)." :</p>
                 <span class='chema'>Choisir Ta Place +300 dh</span>
                 <input type='hidden' class='plac' />
                 </div>";
                 }
                 for ($i=0; $i < $_POST['enfant'] ; $i++) { 
                $this->body .="<div class='form'>
              <select name='sexe'>
              <option value='garcon'>Garçon</option>
              <option value='fille'>Fille</option>
              </select>
              <input type='text' name='nom' placeholder='Nom'/>
              <input type='text' name='prenom' placeholder='Prenom'/>
                 <input type='date' name='date' />
                 <p><i>Enfant</i>".($i+1)." :</p>
                 <span class='chema'>Choisir Ta Place +300 dh</span>
                 <input type='hidden' class='plac' />
                 </div>";
                 }
                 for ($i=0; $i < $_POST['bebe'] ; $i++) { 
                $this->body .="<div class='form'>
              <select name='sexe'>
              <option value='garcon'>Garçon</option>
              <option value='fille'>Fille</option>
              </select>
              <input type='text' name='nom' placeholder='Nom'/>
              <input type='text' name='prenom' placeholder='Prenom'/>
                 <input type='date' name='date'  />
                 <p><i>Bebe</i>".($i+1)." :</p>
                 <span class='chema'>Choisir Ta Place +300 dh</span>
                 <input type='hidden' class='plac' />
                 </div>";
                 }
                 if($z){$this->body .="<div class='f'><span><i>Total</i><i>=</i><i>".($k["total"]+$z["total"])." dh</i></span><button><i></i> Reserver</button></div>";}
                 else {$this->body .="<div class='f'><span><i>Total</i><i>=</i><i>".$k["total"]." dh</i></span><button><i></i> Reserver</button></div>";}
                        $this->body .="</div>";     
              $this->body .="</div>";
            

          $this->body .="</div>";
          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>
