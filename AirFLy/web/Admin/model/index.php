<?php
include("../../../db/Connexion.php");

class Dadmin {

private $cn = null;
private $db = null;

public function selectall() {

$query = $this->cn->prepare("select * from vols");
   
$query->execute();
$cnt = $query->fetchAll();
return $cnt;

}
public function allpromo() {

$query = $this->cn->prepare("select * from promotion");
   
$query->execute();
$cnt = $query->fetchAll();
return $cnt;

}
public function change($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m) {
try {

$query = $this->cn->prepare("update vols set numvol=".$a.",provenance='".$b."',destination='".$c."', 
    datedepart='".$d."',hdepart='".$e."',harriver='".$f."',economique='".$g."',affaires='".$h."',premiere='".$i."',
    gate='".$j."',company='".$k."',escale='".$l."' where numvol = ".$m."
	");
   
$query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}
}
public function changepromo($a,$b,$c,$d,$e,$f,$g) {
try {

$query = $this->cn->prepare("update promotion set datefin='".$a."',ville='".$b."',pays='".$c."', 
    prixmin=".$d.",description='".$e."',img='".$f."' where id = ".$g."
	");
   
$query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}
}
public function add($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l) {
try {
$query = $this->cn->prepare("insert into vols  values(".$a.",'".$b."','".$c."', 
    '".$d."','".$e."','".$f."',".$g.",".$h.",".$i.",
    '".$j."','".$k."','".$l."' )
	");
   
$query->execute();
$query = $this->cn->prepare("insert into places  values(".$a.",'')");
   $query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}
}

public function addprix($a,$b,$c,$d,$e,$f,$g) {
try {
$query = $this->cn->prepare("insert into tarif(numvol,prix,economique,affaires,premiere,enfant,bebe)  values(".$a.",".$b.",".$c.", 
    ".$d.",".$e.",".$f.",".$g.")
	");
   
$query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}
}
public function addpromo($a,$b,$c,$d,$e) {
try {
$query = $this->cn->prepare("insert into promotion(datefin,ville,pays,prixmin,description,img)  values('".$a."','".$b."','".$c."', 
    ".$d.",'".$e."','".$b."')
	");
   
$query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}
}
public function remove($id) {
try {
$query = $this->cn->prepare("delete from vols where numvol = ".$id);
$query->execute();
$query = $this->cn->prepare("delete from tarif where numvol = ".$id);
$query->execute();
$query = $this->cn->prepare("delete from places where numvol = ".$id);
$query->execute();
	return 1;
} catch (Exception $e) {
	return 0;
}
}
public function removepromo($id) {
try {
$query = $this->cn->prepare("delete from promotion where id = ".$id);
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
