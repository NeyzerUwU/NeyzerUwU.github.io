<?php
$servername="localhost";
$database="registros";
$username="root";
$password="";

$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn -> connect_error) {
    echo "no conectado";
}
    
    else{   
        echo"conectado";


}




?>
