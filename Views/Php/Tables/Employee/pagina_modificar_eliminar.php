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
      <h1>Modificación de Productos</h1>
        <b><p>Confirme el id del proveedor</p></b>
        <br>
        <br>
        <label for="usuario">Id del proveedor:</label>
        <input name="id_proveedor" type="text" placeholder="Ingrese el id del proveedor" class="campos" required>
        <input name="modificar" type="submit" value="Modificar el proveedor" class="boton">
        <br>
        <a href="pagina_tabla_proveedor.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>