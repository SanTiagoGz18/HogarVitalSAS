<?php
include("../Models/conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Contraseña - Hogar Vital</title>
  <link rel="stylesheet" href="css/estilo_correcto_cerrar.css">
  <link rel="icon" type="imagenes/png" href="../imagenes/logo_icon.ico">
</head>
<body>
  <div class="contenedor">
    <h1>Cerrar Sesión</h1>      
    <center><p>¿Desea cerrar sesión?</p></center>
    <br>
    <br>
    <a href="../Controller/destruir_sesion.php"><input name="cerrar" type="submit" value="SI" class="boton"></a>
    <a href="../Views/Html/pagina_inicial_empleado.html"><input type="submit" value="NO" class="boton2"></a>
    </div>
  </body>
</html>