<!--Revisar, porque al borrar, borra bien, pero no entra en el else cuando no existe la usuario-->
<?php
    include 'conexion.php';
    include 'logeado.php';

    if (isset($_POST['borrar_usuario'])) {
        $usuario = mysqli_real_escape_string($conexion,$_POST['usuario']); 

        $sqluser = "DELETE FROM registrarse WHERE usuario= '$usuario'";
        $resultado = $conexion -> query($sqluser);

        if ($resultado ) {
            echo "<script>
            alert('Se ha borrado correctamente');
            window.location = 'borrar_usuarios.php';
        </script>";
        }else{
            echo "<script>
            alert('No se ha podido borrar');
            window.location = 'borrar_usuarios.php';
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Usuario</title>
</head>
<body>
    <form name="borrar_usuario" id="borrar_usuario" method="post">
        <div class="session">Hola <?php echo $row['usuario']; ?> </div>
        <h1>Borrar Usuario</h1>
        <!--Usuario -->
        <p>
            <label for="usuario">Borrar usuario</label>
            <input type="text" name="usuario" id="usuario" value="" placeholder="Inserte el nombre del usuario a borrar" required>
        </p>
        <!--Botones-->
        <p class="login_button">
            <button type="submit" name="borrar_usuario" value="registrar" onclick="">Borrar</button>
        </p>

        <p class="login_atras">
            <button><a class="boton3" href="menu.php?tipo=modificar">Volver atrás</a></button>
        </p>
    </form>
</body>

</html>