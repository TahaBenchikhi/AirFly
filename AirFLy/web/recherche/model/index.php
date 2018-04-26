<?php
include("../../../db/Connexion.php");

class DRecherche {

private $cn = null;
private $db = null;

public function GetFLy($a,$b,$c,$d,$e) {

$query = $this->cn->prepare("
  SELECT v.numvol,v.provenance,v.destination,(select nom from aeroport where codeIATA like v.provenance) iatapro , (select nom from aeroport where codeIATA like v.destination) iatades,DATE_FORMAT(v.datedepart,'%W') datedepart2,DATE_FORMAT(v.datedepart,'%d %M %Y') datedepart,v.hdepart,v.harriver,v.".$d." class,v.gate,v.company, t.prix,t.bebe,t.enfant,t.numvol vv,t.".$d." comm,v.escale  from vols v , tarif t where v.provenance in (select codeIATA from aeroport where nom like '%".$a."%' or pays like '%".$a."%' or ville like '%".$a."%' ) and v.destination in (select codeIATA from aeroport where nom like '%".$b."%' or pays like '%".$b."%' or ville like '%".$b."%' ) and v.datedepart like '".$c."' and t.numvol = v.numvol and v.".$d." >= ".$e."
	");
   
$query->execute();
$cnt = $query->fetchAll();
return $cnt;

}
public function GetFLy2($a,$b,$c,$d,$e,$f,$g) {

$query = $this->cn->prepare("
  SELECT v.numvol,v.provenance,v.destination,(select nom from aeroport where codeIATA like v.provenance) iatapro , (select nom from aeroport where codeIATA like v.destination) iatades,DATE_FORMAT(v.datedepart,'%W') datedepart2,DATE_FORMAT(v.datedepart,'%d %M %Y') datedepart,v.hdepart,v.harriver,v.".$d.",v.gate,v.company, t.prix,t.bebe,t.enfant,t.".$d." comm,v.escale  from vols v , tarif t where v.provenance in (select codeIATA from aeroport where nom like '%".$b."%' or pays like '%".$b."%' or ville like '%".$b."%' ) and v.destination in (select codeIATA from aeroport where nom like '%".$a."%' or pays like '%".$a."%' or ville like '%".$a."%' ) and v.datedepart like '".$c."' and t.numvol = v.numvol and v.".$d." >= ".$e." and v.company like '".$f."' and v.numvol <> '".$g."'
	");
   
$query->execute();
$cnt = $query->fetchAll();
return $cnt;

}
public function GetInfos($a,$b) {

$query = $this->cn->prepare("
 SELECT c.ville,c.codeIATA,v.ville ville2,v.codeIATA codeIATA2 from aeroport c , aeroport v where c.codeIATA in (select codeIATA from aeroport where nom like '%".$a."%' or pays like '%".$a."%' or ville like '%".$a."%' ) and v.codeIATA in (select codeIATA from aeroport where nom like '%".$b."%' or pays like '%".$b."%' or ville like '%".$b."%' )
	");
   
$query->execute();
$cnt = $query->fetch(PDO::FETCH_ASSOC);
return $cnt;

}
function __construct() {
$this->db = new connexion();
$this->cn = $this->db->connect();
}

}
