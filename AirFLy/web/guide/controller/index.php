<?php
@session_start();


include("../../../template/guide/index.php");
require_once("../../../template/Include/NavBar.php");



$guide = new guide_template();

echo $guide->print_root();
echo $guide->print_head();
echo $guide->print_body();


?>