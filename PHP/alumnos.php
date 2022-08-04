<?php

    include("Conexion.php");

    session_start();
    
    //declarar variables que se tienen en la BD

    $nombre= $_POST["Nombres"];
    $carrera= $_POST["Carrera"];
    $turno= $_POST["Turno"];


    $insertar_al = "INSERT INTO alumnoss(Nombres, Carrera, Turno) values ('$nombre', '$carrera', '$turno')";

    $resultado= $conn->query($insertar_al);

    if($resultado==TRUE){
        echo "Alumno agregado exitosamente";
    } else {
        echo "Error" . $insertar_al . "<br>" . $conn->error;
    }
    header("Location: ../HTML/formAl.html");

    $conn->close();
?>