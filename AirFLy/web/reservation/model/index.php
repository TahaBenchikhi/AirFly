<?php
include("../../../db/Connexion.php");

class DReservation {

private $cn = null;
private $db = null;

public function print_places($vol) {

$query = $this->cn->prepare("SELECT places from places where numvol=".$vol);
$query->execute();
$cnt = $query->fetchColumn();
return $cnt;

}

function __construct() {
$this->db = new connexion();
$this->cn = $this->db->connect();
}

}

