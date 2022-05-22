<?php
include("../Models/conexion.php");

if($_SESSION['correo']==null || empty($_SESSION)){

$correo=$_POST['correo'];
$password=$_POST['password'];

$consulta="SELECT * FROM usuarios where correo='$correo' and contraseña='$password'";
$resultado=mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);

if($filas['cargo_id']==2){
    session_start();
    $_SESSION['correo']=$correo;
	header("location:../Views/Html/pagina_inicial_empleado.html");
        
}else
if($filas['cargo_id']==1){
    session_start();
    $_SESSION['correo']=$correo;
	header("location:../Views/Html/pagina_inicial.html");
	}
else{
    header("location:../Views/Html/nocorrecto.html");
	?>
    <?php
    include("login.php");
    ?>
    <?php  
}
mysqli_free_result($resultado);
mysqli_close($conexion);

}
?>