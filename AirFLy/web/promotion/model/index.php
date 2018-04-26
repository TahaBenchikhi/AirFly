<?php
include("../../../db/Connexion.php");

class Dpromotion {

private $cn = null;
private $db = null;

public function getpromo() {

$query = $this->cn->prepare("select * from promotion");
   
$query->execute();
$cnt = $query->fetchAll();
return $cnt;

}
public function getpromoe($a,$b) {
	$d = date("Y-m-d");
$query = $this->cn->prepare("select * from promotion where pays like '%".$a."%'  and ville like  '%".$b."%' and datefin > '".$d."'");
   
$query->execute();
$cnt = $query->fetchAll();
return $cnt;

}
function __construct() {
$this->db = new connexion();
$this->cn = $this->db->connect();
}

}
