<?php include ("../../Models/conexion.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Recuperar Contraseña - Hogar Vital</title>
    <link rel="stylesheet" href="../css/estilo_contraseña.css">
    <link rel="icon" type="imagenes/png" href="../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Recuperar Contraseña</h1>
      <form action="../../Controller/Update/actualizar_contraseña.php" method="post">
        <b><p>Confirme su numero de documento</p></b>
        <label for="usuario">Documento</label>
        <input name="id_usuario" type="text" placeholder="Ingrese su documento" class="campos">
      
        <label for="password">Contraseña nueva</label>
        <input name="contrasena" type="password" placeholder="Ingrese Contraseña Nueva" class="campos" required="">
        <label for="password">Confirmar Contraseña nueva</label>
        <input name="ncontrasena" type="password" placeholder="Confirmar Contraseña Nueva" class="campos" required="">
        <a href="../Html/correcto.html"><input name="cambiar" type="submit" value="Cambiar Contraseña" class="boton"></a>
        </form>
        <br>
        
        <a href="login.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>