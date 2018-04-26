<?php


class NavBar
{
  static $NavBar;
  static $Link;
  
  public static function LinkNavBar()
  {       
        $Link  = '<meta http-equiv="Content-Type" content="text/html;charset=utf-8">';
        $Link .= "<link href='../../../template/Extras/Image/logo.png' rel='shortcut icon' type='image/vnd.microsoft.icon'>";
        $Link .= "<link href='../../../template/Extras/Nav/nav.css' rel='stylesheet' type='text/css' />"; 
         $Link.= "<script src='../../../template/Extras/jquery.js' type='text/javascript'></script>";

        return $Link;
  }
  public static function GetNavBar()
  {     
      $NavBar ="<header class='cn__head'>";
       $NavBar.="<div class='cn__head__center'>";
             $NavBar.="<img src='../../../template/Extras/Image/logo.png' id='logo'>";
              $NavBar.="<span id='logo_label'>AIR<i>FLY</i></span>";
              $NavBar.="<ul class='nav'>";
              $NavBar.="<li><a href='../../login/controller/'>Accueil</a></li>";
               $NavBar.="<li><a href='../../recherche/controller'>Recherche</a></li>";
              $NavBar.="<li><a href='../../promotion/controller/'>Promotion</a></li>";
              $NavBar.="<li><a href='../../espace/controller/'>Espace Client</a></li>";
              $NavBar.="<li><a href='../../guide/controller/'>Guide Pratique</a></li>";
              $NavBar.="<li><a href='../../nous/controller/'>Nous</a></li>";
              $NavBar.="</ul>";
            
          if(isset($_SESSION["nom"]))
          {
        $NavBar.="<div class='compte'>";
        $NavBar.="<a href='../../logout.php'><img src='../../../template/Extras/Image/disco.png'/></a>";
        $NavBar.="<span>".$_SESSION["nom"]." ".$_SESSION["prenom"]." : ".$_SESSION["cart"]."</span>";
        $NavBar.="<img src='../../../template/Extras/Image/pers.png' id='pers'/>";
        $NavBar.="</div>";
          }
          else
          {
               $NavBar.="<form action='http://localhost/AirFly/web/login/controller/' method='POST' >";
               $NavBar.="<img src='../../../template/Extras/Image/password.png'> <input pattern='[^\<>\\/()\"]*' type='text' placeholder='Login' name='login' required>";
               $NavBar.="<img src='../../../template/Extras/Image/login.png'> <input pattern='[^\<>\\/()\"]*' type='password' placeholder='Password' name='password' required>";
               $NavBar.="<button class='sub'>Connect</button>";
               $NavBar.= "<span id='inscription'>Inscription</span>";
               $NavBar.="</form>";
             
          }
       
       $NavBar.= "</header>";
       return $NavBar;
   }
   }    