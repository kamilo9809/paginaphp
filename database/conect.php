<?php

function connect_db(){
    $server='localhost';
    $user='root';
    $pass='';
    $db='prueba';
    $conect=mysqli_connect($server,$user,$pass,$db);
    return $conect;
}

?>