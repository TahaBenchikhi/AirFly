<?php
@session_start();
if (isset($_GET['getsession'])) {
   
    print $_SESSION[$_GET['getsession']];
 
} 