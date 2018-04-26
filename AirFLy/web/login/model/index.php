<?php
include("../../../db/Connexion.php");

class DLogin  {

private $cn = null;
private $db = null;

public function Getuser($name,$pass) {

$query = $this->cn->prepare("SELECT id,nom,prenom,cart from users where login = :login and password = :password ");
$query->bindParam(":login",$name);
$query->bindParam(":password",$pass);
$query->execute();
$cnt = $query->fetch(PDO::FETCH_ASSOC);
return $cnt;

}
public function Cheking($cheker,$value) {

$query = $this->cn->prepare("SELECT * from users where $cheker = '".$value."'");
$query->execute();
$cnt = $query->fetchColumn();
return $cnt;

}
public function Inscription($a,$b,$c,$d,$e,$f) {

$query = $this->cn->prepare("INSERT INTO users (nom,prenom,login,password,cart,email) values (:nom,:prenom,:login,:password,:cart,:email) ");
$query->bindParam(":nom",$a);
$query->bindParam(":prenom",$b);
$query->bindParam(":login",$c);
$query->bindParam(":password",$d);
$query->bindParam(":cart",$e);
$query->bindParam(":email",$f);
$query->execute();


}





function __construct() {
$this->db = new connexion();
$this->cn = $this->db->connect();
}

}