<!--Revisar, porque al borrar, borra bien, pero no entra en el else cuando no existe la usuario-->
<?php
include 'conexion.php';
include 'logeado.php';

if (isset($_POST['borrar_pregunta'])) {
    $pregunta = mysqli_real_escape_string($conexion, $_POST['pregunta']);

    $sqluser = "DELETE FROM pregunta WHERE pregunta= '$pregunta'";
    $resultado = $conexion->query($sqluser);

    if ($resultado) {
        echo "<script>
            alert('Se ha borrado correctamente');
            window.location = 'borrar_preguntas.php';
        </script>";
    } else {
        echo "<script>
            alert('No se ha podido borrar');
            window.location = 'borrar_preguntas.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Borrar pregunta</title>
</head>

<body>
    <form name="borrar_pregunta" id="borrar_pregunta" method="post">
        <div class="session">Hola <?php echo $row['usuario']; ?> </div>
        <h1>Borrar pregunta</h1>
        <!--pregunta -->
        <p>
            <label for="pregunta">Borrar pregunta</label>
            <input type="text" name="pregunta" id="pregunta" value="" placeholder="Inserte el nombre del pregunta a borrar" required>
        </p>
        <!--Botones-->
        <p class="login_button">
            <button type="submit" name="borrar_pregunta" value="registrar" onclick="">Borrar</button>
        </p>

        <p class="login_atras">
            <button><a class="boton3" href="menu.php?tipo=modificar">Volver atrás</a></button>
        </p>
    </form>
</body>

</html>