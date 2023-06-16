<!DOCTYPE html>
<html>
<head>
    <title>Lista de Tareas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="titulo">Lista de Tareas</h1>

    <form class="aggtask" action="create.php" method="POST">
        <input type="text" name="descripcion" placeholder="Descripción de la tarea">
        <button type="submit">Agregar tarea</button>
    </form>
    <?php
        include("database/conect.php");
        $conex = connect_db();
        // Obtener las tareas de la base de datos
        $sql = "SELECT * FROM tareas";
        $result = mysqli_query($conex, $sql);

        if (mysqli_num_rows($result) > 0) {
            echo '<h2 class="subtitulo">Tareas:</h2>';
            echo "<ul>";
        while ($row = mysqli_fetch_assoc($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo    '<dialog class="modal">
                            <form action="update.php" method="POST">
                                <input type="text" name="edit" placeholder="ingrese el texto">
                                <button class="aceptar" type="submit">aceptar</button>
                            </form>
                            <button class="cancelar">cancelar</button>

                        </dialog>';
                echo '<li class="tx">' . $row["descripcion"] .'<span><span class="editrow">📝</span><a href="Delete.php?Id=' . $row["Id"] . '"><span name="delete">❌</span></a></span></li>';
            }            
        }
            echo "</ul>";
        } else {
            echo "<p>No hay tareas registradas.</p>";
        }
            mysqli_close($conex);
    ?>
    <script src="./function/funcion.js"></script>
</body>
</html>