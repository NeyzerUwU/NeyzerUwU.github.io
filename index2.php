<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Informacion de la base de datos</h1>
    <?php
include ("conexion.php");
    ?>
<table border="1">
    <td>Nombre</td>
    <td>Edad</td>
    <td>Sexo</td>
    <td>Correo</td>
    <td>Contraseña</td>
<?php
  $sql="SELECT * FROM usuarios";
  $resultado = mysqli_query($conn, $sql);

  while($mostrar = mysqli_fetch_array($resultado)){
    ?>
    <tr>
    <td><?php echo $mostrar['nombre']?></td>
    <td><?php echo $mostrar['edad']?></td>
    <td><?php echo $mostrar['sexo']?></td>
    <td><?php echo $mostrar['correo']?></td>
    <td><?php echo $mostrar['contrasena']?></td>
    </tr>
<?php
}
?>
</table>
</body>
</html>