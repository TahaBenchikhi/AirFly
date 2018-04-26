<?php


class time
{

  public static function gettime($a,$b)
  {       
    $a = strtotime("2016-01-01 $a");
    $b = strtotime("2016-01-01 $b");
    
    if ($b < $a) {
        $b += 86400;
    }
    $time = date("H:i:s", strtotime("2016-01-01 00:00:00") + ($b - $a));
    $e = substr($time, 0, 2);
    $c = substr($time, 3, 2);
    $time = $e.'h'.$c.'min';
    return $time;
       
  }
  
}    