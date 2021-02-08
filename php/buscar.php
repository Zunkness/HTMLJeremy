<?php 
    include 'conexion.php';
    include 'logeado.php';
    $tipo = $_GET['tipo'];    
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Buscar</title>
</head>

<body>
    <div class="session">Hola <?php echo $row['usuario']; ?> </div>

    <?php
    if ($tipo == "Categoria" || $tipo == "Pregunta") {
    ?>
        <form name="actualizar" method="post" action="modificar_categoria.php">
        <?php
    } else {  ?>
       
    <form name="usuario" method="post" action="perfil.php">
    <?php } ?>

    <h1>Buscar <?php echo $tipo ?></h1>
    <p>
        <label> <?php echo $tipo ?> a modificar</label>
        <input type="text" name="searchText" id="" placeholder=" <?php echo $tipo ?> a modificar" />
    </p>
    <input type="hidden" name="tipo" value=" <?php echo $tipo ?>" />
    <p class="login button">
        <input type="submit" value="Buscar para modificar" />
    </p>

    </form>
    <p class="login_atras">
            <button><a class="boton3" href="menu.php?tipo=modificar">Volver atrás</a></button>
    </p>
</body>
</html>