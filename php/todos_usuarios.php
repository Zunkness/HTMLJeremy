<!--No funciona, no carga los datos correspondientes al a hora de editar-->
<!--Buscar mientra escribo letra por letra, sin darle al boton de buscar-->
<?php
    include 'conexion.php';
    include 'logeado.php';

    if (isset($_POST['busqueda'])) {
        $busqueda = strtolower(utf8_decode($_POST['busqueda']));
        $sel = $conexion ->query("SELECT * FROM registrarse WHERE 
            usuario like '%".$busqueda."%' or 
            nombre like '%".$busqueda."%' or
            apellido like '%".$busqueda."%' or
            edad like '%".$busqueda."%' or
            dni like '%".$busqueda."%' or
            telefono like '%".$busqueda."%' or
            email like '%".$busqueda."%' ");
    }else{
        $sel = $conexion ->query("SELECT * FROM registrarse");
    } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Todos los usuarios</title>
</head>
<body>
    <form name="tabla" id="tabla" method="post">
    <div class="session">Hola <?php echo $row['usuario']; ?> </div>
    <input class="input" type="text" name="busqueda" placeholder="Buscar">
	<input class="buscar" type="submit" value="Buscar">    
        <table>
            <tr>
                <td>Usuario</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Edad</td>
                <td>DNI</td>
                <td>Telefono</td>
                <td>Email</td>
                <td>Acciones</td>
            </tr>
            <?php                
                while ($row = $sel -> fetch_assoc()){ ?>                
                    <tr>                        
                        <td><?php echo $row['usuario'];?></td>
                        <td><?php echo $row['nombre'];?></td>
                        <td><?php echo $row['apellido'];?></td>
                        <td><?php echo $row['edad'];?></td>
                        <td><?php echo $row['dni'];?></td>
                        <td><?php echo $row['telefono'];?></td>
                        <td><?php echo $row['email'];?></td>
                        <td><a href="perfil.php?usuario=<?php echo $row['usuario']; ?>">Editar</a></td>
                        <td><a href="perfil.php?usuario=<?php echo $row['usuario'] ?>">Borrar</a></td>                        
                    </tr>
            <?php } ?>            
        </table>
    </form>
</body>
</html>