<?php
include("../../../db/Connexion.php");

class DLadmin {

private $cn = null;
private $db = null;

public function chekuser($a,$b) {

$query = $this->cn->prepare("select count(*) from admin where Login like '".$a."' and Password like '".$b."'");
   
$query->execute();
$cnt = $query->fetchColumn();
return $cnt;

}


function __construct() {
$this->db = new connexion();
$this->cn = $this->db->connect();
}

}
