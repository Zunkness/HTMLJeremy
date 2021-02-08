<?php
    //Ni se para quien es/era o.O
    include 'conexion.php';

    $usuario = mysqli_real_escape_string($conexion,$_POST['p_v1']);
    $nombre = mysqli_real_escape_string($conexion,$_POST['p_v2']);
    $apellido = mysqli_real_escape_string($conexion,$_POST['p_v3']);
    $edad = mysqli_real_escape_string($conexion,$_POST['p_v4']);
    $dni = mysqli_real_escape_string($conexion,$_POST['p_v5']);
    $telefono = mysqli_real_escape_string($conexion,$_POST['p_v6']);
    $email = mysqli_real_escape_string($conexion,$_POST['p_v7']);
    
    $sqlusuario = $conexion -> query("INSERT INTO registrarse (usuario,nombre,apellido,edad,dni,telefono,email) VALUES ('$usuario','$nombre','$apellido','$edad','$dni','$telefono','$email')");
                   
    if ($sqlusuario > 0) {
        echo "<script>
            alert('Resgistro Exitoso');
            window.location = 'login.php';
        </script>";               
    }else{
        echo "<script>
            alert('Error al registrarse');    
            window.location = 'perfil.php';                
        </script>";            
   }
?>