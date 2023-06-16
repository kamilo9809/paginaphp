<?php
include("database/conect.php");
$conex = connect_db();

if (isset($_GET["Id"])) {
    $taskId = $_GET["Id"];
    
    // Eliminar la tarea de la base de datos
    $sql = "DELETE FROM tareas WHERE Id = '$taskId'";
    $result = mysqli_query($conex, $sql);

    if ($result) {
        echo "Tarea eliminada correctamente.";
    } else {
        echo "Error al eliminar la tarea.";
    }
}

mysqli_close($conex);
header("Location: index.php");
exit;
?>
