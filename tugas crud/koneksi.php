<?php
    $host   = "localhost";
    $user   = "root";
    $psw    = "";
    $db_name= "pabw";
    $kon = mysqli_connect($host,$user,$psw,$db_name);

    if (!$kon){
        die ('gagal terhubung dengan database:'.mysqli_connect_error());
    }

?>