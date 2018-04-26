<?php
@session_start();
include("../model/index.php");
$db = new Dadmin();
if(isset($_SESSION['admin']))
{
$tab = null;
$prom = null;
$tab = $db->selectall();
$prom = $db->allpromo();
if(isset($_POST['change']))
{
	$t = $_POST['change'];
	foreach ($t as $c) {
		$res = $db->change($c[0],$c[1],$c[2],$c[3],$c[4],$c[5],$c[6],$c[7],$c[8],$c[9],$c[10],$c[11],$c[12]);
	}
	echo $res;
}
else if(isset($_POST['changepromo']))
{
	$p = $_POST['changepromo'];
	foreach ($p as $r) {
		$resp = $db->changepromo($r[0],$r[1],$r[2],$r[3],$r[4],$r[5],$r[6]);
	}
	echo $resp;
}
else if(isset($_POST['add']))
{
	$c = $_POST['add'];

		$addres = $db->add($c[0],$c[1],$c[2],$c[3],$c[4],$c[5],$c[6],$c[7],$c[8],$c[9],$c[10],$c[11]);
        $db->addprix($c[0],$c[12],$c[13],$c[14],$c[15],$c[16],$c[17]);
	echo $addres;
}
else if(isset($_POST['addpromo']))
{
	$pa = $_POST['addpromo'];

		$proa = $db->addpromo($pa[0],$pa[1],$pa[2],$pa[3],$pa[4]);
	echo $proa;
}
else if(isset($_POST['remove']))
{
$id = $_POST['remove'];
$resu = $db->remove($id);
echo $resu;
}
else if(isset($_POST['removepromo']))
{
$id = $_POST['removepromo'];
$resup = $db->removepromo($id);
echo $resup;
}
else
{

include("../../../template/Admin/index.php");




$promotion = new admin_template();

echo $promotion->print_root();
echo $promotion->print_head();
echo $promotion->print_body($tab,$prom);

}

}
else
{
	header("location:http://localhost/AirFly/web/adminlogin/controller/");
}




?>