<?php

$usuario=$_POST["Usuario"];
$clave=$_POST["Clave"];
session_start();

$_SESSION["Clave"]=$clave;

$conn =mysqli_connect("localhost","root","","login");
$consulta="SELECT * FROM login WHERE usuario='$usuario' and Clave= '$clave'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

$location = "login.html?error=login";

if($filas=$clave)
{
    $location = "/pagina/idk/index.html";
}

mysqli_free_result($resultado);
mysqli_close($conn);


header("Location: " . $location);

?>