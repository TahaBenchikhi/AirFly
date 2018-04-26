<?php
@session_start();
include("../model/index.php");
require_once("../../../template/Include/format.php");
require_once("../../../template/Include/time.php");

$db = new DRecherche();
$s = null;
$z = null;
$_SESSION['infos'] = null;
if(isset($_GET['depart']))
{
	$depart = trim(htmlentities($_GET['depart']));
	$retour = trim(htmlentities($_GET['retour']));
	$class = trim(htmlentities($_GET['class']));
	$Ddepart = trim(htmlentities($_GET['date_depart']));
	$Dretour = trim(htmlentities($_GET['date_retour']));
	$adulte = intval(trim(htmlentities($_GET['adulte'])));
	$enfant = intval(trim(htmlentities($_GET['enfant'])));
	$bébé = intval(trim(htmlentities($_GET['bébé'])));	
	$nbplace = 	$adulte+$enfant+$bébé;
	$date1 = new DateTime($Ddepart);
    $date2 = new DateTime($Dretour);
      $z =$db->GetInfos($depart,$retour);
	 
	if(!$Dretour)
	{
		$k=$db->GetFly($depart,$retour,$Ddepart,$class,$nbplace);
		$i=1;
		$s=array();
		$c=array();
				foreach ($k as $ke) 
				{
            $c = $ke;
			$c['prix'] = $ke['prix']*($ke['comm']/100);
            $c['datedepart2'] =format::Days($ke['datedepart2']);
            $c['datedepart'] = format::Months($ke['datedepart']); 
			$c['time'] = time::gettime($c['hdepart'],$c['harriver']);
			$c['total'] = ($c["prix"] * $adulte) + (($c["prix"]-($c["prix"] * ($c["enfant"]/100)  )) * $enfant) + 
                           (($c["prix"]-($c["prix"] * ($c["bebe"]/100)  )) * $bébé);
			$s[$i] =$c;
			$i++;
		   }
		$_SESSION['infos'] = $s;
     
	}
	else
	{
		if($date1 < $date2)
		{
			
			$s=array();
			$c=array();
		$k=$db->GetFly($depart,$retour,$Ddepart,$class,$nbplace);
		$i=1;
		foreach ($k as $ke) {
			$cheks = $db->GetFly2($depart,$retour,$Dretour,$class,$nbplace,$ke['company'],$ke['numvol']);
            if($cheks)
            {
            $c = $ke;
			$c['prix'] = $ke['prix']*($ke['comm']/100);
            $c['datedepart2'] =format::Days($ke['datedepart2']);
            $c['datedepart'] = format::Months($ke['datedepart']);
   			$c['time'] = time::gettime($c['hdepart'],$c['harriver']);
			$c['total'] = ($c["prix"] * $adulte) + (($c["prix"]-($c["prix"] * ($c["enfant"]/100)  )) * $enfant) + 
                           (($c["prix"]-($c["prix"] * ($c["bebe"]/100)  )) * $bébé);

   /************************************************************************************************************/
			            $r = $cheks;
			            $m=array();
					    $o=array();
					    $j=1;
						foreach ($r as $mv) 
							{
			            $o = $mv;
						$o['prix'] = $mv['prix']*($mv['comm']/100);
			            $o['datedepart2'] =format::Days($mv['datedepart2']);
			            $o['datedepart'] = format::Months($mv['datedepart']); 
						$o['time'] = time::gettime($o['hdepart'],$o['harriver']);
						$o['total'] = ($o["prix"] * $adulte) + (($o["prix"]-($o["prix"] * ($o["enfant"]/100)  )) * $enfant) + 
			                           (($o["prix"]-($o["prix"] * ($o["bebe"]/100)  )) * $bébé);
						$m[$j] =$o;
						$j++;
					   }
  /************************************************************************************************************/

		    $c['vv']=$m;
			$s[$i] =$c;
			$i++;
		   }
		}
		$_SESSION['infos'] = $s;
	}
	
	else
	{
		$s=null;
	}
	}
}
include("../../../template/recherche/index.php");
require_once("../../../template/Include/SearchBar.php");
require_once("../../../template/Include/NavBar.php");



$recherche = new recherche_template();

echo $recherche->print_root();
echo $recherche->print_head();
echo $recherche->print_body($s,$z);


?>