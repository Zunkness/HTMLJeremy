<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include "conexion.php";
include 'logeado.php';
/*include 'esAdmin.php';*/
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Jugar</title>
</head>

<body>
    <div class="session">hola <?php echo $row['usuario']; ?></div>
    <a class=boton2 href="">Jugar</a>
    <a href="salir.php">Salir</a>
    <a class="boton2" href="gestion.php">Gestión</a>
    <a class="boton2" href="perfil.php">Perfil</a>
</body>
</html>