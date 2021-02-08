<!--Revisar, porque al borrar, borra bien, pero no entra en el else cuando no existe la categoria-->
<?php
    include 'conexion.php';
    include 'logeado.php';

    if (isset($_POST['borrar_categoria'])) {
        $categoria = mysqli_real_escape_string($conexion,$_POST['categoria']); 

        $sqluser = "DELETE FROM categoria WHERE categoria= '$categoria'";
        $resultado = $conexion -> query($sqluser);

        if ($resultado ) {
            echo "<script>
            alert('Se ha borrado correctamente');
            window.location = 'borrar_categorias.php';
        </script>";
        }else{
            echo "<script>
            alert('No se ha podido borrar');
            window.location = 'borrar_categorias.php';
        </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Borrar Categoria</title>
</head>
<body>
    <form name="borrar_categoria" id="borrar_categoria" method="post">
        <div class="session">Hola <?php echo $row['usuario']; ?> </div>
        <h1>Borrar Categoria</h1>
        <!--Categoria -->
        <p>
            <label for="usuario">Borrar categoria</label>
            <input type="text" name="categoria" id="categoria" value="" placeholder="Inserte el nombre de la categoria a borrar" required>
        </p>
        <!--Botones-->
        <p class="login_button">
            <button type="submit" name="borrar_categoria" value="registrar" onclick="">Borrar</button>
        </p>

        <p class="login_atras">
            <button><a class="boton3" href="menu.php?tipo=borrar">Volver atrás</a></button>
        </p>
    </form>
</body>

</html>