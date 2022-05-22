<?php 

//function conectar(){
//
//    $user="root";
//    $password="";
//    $server="localhost";
//    $db="hogarVital";
//  
//    $conexion=mysqli_connect($server,$user,$password) or die ("Problemas en la conexion ");
//    mysqli_select_db($db,$conexion);
//
//    return $conexion;
//}

$conexion=mysqli_connect("localhost","root","","hogarVital") or die ("Problemas en la conexion ");


?>
