<!--No funciona-->
<?php
include 'conexion.php';
include 'logeado.php';

$tipo = $_POST['tipo'];
$searchText = mysqli_real_escape_string($conexion, $_POST['searchText']);


if ($tipo == "categoria") {
    $consulta = "select " . $tipo . " from $tipo where categoria='$searchText'";
} else {
    $consulta = "select " . $tipo . " from $tipo where $tipo='$searchText'";
}
$resultado = $conexion->query($consulta);
$rows = $resultado->num_rows;
$row = mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Modificar categoria</title>
</head>

<body>
    <?php if ($ver == 1) {
    ?>
        <div class="session">Hola <?php echo $row['usuario']; ?> </div>
        <?php
        if ($tipo == "categoria") {
        ?>
            <h1>Modificar categoria <?php echo utf8_encode($searchText) ?></h1>
            <p>
                Nombre categoria:<input type="text" name="searchText" id="changeName" value="<?php echo utf8_encode($searchText) ?>" />
            </p>
            <input type="hidden" value="<?php echo utf8_encode($registro['id_categoria']) ?>" />
            <p class="login button">
                <input type="button" value="Modificar" onclick="modificarCategoria(<?php echo utf8_encode($registro['id_categoria']) ?>,document.getElementById('changeName').value)" />
            </p>
            <p class="login atras">
                <input type="button" onclick="location.href='buscar.php?tipo=categoria'" name="volver atrás" value="volver atrás">
            </p>
    <?php
        } else if ($tipo == "pregunta") {
            $id = $registro['id_pregunta'];
            header("Location: modificar-pregunta.php?pregunta=$id&callback=menu");
        }
    } else {
        $men = "No Se ha encontrado lo que busca";
        Header("Location: mensaje.php?texto=$men&title=No encontrado&tipo=error");
    }
    ?>
</body>
</html>