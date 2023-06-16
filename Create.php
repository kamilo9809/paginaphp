<?php
    include("../paginaphp/database/conect.php");
    $conex=connect_db();
    // Obtén los datos de la tarea (por ejemplo, desde un formulario)
    $nombreTarea = $_POST['descripcion']; 
    // Prepara la consulta SQL
    $sql = "INSERT INTO tareas (descripcion) VALUES ('$nombreTarea')";

    // Ejecuta la consulta
    if (mysqli_query($conex, $sql)) {
        echo "Tarea agregada correctamente.";
    } else {
        echo "Error al agregar la tarea: " . mysqli_error($conex);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conex);
    header("Location: index.php");
    exit;
?>