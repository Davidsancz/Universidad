<?php

    require "Conexion.php";

    $student= $_GET['IdAdmi'];

    $eliminarAl="DELETE FROM administrativoss WHERE IdAdmi = '$student'";

    $res=$conn->query($eliminarAl);

    if($res == TRUE){
        echo "Eliminado";
    } else{
        echo "Error" . $eliminarAl . "<br>" . $conn->error;
    }
    header("Location: ../PHP/ConsultarAd.php");
?>