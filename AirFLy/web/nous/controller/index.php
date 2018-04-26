<?php
@session_start();


include("../../../template/nous/index.php");
require_once("../../../template/Include/NavBar.php");
require_once("../../../template/Include/billet.php");


$nous = new nous_template();

echo $nous->print_root();
echo $nous->print_head();
echo $nous->print_body();


?>