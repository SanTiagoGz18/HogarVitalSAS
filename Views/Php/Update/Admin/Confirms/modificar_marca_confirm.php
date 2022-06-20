<?php include ("../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Marca - Hogar Vital</title>
    <link rel="stylesheet" href="../Views/css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Modificación de Marca</h1>
      <form action="modificar_marca_form.php" method="post">
        <b><p>Confirme el código de la marca</p></b>
        <br>
        <br>
        <label for="usuario">Id de la marca:</label>
        <input name="id_marca" type="text" placeholder="Ingrese el id de la marca" class="campos" required>
        <input name="modificar" type="submit" value="Modificar la marca" class="boton">
        </form>
        <br>
        <a href="pagina_tabla_marca.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>