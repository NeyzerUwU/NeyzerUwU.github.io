<?php
include("conexion.php");
if(isset($_POST["Registrarse"])) {
    mysqli_query($conn, "INSERT INTO registro (nombre,edad,sexo,correo,contrasena) VALUES ('$_POST[nombre]','$_POST[edad]','$_POST[sexo]',
    '$_POST[correo]','$_POST[contrasena]')");
}
header("Location:index.html");  
?>

