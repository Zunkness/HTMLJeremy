<!-- Arreglar listar categoria que no funciona quiero que coga los datos de la tabla categoria, 
por si añado alguna nueva tabla se añada automaticamente -->

<?php //while ($row = $sel->fetch_assoc()) { 
?>
<!-- <option value="<?php //$row['categoria']; 
                    ?> <?php// echo $row['categoria']; }?></option>-->

<?php
    include 'conexion.php';
    include 'logeado.php';

    if (isset($_POST['crear_pregunta'])) {

    $pregunta = mysqli_real_escape_string($conexion, $_POST['pregunta']);
    $respuestaa = mysqli_real_escape_string($conexion, $_POST['resA']);
    $respuestab = mysqli_real_escape_string($conexion, $_POST['resB']);
    $respuestac = mysqli_real_escape_string($conexion, $_POST['resC']);
    $respuestad = mysqli_real_escape_string($conexion, $_POST['resD']);
    $respuestacorrecta = mysqli_real_escape_string($conexion, $_POST['resCorrecta']);
    $imagen = "../imagenes/imagenesjuego/" . $_POST['imagen'];
    $categoria = mysqli_real_escape_string($conexion, $_POST['categoria']);


    $sqluser = "SELECT pregunta FROM pregunta WHERE pregunta= '$pregunta'";
    $resultado = $conexion->query($sqluser);
    $rows = $resultado->num_rows;
    if ($rows > 0) {
        echo "<script>
            alert('La pregunta ya existe');
            window.location = 'crear_pregunta.php';
        </script>";
    } else {
        $sqlusuario = $conexion->query("INSERT INTO pregunta (pregunta,respuestaA,respuestaB,respuestaC,respuestaD,respuestaCorrecta,imagen,categoria) 
        VALUES ('$pregunta','$respuestaa','$respuestab','$respuestac','$respuestad','$respuestacorrecta','$imagen','$categoria')");
        $resultadousuario = $conexion->query($sqlusuario);

        if ($sqlusuario > 0) {
            echo "<script>
                alert('Resgistro Exitoso');
                window.location = 'crear_pregunta.php';
            </script>";
        } else {
            echo "<script>
                alert('Error al registrarse');    
                window.location = 'crear_pregunta.php';                
            </script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Crear preguntas</title>
</head>

<body>
    <form name="crear_usuario" id="crear_usuario" method="post">
        <div class="session">Hola <?php echo $row['usuario']; ?> </div>
        <h1> Crear preguntas</h1>
        <p>
            <label for="pregunta">Crear pregunta:</label>
            <input type="text" method="post" name="pregunta" placeholder="Insertar la pregunta" required />
        </p>
        <p>
            Elegir categoría:
            <select name="categoria">
                <option value="1"> Entretenimiento</option>
                <option value="2">Geografía</option>
                <option value="3">Deporte</option>
                <option value="4">Literatura</option>
                <option value="5">Tecnología</option>
                <option value="6">Historia</option>
                <option value="7">Pelicula</option>
                <option value="8">Capitales</option>
                <option value="9">Bandera</option>
                <option value="10">Marcas de móviles</option>
                <option value="11">Marcas de coches</option>
                <option value="12">Frases</option>-->
            </select>
        </p>

        <p>
            insertar imagen:
            <input type="file" method="post" name="imagen" placeholder="Insertar imagen">
        </p>
        <!--Respuesta A-->
        <p>
            <label for="respuestaa">Respuesta A:</label>
            <input type="text" name="resA" id="resA" value="" placeholder="Inserta la respuesta A" onblur="" required />
        </p>
        <!--Respuesta B-->
        <p>
            <label for="respuestab">Respuesta B:</label>
            <input type="text" name="resB" id="resB" value="" placeholder="Inserta la respuesta B" onblur="" required />
        </p>
        <!--Respuesta C-->
        <p>
            <label for="respuestac">Respuesta C:</label>
            <input type="text" name="resC" id="resC" value="" placeholder="Inserta la respuesta C" onblur="" required />
        </p>
        <!-- Respuesta D-->
        <p>
            <label for="respuestad">Respuesta D:</label>
            <input type="text" name="resD" id="resD" value="" placeholder="Inserta la respuesta D" onblur="" required />
        </p>
        <!--Respuesta Correcta-->
        <p>
            <label for="rcorrecta">Respuesta Correcta:</label>
            <input type="text" name="resCorrecta" id="resCorrecta" value="" placeholder="Inserta la respuesta Correcta" onblur="respuestacorrecta()" />
        <div id="respCorrecta" style="visibility:hidden;color:#FF0000">Debes de introducir una respuesta Correcta</div>
        <div id="respCoincide" style="visibility:hidden;color:#FF0000">No coincide con ninguna de las opciones</div>
        </p>
        <!--Botones-->
        <p class="login_button">
            <button type="submit" name="crear_pregunta" value="registrar" onclick="">Crear</button>
        </p>

        <p class="login_atras">
            <button><a class="boton3" href="menu.php?tipo=crear">Volver atrás</a></button>
        </p>

    </form>
</body>

</html>