<?php


class adminlogin_template
{

  private $root;
  private $head;
  private $body;


    public function print_root()
    {
      $this->root="<html>";
      return $this->root;
    }



    public function print_head()
    {
        $this->head="<head>";
        $this->head .= "<link href='../../../template/AdminLogin/css/style.css' rel='stylesheet' type='text/css' />";  
        $this->head .= " <script src='../../../template/Extras/jquery.js' type='text/javascript'></script>";      
        $this->head .= " <script src='../../../template/AdminLogin/js/index.js' type='text/javascript'></script>";          
        $this->head .= "<title>AIR FLY Administration</title>";
        $this->head .= "</head>";

     return $this->head;
    }

    
  
  public function print_body()
  {
    
         $this->body="<body>";


  $this->body.='<div id="login">';

    $this->body.='<h1><strong>Bonjour.</strong> Veuillez vous Connecter.</h1>';

    $this->body.='<form action="" method="POST">';
  $this->body.="<img src='../../../template/AdminLogin/image/avatar.png' id='myimg'/>";
     $this->body.=' <fieldset>';

       $this->body.=' <p><input type="text" required value="Login" name="login"></p>'; 

       $this->body.=' <p><input type="password" required value="Password" name="pass"></p>'; 


       $this->body.=' <p><input type="submit" value="Connecter"></p>';

      $this->body.='</fieldset>';

    $this->body.='</form>';





 $this->body.=' </div>';
          $this->body .="</body>";
          $this->body .="</html>";




     return $this->body;
  }

}


?>
