<?php


class guide_template
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

        $this->head .= "<link href='../../../template/Guide/css/style.css' rel='stylesheet' type='text/css' />";  
        $this->head .= " <script src='../../../template/Extras/Nav/inscri.js' type='text/javascript'></script>";    
        $this->head .= " <script src='../../../template/Guide/js/index.js' type='text/javascript'></script>";         
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

          $this->body .="<div class='menu'>";
         $this->body .="<div class='menu_list'>";
         $this->body .="<ul>";
          $this->body .="<li>Documents de voyage</li>";
          $this->body .="<li>Assistance aux passagers</li>";
          $this->body .="<li>Visas et Vaccins</li>";
          $this->body .="<li>Voyager avec des enfants</li>";
          $this->body .="<li>Services exclusifs</li>";
          $this->body .="</ul>";
          $this->body .="</div>";
          $this->body .="<span><h1>Documents de voyage</h1></br></br><img src='../../../template/Extras/Image/G5.jpg'></br></br>

    Etes-vous prêt à vous envoler ? Nous souhaitons que votre voyage avec AirFly soit le plus agréable possible. Voici donc quelques conseils pour que votre voyage se déroule sans encombre.

Avant votre départ, nous vous invitons à vérifier les formalités d´entrée et de séjour auprès de l´ambassade et du consulat de votre ou vos pays de destination ou de correspondance.</br></br>

<b>La réglementation Marocaine en matière d’entrée au Maroc prévoit, que tout étranger, voyageant seul ou en groupe, désireux de se rendre au Maroc doit être muni d’un passeport délivré par l’état dont il est ressortissant et en cours de validité. Le cas échéant du visa exigible délivré par l’Administration compétente. La carte nationale d’identité (CNI) n’est cependant plus reconnue pour pénétrer sur le territoire Marocain</b>

</br></br><b>Vous devez être en possession des documents exigés</b></br></br>

passeport
visa...
Vous devez être muni d’un passeport en cours de validité, d’un visa d’entrée au pays de votre destination ainsi que de votre billet d’avion. Il est de votre responsabilité de contrôler leur date de validité et de les renouveler le cas échéant. Vous devez entreprendre toutes les formalités requises par chacun des pays de et vers lesquels vous voyagez ou vous transitez et vous devez présenter tous les documents exigés.</br></br>

Attention: certains pays exigent un passeport valide plusieurs mois après la date prévue de retour. Par ailleurs, un billet de retour ou de continuation du voyage peut également être demandé.</br></br>

Veuillez aussi noter que certains pays exigent que les compagnies aériennes leur transmettent une partie, voire l’ensemble, des informations dont elles disposent sur leurs passagers, à seule fin d'une bonne exécution du voyage ou pour des raisons de sécurité nationale.</br></br>

La AirFly fournit à l'attention de ses passagers les informations administratives et sanitaires nécessaires, à la rubrique Visas et Vaccins. Ces informations sont communiquées selon les informations les plus récentes accessibles à la compagnie de la part de chaque pays concerné. La AirFly n 'est en aucun cas responsable de la nature ni du coût des conditions d'entrée et de passage dans les pays qu'elle dessert. Il appartient au passager de se conformer aux exigences des pays de destination ou de correspondance, à ses frais, et la compagnie décline toute responsabilité au cas où le passager se verrait refuser l'entrée ou le passage dans un pays faute de s'être conformé auxdites exigences.</br></br>

Pour réservez votre billet d’avion, rendez vous dans la rubrique Réservations et promotions. Votre réservation se fera en quelques clics seulement.

          </span>";

          $this->body .="<span><h1>Assistance aux passagers</h1></br></br><img src='../../../template/Extras/Image/G4.jpg'></br></br>

AirFly prête une attention particulière aux passagers nécessitant une assistance spéciale et met tout en œuvre pour vous garantir des conditions optimales de confort et de sécurité durant tout le voyage.

AirFly vous propose une large gamme de services adaptés à votre besoin (moteur/ auditif/ visuel et/ ou mental) : pour vous faciliter votre voyage sur toutes les étapes : A la réservation, accompagnement à l’aéroport, durant le vol, en  correspondance …

</br></br><b>Conditions générales de réservation de notre service d’assistance spéciale</b></br></br>

- Afin de vous garantir une assistance durant votre voyage adaptée à votre besoin, veuillez signaler votre besoin d'assistance au minimum 48 h avant votre départ. Passé ce délai, nous ne pourrons garantir la mise à disposition des services adaptés. Consultez le guide correspondant à votre besoin.</br>

- Les demandes d’assistance ne peuvent être effectuées en ligne.</br></br>

- Si votre état de santé nécessite un accord médical à délivrer par AirFly, l’émission de votre billet est tributaire de cet accord. Une fois l’autorisation de voyager donnée par la compagnie, vous pourrez procéder au paiement de votre billet.</br>

- Les miles du programme de fidélité Safar Flyer ne sont pas valables pour le paiement des services d’assistance (civière, extra seat, …), à l’exception du paiement du service UM qui peut se faire en miles Safar Flyer.</br></br>

- Vols en code share : certains vols AirFly  peuvent être effectués par nos compagnies partenaires. N´hésitez pas à contacter notre Call Center ou agence RAM la plus proche afin de vous confirmer la possibilité de prise en charge de l’assistance demandée.</br></br>

- Dans certains cas et selon votre état de santé, vous devrez obtenir un accord médical de notre service médical pour pouvoir voyager. La présence d’un accompagnateur peut également être exigée.</br></br>

          </span>";

          $this->body .="<span><h1>Visas et Vaccins</h1></br></br><img src='../../../template/Extras/Image/G3.jpg'></br></br>
Vous voulez connaître les visas et vaccins nécessaires avant de vous envolez ? Découvrez l'espace Visa et Vaccin de AirFly : Informations santé, type de visa et conseils sur les vaccins à faire avant de partir à l'étranger.

AirFly met à votre disposition un formulaire pour vous aider à répondre à l’ensemble de ces questions.

Rappelez-vous que l'obligation de visa peut changer sans préavis ou presque pas. Il est de votre responsabilité de vous assurer d'avoir le visa adéquat et satisfaire aux exigences médicales locales. AirFly décline toute responsabilité pour tout manquement à le faire.

</br></br><b>NB: L’accord relatif à la suppression de Visa pour les Passeports ordinaires entre le Maroc et le Gabon prend effet à partir du 17 décembre 2015</b>.

          </span>";

          $this->body .="<span><h1>Voyager avec des enfants</h1></br></br><img src='../../../template/Extras/Image/G2.jpg'></br></br>
   Vous voyagez en famille ? Vos enfants sont les bienvenus sur les vols AirFly. Tout le personnel à bord assurera leur bien-être et leur confort pour que le voyage en famille soit un moment de plaisir. AirFly réserve à vos enfants des moments inoubliables dans le monde d’Univers magique : Une attention particulière, des menus enfants adaptés ainsi que des jouets diversifiés.

</br></br><b>Si vous voyagez avec un Bébé</b></br></br>

Votre bébé (moins de 2 ans) qui voyage sur vos genoux sans occuper de siège, bénéficie d’une réduction tarifaire. Pour votre confort et le sien, nous pouvons mettre à votre disposition un landau. Pour cela, il faudra signaler au moment de la réservation de votre billet que vous voyagez avec un bébé.</br>

Si vous le souhaitez, vous pouvez également réserver un siège pour votre bébé. Celui-ci bénéficiera du tarif enfant de 2 à 12 ans. Sauf indication contraire des conditions tarifaires, le tarif des bébés âgés de moins de 2 ans et n’occupant pas de siège, s’élève à 10% du tarif de l’adulte l’accompagnant. S’ils occupent un siège, les bébés sont assimilés aux enfants de 2 à 12 ans.</br>

Si vous voyagez avec un bébé, vous bénéficiez d’un embarquement prioritaire. N’hésitez pas à vous présenter au personnel à l’aéroport.
          </span>";



          $this->body .="<span><h1>Services exclusifs</h1></br></br><img src='../../../template/Extras/Image/G1.jpg'></br></br>AirFly met tout en œuvre pour vous assister et rendre votre voyage le plus agréable et confortable possible. Retrouvez toutes les informations utiles pour préparer votre voyage en toute sérénité ainsi que nos conseils AirFly pour voyager en toute tranquillité !
</br></br><b>Femmes enceintes:</b></br></br>

Les femmes enceintes sont acceptées sur les lignes AirFly jusqu’au huitième mois de grossesse à la date de commencement du voyage.

La passagère doit être munie d’un certificat médical délivré par un gynécologue spécifiant le stade de sa grossesse.

Une décharge de responsabilité devra également être signée par la passagère.

</br></br><b>Nouveaux Nés:</b></br></br>

Le voyage aérien n’est pas recommandé aux nouveaux nés pendant les 7 premiers jours qui suivent leur naissance.

</br></br><b>Bébés prématurés:</b></br></br>

AirFly dispose de couveuses permettant le transport des bébés prématurés dans les meilleures conditions et accepte de les transporter avec un accompagnateur, après accord médical et contre-visite du médecin de la compagnie. 

Une tarification spéciale est appliquée.</span>";
          $this->body .="</div>";


          $this->body .="</div>";
          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>
