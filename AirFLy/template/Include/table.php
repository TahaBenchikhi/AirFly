<?php
class table
{
  static $Res;
  static $Tab;
  public static function filter($str,$class)
  {       
       $P =  self::tab();

       $S = explode(",", $str['places']);
      if($class == 'economique') $S = self::eco($S);
      if($class == 'affaires') $S = self::aff($S);
      if($class == 'premiere') $S = self::pre($S);
        $Res = array_diff($P, $S);


        return array_shift($Res);
       
  }
  public static function eco($s)
  {
  	$b = array();
    for ( $i = 1; $i < 19; $i++) {
	array_push($b,'f'.$i);

}
	for ( $i = 1; $i < 49; $i++) {
		
	array_push($b,'m'.$i);
	}
	$s = array_merge($s,$b);
return $s;
  }


  public static function aff($s)
  {
  	$b = array();
    for ( $i = 1; $i < 19; $i++) {
	array_push($b,'f'.$i);

}
for ( $i = 1; $i < 121; $i++) {
	
array_push($b,'l'.$i);
}
	$s = array_merge($s,$b);
return $s;
  }

    public static function pre($s)
  {
  	$b = array();
for ( $i = 1; $i < 121; $i++) {
	
array_push($b,'l'.$i);
}
	for ( $i = 1; $i < 49; $i++) {
		
	array_push($b,'m'.$i);
	}
	$s = array_merge($s,$b);
return $s;
  }


  public static function tab()
  {       
        $Tab = array();
  for ( $i = 1; $i < 19; $i++) {
	array_push($Tab,'f'.$i);

}
for ( $i = 1; $i < 49; $i++) {
	
array_push($Tab,'m'.$i);
}
for ( $i = 1; $i < 121; $i++) {
	
array_push($Tab,'l'.$i);
}
   return $Tab;
       
  }



   }    

  ?> 