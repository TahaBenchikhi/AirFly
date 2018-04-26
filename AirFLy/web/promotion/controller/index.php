<?php
@session_start();
include("../model/index.php");
$db = new Dpromotion();
$promo = null;


if(isset($_GET['pays']))
{
	$pays = trim(htmlentities($_GET['pays']));
	$ville = trim(htmlentities($_GET['ville']));
	$promo = $db->getpromoe($pays,$ville);
}
if(!isset($_GET['pays']))
{
$promo = $db->getpromo();
}
	





include("../../../template/promotion/index.php");
require_once("../../../template/Include/NavBar.php");



$promotion = new promotion_template();

echo $promotion->print_root();
echo $promotion->print_head();
echo $promotion->print_body($promo);


?>