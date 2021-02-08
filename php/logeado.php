<?php
    include 'conexion.php';
    session_start();
        if (!isset( $_SESSION['id_usuario'])) {
            header("Location: index.php");
    }

    $iduser = $_SESSION['id_usuario'];
        
    $sql = "SELECT * FROM registrarse WHERE usuario = '$iduser'";    
    $resultado = $conexion ->query($sql);    
    $row = $resultado-> fetch_assoc();
?>