<?php
@session_start();
include("../model/index.php");
require_once("../../../template/Include/table.php");
$db = new DClient();
if (!$_SESSION['nom']) {
	header('location:http://localhost/AirFly/web/reservation/controller/');
}
else if(isset($_POST['Data']))
{
	$_SESSION['Data'] = $_POST['Data'];
	echo 1 ;
}
else if(isset($_SESSION['vol1']))
{
 $place = array();
 $places = array();
 if($_SESSION['vol1']){  
 	$i=0;
 foreach ($_SESSION['Data']  as $dat) {
   	if($dat[4])
   	{
   		$table1 = $_SESSION['vol1'];   
      $db->InsertReservation($dat[0],$dat[1],$dat[2],$dat[3],$dat[4],$table1['numvol'],$dat[5]);
      $place[$i] = $dat[4];
         $i++;
   	}
   	else
   	{
   		 $table1 = $_SESSION['vol1'];        
   		 $T = $db->GetPlaces($table1['numvol']);
         $place[$i] = table::filter($T,$_SESSION['classe']);
         $db->InsertReservation($dat[0],$dat[1],$dat[2],$dat[3],$place[$i],$table1['numvol'],$dat[5]);
       $i++;
   	}
   }}

   if($_SESSION['vol2']){  
   	$j=0;
 foreach ($_SESSION['Data']  as $dat) {

   		 $table2 = $_SESSION['vol2'];        
   		 $T = $db->GetPlaces($table2['numvol']);
         $places[$j] = table::filter($T,$_SESSION['classe']);
        
         $db->InsertReservation($dat[0],$dat[1],$dat[2],$dat[3],$places[$j],$table2['numvol'],$dat[5]);
       $j++;
 
   }}














include("../../../template/client/index.php");
require_once("../../../template/Include/SearchBar.php");
require_once("../../../template/Include/NavBar.php");
require_once("../../../template/Include/billet.php");



$recherche = new client_template();

echo $recherche->print_root();
echo $recherche->print_head();
echo $recherche->print_body($place,$places);
  $_SESSION['Data'] = null; 
  $_SESSION['vol1'] = null;
  $_SESSION['vol2'] = null;
}

else
{
  header('location:http://localhost/AirFly/web/recherche/controller/');
}

?>