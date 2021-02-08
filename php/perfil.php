<?php
include "conexion.php";
include 'logeado.php';

if (isset($_POST['actualizar'])) {
$usuario = mysqli_real_escape_string($conexion,$_POST['p_v1']);
$nombre = mysqli_real_escape_string($conexion,$_POST['p_v2']);
$apellido = mysqli_real_escape_string($conexion,$_POST['p_v3']);
$edad = mysqli_real_escape_string($conexion,$_POST['p_v4']);
$dni = mysqli_real_escape_string($conexion,$_POST['p_v5']);
$telefono = mysqli_real_escape_string($conexion,$_POST['p_v6']);
$email = mysqli_real_escape_string($conexion,$_POST['p_v7']);

$sqlusuario = $conexion -> query("UPDATE registrarse SET  nombre ='$nombre', apellido='$apellido', edad='$edad', dni='$dni', telefono='$telefono', email='$email' WHERE usuario ='$usuario'");
               
if ($sqlusuario) {
    echo "<script> 
    alert('Actualizacion correcta');        
        window.location = 'perfil.php';
    </script>";               
}else{
    echo "<script> 
    alert('Eres un inutil tio');          
        window.location = 'perfil.php';                
    </script>";            
}
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Quiz</title>
</head>

<body>
    <form name="actualizar" id="actualizar" method="POST">
        <h1>Actualizar los datos de: <br><?php echo $row['usuario'] ?></h1>
        <!--Usuario -->
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="p_v1" id="usuario" value="<?php echo $row['usuario'] ?>" readonly>
        </p>
        <!--Nombre -->
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="p_v2" id="nombre" value="<?php echo $row['nombre'] ?>" required>
        </p>
        <!--Apellido -->
        <p>
            <label for="apellido">Apellido</label>
            <input type="text" name="p_v3" id="apellido" value="<?php echo $row['apellido'] ?>" required>
        </p>
        <!--Edad -->
        <p>
            <label for="edad">Edad</label>
            <input type="text" name="p_v4" id="edad" value="<?php echo $row['edad'] ?>" required>
        </p>
        <!--Dni -->
        <p>
            <label for="dni">Dni</label>
            <input type="text" name="p_v5" id="dni" value="<?php echo $row['dni'] ?>" required>
        </p>
        <!--Telefono -->
        <p>
            <label for="telefono">Telefono</label>
            <input type="text" name="p_v6" id="telefono" value="<?php echo $row['telefono'] ?>" required>
        </p>
        <!--Email -->
        <p>
            <label for="email">Email</label>
            <input type="text" name="p_v7" id="email" value="<?php echo $row['email'] ?>" required>
        </p>
        <!--Botones-->
        <p class="login_button">
            <button type="submit" name="actualizar" value="actualizar" >Actualizar</button>
        </p>

        <p class="login_atras">
            <button><a class="boton3" href="jugar.php">Volver atrás</a></button>
        </p> 
    </form><!--Registro-->
</body>
</html>