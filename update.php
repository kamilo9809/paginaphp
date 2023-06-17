<?php
    //abre conexion
    include("database/conect.php");
    $conex = connect_db();

    //valida el id y el input llamado edit y lo trae y lo almacena en las variables nuevoTexto y id
    if (isset($_POST['edit']) && isset($_GET['Id'])) {
        $nuevoTexto = $_POST['edit'];
        $id = $_GET['Id'];

        // Actualizar el texto en la base de datos parte logica mysql
        $sql = "UPDATE tareas SET descripcion = '$nuevoTexto' WHERE Id = $id";
        $result = mysqli_query($conex, $sql);

        //validacion si se hizo correctamente si hubo un error o si no se logro conectar con el id
        if ($result) {
            echo "El texto se actualizó correctamente.";
        } else {
            echo "Error al actualizar el texto: " . mysqli_error($conex);
        }
    } else {
        echo "No se proporcionó el texto o el ID para actualizar.";
    }


    //cierra conexion y devuelve al index
    mysqli_close($conex);
    header("Location: index.php");
    exit;
?>

<!---soy genial-->
<!--JINNEY LOPEZ BARRERA-->
<!--PONGAME 5 PORFAVOR-->
