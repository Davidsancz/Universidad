<?php

    require "Conexion.php";

    $student= $_GET['IdAlumno'];

    $eliminarAl="DELETE FROM alumnoss WHERE IdAlumno = '$student'";

    $res=$conn->query($eliminarAl);

    if($res == TRUE){
        echo "Eliminado";
    } else{
        echo "Error" . $eliminarAl . "<br>" . $conn->error;
    }
    header("Location: ../PHP/ConsultarAl.php");
?>