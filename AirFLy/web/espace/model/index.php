<?php
include("../../../db/Connexion.php");

class DEspace {

private $cn = null;
private $db = null;

public function getReservation() {

$query = $this->cn->prepare("select id,idclient,nom,prenom,place,a.numvol,datereservation,classe,DATE_FORMAT(c.datedepart,'%W') datedepart2,DATE_FORMAT(c.datedepart,'%d %M %Y') datedepart ,c.gate from reservation a , vols c where idclient = ".$_SESSION['idclient']." and modifiable like 'oui' and c.numvol = a.numvol");
   
$query->execute();
$cnt = $query->fetchAll();
return $cnt;

}
public function rmReservation($id) {
try {
	$query = $this->cn->prepare("delete from reservation where id = ".$id);   
	$query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}


}


public function change($p,$id,$num,$old) {
try {
	$query = $this->cn->prepare("update reservation set place = '".$p."' , modifiable = 'non'  where id = ".$id);   
	$query->execute();
	$query = $this->cn->prepare("UPDATE places SET places=REPLACE(places,',".$old."','') where numvol = ".$num); 
	$query->execute();
	$query = $this->cn->prepare("UPDATE places SET places= CONCAT_WS(',',places,'".$p."') WHERE numvol like '".$num."' ");
     $query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}


}

function __construct() {
$this->db = new connexion();
$this->cn = $this->db->connect();
}

}
