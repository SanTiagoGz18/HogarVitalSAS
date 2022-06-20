<?php include ("../../../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar personal - Hogar Vital</title>
    <link rel="stylesheet" href="../../../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Modificación de Personal</h1>
      <form action="../Forms/modificar_personal_form.php" method="post">
        <b><p>Confirme el numero de documento</p></b>
        <br>
        <br>
        <label for="usuario">Documento:</label>
        <input name="id_usuario" type="text" placeholder="Ingrese el numero documento" class="campos" required>
        <input name="modificar" type="submit" value="Modificar el empleado" class="boton">
        </form>
        <br>
        <a href="../../../Tables/Admin/pagina_tabla_empleado.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>