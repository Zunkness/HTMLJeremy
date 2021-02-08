<!--Buscar mientra escribo letra por letra, sin darle al boton de buscar-->
<?php
    include 'conexion.php';
    include 'logeado.php';

    if (isset($_POST['busqueda'])) {
        $busqueda = strtolower(utf8_decode($_POST['busqueda']));
        $sel = $conexion ->query("SELECT * FROM pregunta WHERE 
            pregunta like '%".$busqueda."%' or 
            respuestaA like '%".$busqueda."%' or
            respuestaB like '%".$busqueda."%' or
            respuestaC like '%".$busqueda."%' or
            respuestaD like '%".$busqueda."%' or
            respuestaCorrecta like '%".$busqueda."%' or
            id_categoria like '%".$busqueda."%' ");
    }else{
        $sel = $conexion->query("SELECT * FROM pregunta");
    } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Todas las preguntas</title>
</head>

<body>
<form name="tabla" id="tabla" method="post">
    <div class="session">Hola <?php echo $row['usuario']; ?> </div>
    <input class="input" type="text" name="busqueda" placeholder="Buscar">
	<input class="buscar" type="submit" value="Buscar">  
        <table>
            <tr>
                <td>Preguntas</td>
                <td>Respuesta A</td>
                <td>Respuesta B</td>
                <td>Respuesta C</td>
                <td>Respuesta D</td>
                <td>Respuesta Correcta</td>
                <td>Categoria</td>                
            </tr>
            <?php            
            while ($row = $sel->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['pregunta']; ?></td>
                    <td><?php echo $row['respuestaA']; ?></td>
                    <td><?php echo $row['respuestaB']; ?></td>
                    <td><?php echo $row['respuestaC']; ?></td>
                    <td><?php echo $row['respuestaD']; ?></td>
                    <td><?php echo $row['respuestaCorrecta']; ?></td>
                    <td><?php echo $row['id_categoria']; ?></td>
                </tr>
            <?php } ?>
        </table>
</form>
</body>
</html>