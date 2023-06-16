<?php
    require("./conect.php");

    $conex=connect_db();

    if($conex){
        echo "se ha establecido la conexion";
    }else{
        echo "error al conectar la base de datos";
    };

?>