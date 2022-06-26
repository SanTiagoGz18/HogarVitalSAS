<?php include ("../../../../../Models/conexion.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Modificar Lotes - Hogar Vital</title>
    <link rel="stylesheet" href="../../../../css/estilo_modificar.css">
    <link rel="icon" type="imagenes/png" href="../../../../imagenes/logo_icon.ico">
  </head>
  <body>

    <div class="contenedor">
      <h1>Modificación de lote</h1>
      <form action="../Forms/modificar_lote_alimento_form.php" method="post">
        <b><p>Confirme el código del lote</p></b>
        <br>
        <br>
        <label for="lote_alimento" id="lmarca">Id del lote:</label>
        <input name="id_loteA" type="text" placeholder="Ingrese el id del lote..." class="campos" required>
        <input name="modificar" type="submit" value="Modificar el lote" class="boton">
        </form>
        <br>
        <a href="../../../Tables/Admin/pagina_tabla_lote_alimento.php"><input type="submit" value="Volver" class="boton2"></a>
    </div>
  </body>
</html>