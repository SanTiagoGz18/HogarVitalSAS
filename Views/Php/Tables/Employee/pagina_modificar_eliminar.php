<?php include ("../../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Productos - Hogar Vital</title>
    <link rel="stylesheet" href="../../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor1">
      <h1>¿Qué desea hacer?</h1>
        <br>
        <br>  
        <input name="modificar" type="submit" value="Modificar" class="boton_modifi">
        <img src="../../../imagenes/editar_proveedor.png" alt="detalles" class="imga">
        <br>
        <input name="modificar" type="submit" value="Eliminar" class="boton_elimi">
        <br>
        <a href="pagina_tabla_proveedor.php"><input type="submit" value="Volver" class="boton3"></a>
    </div>
  </body>
</html>