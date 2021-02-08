<!--No funciona, no carga los datos correspondientes-->
<!--Buscar mientra escribo letra por letra, sin darle al boton de buscar-->
<?php
include 'conexion.php';
include 'logeado.php';

if (isset($_POST['busqueda'])) {
    $busqueda = strtolower(utf8_decode($_POST['busqueda']));
    $sel = $conexion ->query("SELECT * FROM categoria WHERE categoria like '%".$busqueda."%'");
}else{
    $sel = $conexion->query("SELECT * FROM categoria");
    }   

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Todas las categorias</title>
</head>

<body>
    <form name="tabla" id="tabla" method="post">
    <div class="session">Hola <?php echo $row['usuario']; ?> </div>
    <input class="input" type="text" name="busqueda" placeholder="Buscar">
	<input class="buscar" type="submit" value="Buscar">
        <table>
            <tr>
                <td>Categoria</td>
                <td>Acciones</td>
            </tr>
            <?php            
            while ($row = $sel->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['categoria']; ?></td>
                    <td><a href="perfil.php?usuario=<?php echo $row['categoria'] ?>">Editar</a></td>
                </tr>
            <?php } ?>
        </table>
    </form>
</body>

</html>