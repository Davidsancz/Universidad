<?php

session_start();

require "Conexion.php";


$usuario= $_POST["txtNombre"];
$pass= $_POST["txtContraseña"];

$validar= mysqli_query($conn, "SELECT * from usuarioss where usuario = '$usuario' AND pass = '$pass'");

if(mysqli_num_rows($validar)>0){
    header("Location: ../HTML/principal.html");
}
else {
    echo '<script> 
                    alert ("No existe ese usuario") 
                    window.history.go(-1);
        </script>';               
}

?>