<?php
    include("database/conect.php");
    $conex = connect_db();

    if (isset($_POST['edit']) && isset($_GET['Id'])) {
        $nuevoTexto = $_POST['edit'];
        $id = $_GET['Id'];

        // Actualizar el texto en la base de datos
        $sql = "UPDATE tareas SET descripcion = '$nuevoTexto' WHERE Id = $id";
        $result = mysqli_query($conex, $sql);

        if ($result) {
            echo "El texto se actualizó correctamente.";
        } else {
            echo "Error al actualizar el texto: " . mysqli_error($conex);
        }
    } else {
        echo "No se proporcionó el texto o el ID para actualizar.";
    }

    mysqli_close($conex);

?>

