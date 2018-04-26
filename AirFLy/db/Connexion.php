<?php

class connexion 
{

    private $name;
    private$host;
    private$password;
    private$username;

    public function connect($name='AirFLy',$host='localhost',$username='root',$password='') 
        {

			   try 
			   {
			   	$cn = new PDO("mysql: host=".$host.";dbname=".$name,$username,$password);
			    return $cn;
			   }
			   catch(PDOException $ex) 
			   {echo $ex->getMessage();}

         }

}

/*$db = new connexion();
$dbx= $db->connect('pfe');*/


?>