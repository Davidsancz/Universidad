<?php

    include("Conexion.php");

    session_start();
    
    //declarar variables que se tienen en la BD

    $nombre= $_POST["Nombres"];
    $sueldo= $_POST["Sueldo"];
    $area= $_POST["Area"];


    $insertar_ad = "INSERT INTO administrativoss(Nombre, Sueldo, Area) values ('$nombre', '$sueldo', '$area')";

    $resultado= $conn->query($insertar_ad);

    if($resultado==TRUE){
        echo "Alumno agregado exitosamente";
    } else {
        echo "Error" . $insertar_ad . "<br>" . $conn->error;
    }
    header("Location: ../HTML/formAdmi.html");
    $conn->close();
?> 