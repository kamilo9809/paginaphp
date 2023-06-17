<?php
    include("../paginaphp/database/conect.php");
    $conex=connect_db();
    // Obtén los datos de la tarea (por ejemplo, desde un formulario)
    $nombreTarea = $_POST['descripcion']; //input llamado descripcion y lo almacena en la variable llamada nombreTarea
    // Prepara la consulta SQL
    $sql = "INSERT INTO tareas (descripcion) VALUES ('$nombreTarea')";//codigo sql para insertar el texto

    // Ejecuta la consulta
    if (mysqli_query($conex, $sql)) {
        echo "Tarea agregada correctamente.";//si lo agrego bien dice correctamente
    } else {
        echo "Error al agregar la tarea: " . mysqli_error($conex);//si no dice el error
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conex);
    //me devuelve al index
    header("Location: index.php");
    exit;
?>

<!--JINNEY LOPEZ BARRERA-->
<!--este es el archivo create basicamente lo que hace es que crea un nuevo texto con su id en la base de datos-->