<?php
include ("../../Models/conexion.php");
if(empty($_SESSION)){
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login - Hogar  Vital</title>
    <link rel="stylesheet" href="../css/estilo_login.css">
    <link rel="icon" type="imagenes/png" href="../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <img src="../imagenes/logo.jpeg" class="imagen" alt="imagen">
      <h1>Iniciar Sesión</h1>
      <form action="../../Controller/inicio_sesion.php" method="post">
        <!-- USERNAME INPUT -->
        <label for="correo" >Correo electronico:</label>
        <input  name='correo' type="text" placeholder="Ingrese su correo electronico" class="campos" required="@">
        <!-- PASSWORD INPUT -->
        <label  for="password">Contraseña:</label>
        <input name='password' type="password" placeholder="Ingrese su contraseña" class="campos" required="">
        <br>
        <br>
        <input type="submit" value="Iniciar Sesión" class="boton" name="enviar">
      </form>
 
      <a href="../Html/index.html"><input type="submit" value="Volver" class="boton2"></a>
      <center>
      <a href="contraseña.php">¿Has olvidado tu contraseña?</a><br>
      </center>
    </div>
  </body>
</html>
<?php }else{
  header("location:../Html/pagina_inicial.html");
}
?>