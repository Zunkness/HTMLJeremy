<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include 'conexion.php';

    if (isset($_POST['registrar'])) {
        $usuario = mysqli_real_escape_string($conexion,$_POST['p_v1']);
        $nombre = mysqli_real_escape_string($conexion,$_POST['p_v2']);
        $apellido = mysqli_real_escape_string($conexion,$_POST['p_v3']);
        $edad = mysqli_real_escape_string($conexion,$_POST['p_v4']);
        $dni = mysqli_real_escape_string($conexion,$_POST['p_v5']);
        $telefono = mysqli_real_escape_string($conexion,$_POST['p_v6']);
        $email = mysqli_real_escape_string($conexion,$_POST['p_v7']);
        $pass = mysqli_real_escape_string($conexion,$_POST['p_v9']);

        $sqluser = "SELECT usuario FROM registrarse WHERE usuario= '$usuario'";
        $resultado = $conexion -> query($sqluser);
        $rows = $resultado -> num_rows;
        
        if ($rows > 0) {
            echo "<script>
                alert('El usuario ya existe');
                window.location = 'index.php';
            </script>";
            
        }else{
            $sqlusuario = $conexion -> query("INSERT INTO registrarse (usuario,nombre,apellido,edad,dni,telefono,email,pass) VALUES ('$usuario','$nombre','$apellido','$edad','$dni','$telefono','$email','$pass')");
            $resultadousuario = $conexion ->query($sqlusuario);
                       
            if ($sqlusuario > 0) {
                echo "<script>
                    alert('Resgistro Exitoso');
                    window.location = 'login.php';
                </script>";               
            }else{
                echo "<script>
                    alert('Error al registrarse');    
                    window.location = 'registro.php';                
                </script>";            
           }
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
    <div class="container">
        <section>
            <div id="container_demo" >
              <a class="hiddenanchor" id="toregister"></a>
              <a class="hiddenanchor" id="tologin"></a>
            <div id="wrapper">
                <div id="register">
                    <form name="registro" id="registro" method="POST">
                        <h1>Registrate</h1>
                        <!--Usuario -->
                        <p>
                            <label for="usuario">Usuario</label>
                            <input type="text" name="p_v1" id="usuario" value="" placeholder="Inserte su nombre de usuario" required>
                        </p>
                        <!--Nombre -->
                        <p>
                            <label for="nombre">Nombre</label>
                            <input type="text" name="p_v2" id="nombre" value="" placeholder="Inserte su nombre" required>
                        </p>
                        <!--Apellido -->
                        <p>
                            <label for="apellido">Apellido</label>
                            <input type="text" name="p_v3" id="apellido" value="" placeholder="Inserte su apellido" required>
                        </p>
                        <!--Edad -->
                        <p>
                            <label for="edad">Edad</label>
                            <input type="text" name="p_v4" id="edad" value="" placeholder="Inserte su edad" required>
                        </p>
                        <!--Dni -->
                        <p>
                            <label for="dni">Dni</label>
                            <input type="text" name="p_v5" id="dni" value="" placeholder="Inserte su dni" required>
                        </p>
                        <!--Telefono -->
                        <p>
                            <label for="telefono">Telefono</label>
                            <input type="text" name="p_v6" id="telefono" value="" placeholder="Inserte su telefono" required>
                        </p>
                        <!--Email -->
                        <p>
                            <label for="email">Email</label>
                            <input type="text" name="p_v7" id="email" value="" placeholder="Inserte su email" required>
                        </p>
                        <!--Repetir Email -->
                        <p>
                            <label for="remail">Confirmar email</label>
                            <input type="text" name="p_v8" id="remail" value="" placeholder="Confirme su email" required>
                        </p>
                        <!--Contraseña -->
                        <p>
                            <label for="password">Contraseña</label>
                            <input type="text" name="p_v9" id="password" value="" placeholder="Inserte su contraseña" required>
                        </p>
                        <!--Repetir contraseña -->
                        <p>
                            <label for="rpassword">Confirmar contraseña</label>
                            <input type="text" name="p_v10" id="rpassword" value="" placeholder="Confirme su contraseña" required>
                        </p>
                        <!--Botones-->
                        <p class="login_button">
                        <button type="submit" name="registrar" value="registrar" onclick="" >Registrarse</button>
                        </p>
        
                        <p class="change_link">
                            Ya estas registrado? <a href="login.php" class="to_register"> Inicia sesión </a>
                        </p>       
                    </form><!--Registro-->
                </div><!--Register-->
            </div><!--weapper-->
            </div><!--container_demo-->
        </section><!--Section-->
    </div><!--contenedor-->
</body>
</html>