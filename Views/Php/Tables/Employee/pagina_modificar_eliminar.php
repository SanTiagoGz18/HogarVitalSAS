<?php include ("../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Productos - Hogar Vital</title>
    <link rel="stylesheet" href="../Views/css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>¿Qué desea hacer?</h1>
        <br>
        <br>
        <input name="modificar" type="submit" value="Modificar el proveedor" class="boton">
        <br>
        <input name="modificar" type="submit" value="Eliminar el proveedor" class="boton">
        <br>
        <a href="pagina_tabla_proveedor.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>