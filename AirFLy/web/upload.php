<?php

/*
$nam = $_FILES['myfile']['name'];
$info = new SplFileInfo($_FILES['myfile']['name']);
*/


 if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'], '../template/Extras/VilleImage/' . $_FILES['file']['name']);
    }






?>
