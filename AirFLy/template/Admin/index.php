<?php


class admin_template
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
        $this->head .= "<link href='../../../template/Admin/css/style.css' rel='stylesheet' type='text/css' />";  
        $this->head .= " <script src='../../../template/Extras/jquery.js' type='text/javascript'></script>";      
        $this->head .= " <script src='../../../template/Admin/js/index.js' type='text/javascript'></script>";       
        $this->head .= " <script src='../../../template/Admin/js/action.js' type='text/javascript'></script>";  
         $this->head .= " <script src='../../../template/Admin/js/upload.js' type='text/javascript'></script>";       
        $this->head .= "<title>AIR FLY Administration</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body($tab,$prom)
  {
    
         $this->body="<body>";

     
          $this->body .="<div class='left_bar'>";
           $this->body .="<div class='code_admin'></div>";
          $this->body .="<img src='../../../template/Admin/image/avatar.png'>";
          $this->body .="<p id='admin_name'>Jhon Mike</p>";
          $this->body .="<ul>";
          $this->body .="<li>List des vols</li>";
          $this->body .="<li>List des Promotions</li>";
          $this->body .="<li>Ajouter un nouveaux vol</li>";
          $this->body .="<li>Ajouter une nouvelle promotion</li>";
          $this->body .="</ul>";
          $this->body .="</div>";

          $this->body .="<div class='top_bar'>";
           $this->body .="<a href='http://localhost/AirFly/web/logout.php'>Disconnect</a>";
             $this->body .="</div>";

             $this->body .="<div class='container'>";
             $this->body .="<div class='container1'>";
              $this->body .="<table>";
              $this->body .="<tr class='head'>";
               $this->body .="<td>NumVol</td>";
               $this->body .="<td>Provenance</td>";
               $this->body .="<td>Destination</td>";
               $this->body .="<td>Date Depart</td>";
               $this->body .="<td>Heure Depart</td>";
               $this->body .="<td>Heure Arriver</td>";
               $this->body .="<td>Places Eco</td>";
               $this->body .="<td>Places Affaire</td>";
               $this->body .="<td>Places Premiere</td>";
               $this->body .="<td>Terminal</td>";
               $this->body .="<td>Company</td>";
               $this->body .="<td>Escale</td>";
               $this->body .="<td>Modifier</td>";
               $this->body .="<td>Supprimer</td>";
               $this->body .="</tr>";
               foreach ($tab as $t) 
                 {
               
                $this->body .="<tr>";
               $this->body .="<td>".$t['numvol']."</td>";
               $this->body .="<td>".$t['provenance']."</td>";
               $this->body .="<td>".$t['destination']."</td>";
               $this->body .="<td>".$t['datedepart']."</td>";
               $this->body .="<td>".$t['hdepart']."</td>";
               $this->body .="<td>".$t['harriver']."</td>";
               $this->body .="<td>".$t['economique']."</td>";
               $this->body .="<td>".$t['affaires']."</td>";
               $this->body .="<td>".$t['premiere']."</td>";
               $this->body .="<td>".$t['gate']."</td>";
               $this->body .="<td>".$t['company']."</td>";
               $this->body .="<td>".$t['escale']."</td>";
               $this->body .="<td><span id='md'></span></td>";
               $this->body .="<td><span id='rm'></span></td>";
                $this->body .="<input type='hidden' value='".$t['numvol']."'/>";
               $this->body .="</tr>";

               }
               $this->body .="<tr><button id = 'flush'>Enregistrer</button></tr>"; 
              $this->body .="</table>";    

               $this->body .="</div>";


             $this->body .="<div class='container2'>";

              $this->body .="<table>";
              $this->body .="<tr class='head'>";
               $this->body .="<td>Date Fin de promo</td>";
               $this->body .="<td>Ville</td>";
               $this->body .="<td>Pays</td>";
               $this->body .="<td>Prix Minimum</td>";
               $this->body .="<td>Description</td>";
               $this->body .="<td>Image</td>";
               $this->body .="<td>Modifier</td>";
               $this->body .="<td>Supprimer</td>";
               $this->body .="</tr>";
               foreach ($prom as $p) 
                 {
               
                $this->body .="<tr>";
               $this->body .="<td>".$p['datefin']."</td>";
               $this->body .="<td>".$p['ville']."</td>";
               $this->body .="<td>".$p['pays']."</td>";
               $this->body .="<td>".$p['prixmin']."</td>";
               $this->body .="<td>".$p['description']."</td>";
               $this->body .="<td>".$p['img']."</td>";
               $this->body .="<td><span id='mdp'></span></td>";
               $this->body .="<td><span id='rmp'></span></td>";
                $this->body .="<input type='hidden' value='".$p['id']."'/>";
               $this->body .="</tr>";

               }
               $this->body .="<tr><button id = 'flushpro'>Enregistrer</button></tr>"; 
              $this->body .="</table>";    

               $this->body .="</div>";







             $this->body .="<div class='container3'>";
             $this->body .="<div class='formu'>";
              $this->body .="<div><span>Ajouter Un Nouveau Vol</span></div>";
            $this->body .="<div><p>Numero du vol</p><input type='number' /></div>";
             $this->body .="<div><p>Provenance</p><input type='text' /></div>";
             $this->body .="<div><p>Destination</p><input type='text' /></div>";
             $this->body .="<div><p>Date du depart</p><input type='date' /></div>";
             $this->body .="<div><p>Heure du depart</p><input type='time' /></div>";
             $this->body .="<div><p>Heure d'arriver</p><input type='time' /></div>";
             $this->body .="<div><p>Nombe Places Economique Disponible</p><input type='number' /></div>";
             $this->body .="<div><p>Nombre Places Affaires Disponible</p><input type='number' /></div>";
             $this->body .="<div><p>Nombre Place Premiere Disponible</p><input type='number' /></div>";
             $this->body .="<div><p>Terminal</p><input type='text' /></div>";
             $this->body .="<div><p>Company</p><input type='text' /></div>";
             $this->body .="<div><p>Escale</p><input type='text' /></div>";
             $this->body .='<div><p>Prix</p><input type="number" step="0.01" /></div>';
             $this->body .="<div><p>Pourcentage Prix Economique</p><input type='number' value='100'/></div>";
             $this->body .="<div><p>Pourcentage Prix Affaire</p><input type='number' /></div>";
             $this->body .="<div><p>Pourcentage Prix Premiere</p><input type='number' /></div>";
             $this->body .="<div><p>Pourcentage de Reduction sur Les Enfants</p><input type='number' /></div>";
             $this->body .="<div><p>Pourcentage de Reduction sur Les Bebe</p><input type='number' /></div>";
             $this->body .="<div><button>Ajouter</button></div>";
              $this->body .="</div>";

              $this->body .="</div>";
             $this->body .="<div class='container4'>";
              $this->body .="<div class='formus'>";
              $this->body .="<div><span>Ajouter Une Nouvelle Promotion</span></div>";
            $this->body .="<div><p>Date de fin</p><input type='date' /></div>";
             $this->body .="<div><p>Ville</p><input type='text' /></div>";
             $this->body .="<div><p>Pays</p><input type='text' /></div>";
             $this->body .="<div><p>Prix Minimum</p><input type='number' step='0.01'  /></div>";
             $this->body .="<div><p>Description</p><input type='text' /></div>";
             $this->body .="<div><p>Image</p><input type='file'class='x'/></div>";
             $this->body .="<div><button>Ajouter</button></div>";
              $this->body .="</div>";
              $this->body .="</div>";
             $this->body .="</div>";

          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>
