<?php
/*No funciona*/
  if($_SESSION["userCategory"] != "Administrador"){
    echo "No es el administrador";
   /* Header("Location: mensaje.php?texto=$men&title=No administrador&tipo=error");*/
}
?>