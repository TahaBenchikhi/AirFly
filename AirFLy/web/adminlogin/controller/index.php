<?php
@session_start();
session_unset();
session_destroy();
@session_start();
include("../model/index.php");
$db = new DLadmin();


include("../../../template/AdminLogin/index.php");
if(isset($_POST['login'])&&isset($_POST['pass']))
{
   $pass=md5($_POST['pass']);
   $login = htmlentities($_POST['login']);

   $chek = $db->chekuser($login,$pass);
   if($chek > 0)
   {
      $_SESSION['admin'] = 'Jhon Mike';
      header("location:http://localhost/AirFly/web/admin/controller/");
   }
   else
   {
   	    header("location:http://localhost/AirFly/web/adminlogin/controller/");
   }
}


$promotion = new adminlogin_template();

echo $promotion->print_root();
echo $promotion->print_head();
echo $promotion->print_body();





?>