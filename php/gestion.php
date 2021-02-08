<?php
include "conexion.php";
include 'logeado.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">    
    <title>Gestion Administrador</title>
</head>
<body>
    <div class="session"><?php echo $row['usuario'];?> </div>
    <a class="boton" href="menu.php?tipo=modificar">Modificar</a><br>    
    <a class="boton" href="menu.php?tipo=crear">Crear</a><br>      
    <a class="boton" href="menu.php?tipo=listar">Listar</a><br>      
    <a class="boton" href="menu.php?tipo=borrar">Borrar</a><br>      
    <a class="boton" href="menu.php?tipo=todos">Todo</a><br>      
    <a class="boton3" href="jugar.php">Volver atrás</a>    
</body>
</html>