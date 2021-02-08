<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    include 'conexion.php';

    session_start();
    if (!isset( $_SESSION['id_usuario'])) {
        header("Location: index.php");
    }   

    if(isset($_POST["login"])){
        $usuario = mysqli_real_escape_string($conexion,$_POST['user']);
        $password = mysqli_real_escape_string($conexion,$_POST['pass']);

        $sql = "SELECT usuario FROM registrarse WHERE usuario = '$usuario' AND pass = '$password'";
        $resultado = $conexion ->query($sql);
        $rows = $resultado ->num_rows;

        if ($rows >0) {
            $row = $resultado->fetch_assoc();
            $_SESSION['id_usuario']= $row['usuario'];
            header("Location: jugar.php");
        }else{
            echo "<script>
		        alert('Usuario o Contraseña incorrecta');
		        window.location = 'index.php';
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
    <div class="container">
        <section>
            <div id="container_demo" >
            <div id="wrapper">
                <div id="login">
                    <form name="acceder" id="acceder" method="POST">
                        <h1>Iniciar Sesión</h1>
                        <!--Usuario-->
                        <p>
                            <label for="loginUser">Usuario</label>
                            <input name="user" type="text" id="loginUser" value="" placeholder="Inserte su nombre de usuario" required/>
                        </p>
                        <!--Contraseña-->
                        <p>
                            <label for="loginPass">Contraseña</label>
                            <input name="pass" type="text" id="loginPass" value="" placeholder="Inserte su contraseña" required/>
                        </p>
                        <!--Mantener la sesion iniciada-->
                        <p>
                            <input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
                            <label for="loginkeeping">Mantener sesión iniciada</label>
                        </p>
                        <!--Botones-->
                        <p class="login_button">
                        <button type="submit" name="login" value="Iniciar sesión" onclick="" >Iniciar sesión</button>
                        </p>

                        <p class="change_link">¿Aún no estas registrado? 
                            <a href="registro.php" class="to_register">Registrate</a>
                        </p>
                    </form><!--Formulario Acceder-->    
                </div><!--Login-->
            </div><!--weapper-->
            </div><!--container_demo-->
        </section><!--Section-->
    </div><!--contenedor-->
</body>
</html>