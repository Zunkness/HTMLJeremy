<?php
    include 'conexion.php';
    include 'logeado.php';

    if (isset($_POST['crear_categoria'])) {
        $categoria = mysqli_real_escape_string($conexion,$_POST['categoria']);

        $sqluser = "SELECT categoria FROM categoria WHERE categoria= '$categoria'";
        $resultado = $conexion -> query($sqluser);
        $rows = $resultado -> num_rows;

        if ($rows > 0) {
            echo "<script>
                alert('El usuario ya existe');
                window.location = 'crear_categoria.php';
            </script>";
            
        }else{
            $sqlusuario = $conexion -> query("INSERT INTO categoria (categoria) VALUES ('$categoria')");
            $resultadousuario = $conexion ->query($sqlusuario);
                       
            if ($sqlusuario > 0) {
                echo "<script>
                    alert('Resgistro Exitoso');
                    window.location = 'crear_categoria.php';
                </script>";               
            }else{
                echo "<script>
                    alert('Error al registrarse');    
                    window.location = 'crear_categoria.php';                
                </script>";            
           }
        }
    }

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Crear Categoria</title>
</head>

<body>
    <form name="crear_usuario" id="crear_usuario" method="post">
        <div class="session">Hola <?php echo $row['usuario']; ?> </div>
        <h1>Crear Categoria</h1>
        <!--Categoria -->
        <p>
            <label for="usuario">Nueva categoria</label>
            <input type="text" name="categoria" id="categoria" value="" placeholder="Inserte el nombre de la categoria" required>
        </p>
        <!--Botones-->
        <p class="login_button">
            <button type="submit" name="crear_categoria" value="registrar" onclick="">Crear</button>
        </p>

        <p class="login_atras">
            <button><a class="boton3" href="menu.php?tipo=crear">Volver atrás</a></button>
        </p>
    </form>
</body>

</html>