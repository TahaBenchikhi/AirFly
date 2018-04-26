<?php
@session_start();
include("../model/index.php");
$db = new DEspace();
if(!$_SESSION['idclient'])
{
header('location:http://localhost/AirFly/web/login/controller/?insc=true');
}

else if(isset($_POST['id']))
{
	$s = $db->rmReservation($_POST['id']);
	echo $s;
}
else if(isset($_POST['yourplace']))
{
	$s = $db->change($_POST['yourplace'],$_POST['idplace'],$_POST['numvol'],$_POST['old']);
	echo $s;
}

else
{


$T=$db->getReservation();


include("../../../template/Espace/index.php");
require_once("../../../template/Include/SearchBar.php");
require_once("../../../template/Include/NavBar.php");
require_once("../../../template/Include/billet.php");
require_once("../../../template/Include/format.php");

$recherche = new espace_template();

echo $recherche->print_root();
echo $recherche->print_head();
echo $recherche->print_body($T);}


?>