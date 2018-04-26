<?php
include("../../../db/Connexion.php");

class DClient {

private $cn = null;
private $db = null;

public function GetPlaces($num) {

$query = $this->cn->prepare("SELECT places from places where numvol = ".$num);
   
$query->execute();
$cnt = $query->fetch(PDO::FETCH_ASSOC);
return $cnt;

}
public function InsertReservation($a,$b,$c,$d,$e,$id,$cl) {

$query = $this->cn->prepare("insert into reservation(idclient , civilte, nom, prenom, datenaissance, place,numvol,datereservation,classe) values (".$_SESSION['idclient'].",'".$a."','".$b."','".$c."','".$d."','".$e."',".$id.",'".date("Y-m-d H:i:s")."','".$cl."')");
   
$query->execute();
$query = $this->cn->prepare("UPDATE places SET places= CONCAT_WS(',',places,'".$e."') WHERE numvol like '".$id."' ");
$query->execute();
$query = $this->cn->prepare("UPDATE vols SET ".$cl." = ".$cl." - 1 WHERE numvol like '".$id."' ");
$query->execute();

}



function __construct() {
$this->db = new connexion();
$this->cn = $this->db->connect();
}

}
