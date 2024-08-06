<?php

if(isset($_POST['entrar'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $usu ="neyzer";
    $contra = "1234";
if ($usu == $usuario){
 if($contra== $contraseña){
       header("Location: index2.php");
 }  
 else{
    echo"<script> alert('La contraseña es incorrecta')</script>";

 }

}else{
    echo"<script>alert('Nombre de usuario incorrecto')</script>";

}
}
?>