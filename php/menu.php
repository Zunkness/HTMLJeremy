<?php
include 'conexion.php';
include 'logeado.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Todo</title>
</head>

<body>
    <div class="session"><?php echo $row['usuario']; ?> </div>
    <?php
      if(isset($_GET['tipo']) && $_GET['tipo'] == "todos") {
    ?>
      <a class="boton" href="todos_usuarios.php">Usuarios</a>
      <a class="boton" href="todas_categorias.php">Categorias</a>
      <a class="boton" href="todas_preguntas.php">Preguntas</a>
    <?php
    } else if(isset($_GET['tipo']) && $_GET['tipo'] == "crear") {
    ?>
      <a class="boton" href="crear_pregunta.php">Crear preguntas</a>
      <a class="boton" href="crear_usuario.php">Crear usuarios</a>
      <a class="boton" href="crear_categoria.php">Crear categorias</a>
    <?php
    } else if(isset($_GET['tipo']) && $_GET['tipo'] == "modificar") {
    ?>
      <a class="boton" href="buscar.php?tipo=Usuario">Modificar usuarios</a>
      <a class="boton" href="buscar.php?tipo=Categoria">Modificar categorias</a>
      <a class="boton" href="buscar.php?tipo=Pregunta">Modificar preguntas</a>
    <?php
    } else if(isset($_GET['tipo']) && $_GET['tipo'] == "borrar") {
    ?>
      <a class="boton" href="borrar_usuarios.php">Borrar usuarios</a>
      <a class="boton" href="borrar_categorias.php">Borrar categorias</a>
      <a class="boton" href="borrar_preguntas.php">Borrar preguntas</a>
    <?php
    } else if(isset($_GET['tipo']) && $_GET['tipo'] == "listar") {
    ?>
    <a class="boton" href="listar_usuarios.php">Listar Usuarios</input>
    <a class="boton" href="listar_categorias.php">Listar Categorias</input>
    <a class="boton" href="listar_preguntas.php">Listar Preguntas</input>
  <?php } ?>
    <a class="boton3" href="gestion.php">Volver atrás </a>
</body>
</html>