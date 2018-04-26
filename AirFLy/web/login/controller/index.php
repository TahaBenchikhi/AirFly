<?php
@session_start();
include("../model/index.php");

$db = new DLogin();

if(isset($_POST["login"]))
{

	$login    = trim(htmlentities($_POST["login"]));
	$password = md5(trim(htmlentities($_POST["password"])));

	$info = $db->Getuser($login,$password);
	
				if($info["id"])
				{
					
					$_SESSION["idclient"] = $info["id"];
					$_SESSION["nom"] = $info["nom"];
					$_SESSION["prenom"] = $info["prenom"];
					$_SESSION["cart"] = $info["cart"];

					header('Location: http://localhost/AirFly/web/login/controller/');
				}
				else
				{
					
					header('Location: http://localhost/AirFly/web/login/controller/');

				}


}

else if(isset($_POST["Inom"]))
{ 
	include_once("../../../template/Extras/securimage/securimage.php");
	$securimage = new Securimage();
  $ErrorCount = 0;
	$nom      = trim(htmlentities($_POST["Inom"]));
	$prenom   = trim(htmlentities($_POST["Iprenom"]));
	$email    = trim(htmlentities($_POST["Iemail"]));
	$login    = trim(htmlentities($_POST["Ilogin"]));
	$pass     = md5(trim(htmlentities($_POST["Ipass"])));
	$carte    = trim(htmlentities($_POST["Icarte"]));
	$captcha  = $_POST["captcha"];
  $_SESSION["Errors"]= array();

   if(!$securimage->check($captcha))   {$ErrorCount++;array_push($_SESSION["Errors"], "*Captcha Erroner");}
   if($db->Cheking("email",$email))    {$ErrorCount++;array_push($_SESSION["Errors"], "*Email Deja Existant");}
   if($db->Cheking("login",$login))    {$ErrorCount++;array_push($_SESSION["Errors"], "*Login Deja Existant");}
   if($db->Cheking("cart",$carte))     {$ErrorCount++;array_push($_SESSION["Errors"], "*Carte Deja Existant");}




	if($ErrorCount == 0)
	{
		 $db->Inscription($nom,$prenom,$login,$pass,$carte,$email);
		  $info = $db->Getuser($login,$pass);
					$_SESSION["nom"] = $nom;
					$_SESSION["prenom"] = $prenom;
					$_SESSION["cart"] = $carte;
                    $_SESSION["idclient"] = $info["id"];
                 
					header('Location: http://localhost/AirFly/web/login/controller/');

	}
	else
	{
		          
		            header('Location: http://localhost/AirFly/web/login/controller/');
	}

}

else
{
include("../../../template/login/index.php");
require_once("../../../template/Include/SearchBar.php");
require_once("../../../template/Include/NavBar.php");

$s = SearchBar::GetSearchBar();
$ls = SearchBar::LinkSearchBar() ;
$ln = NavBar::LinkNavBar();
$n = NavBar::GetNavBar();

$login = new login_template();

echo $login->print_root();
echo $login->print_head($ln,$ls);
echo $login->print_body($n,$s);}




?>