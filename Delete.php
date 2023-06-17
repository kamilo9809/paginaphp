<?php
//abre conexion con la base de datos
include("database/conect.php");
$conex = connect_db();

//codigo que valida el id
if (isset($_GET["Id"])) {
    $taskId = $_GET["Id"];
    
    // Eliminar la tarea de la base de datos
    $sql = "DELETE FROM tareas WHERE Id = '$taskId'";//logica sql
    $result = mysqli_query($conex, $sql);

    if ($result) {
        echo "Tarea eliminada correctamente.";//indica si la elimino bien
    } else {
        echo "Error al eliminar la tarea.";//o si se genero en un error
    }
}

//cierra conexion y devulve al index
mysqli_close($conex);
header("Location: index.php");
exit;
?>

<!--melo--->
<!--el archivo delete lo que hace como su nombre lo indica es que borra directamente de la base de datos el texto-->