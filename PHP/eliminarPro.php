<?php

    require "Conexion.php";

    $student= $_GET['IdProf'];

    $eliminarAl="DELETE FROM profesoress WHERE IdProf = '$student'";

    $res=$conn->query($eliminarAl);

    if($res == TRUE){
        echo "Eliminado";
    } else{
        echo "Error" . $eliminarAl . "<br>" . $conn->error;
    }
    header("Location: ../PHP/ColsultarPro.php");
?>