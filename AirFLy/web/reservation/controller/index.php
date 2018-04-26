<?php
@session_start(); 
include("../model/index.php");

   $db = new DReservation();
if(isset($_POST["idplane"]))
      {

        $places = $db->print_places($_POST["idplane"]);
      echo $places;
      }
else if($_SESSION['infos'])
{
  if(!$_SESSION["nom"]){header('location:http://localhost/AirFly/web/login/controller/?insc=true');}
   if(!$_POST['classe']){header('location:http://localhost/AirFly/web/recherche/controller/');}
	$k=null;
	$z=null;

   
				



   	if(isset($_POST['num']))
       {
   $_SESSION['vol1'] = null;
   $_SESSION['vol2'] = null;
    $_SESSION['classe'] = $_POST['classe'];
         $t = $_SESSION['infos'];
   	 $ke = array_search($_POST['num'], array_column($t,'numvol'));
   	 $k = $t[$ke+1];
   	 $x = $k['vv'];
     $_SESSION['vol1'] = $k;
          if(isset($_POST['num2']))
       {

   	 $ee = array_search($_POST['num2'], array_column($x,'numvol'));
   	 $z = $x[$ee+1];
   $_SESSION['vol2'] = $z;
     }
   
   
   
   
   
       }
   include("../../../template/reservation/index.php");
   require_once("../../../template/Include/SearchBar.php");
   require_once("../../../template/Include/NavBar.php");
   
   
   
   $recherche = new Reservation_template();
   
   echo $recherche->print_root();
   echo $recherche->print_head();
   echo $recherche->print_body($k,$z);
   $_SESSION['infos'] = null;
}
else
{
	header('Location: http://localhost/AirFly/web/recherche/controller/');
}


?>