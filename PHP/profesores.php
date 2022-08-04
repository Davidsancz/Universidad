<?php

    include("Conexion.php");

    session_start();
    
    //declarar variables que se tienen en la BD

    $nombre= $_POST["Nombres"];
    $sueldo= $_POST["Sueldo"];
    $materia= $_POST["Materia"];


    $insertar_pro = "INSERT INTO profesoress(Nombre, Sueldo, Materia) values ('$nombre', '$sueldo', '$materia')";

    $resultado= $conn->query($insertar_pro);

    if($resultado==TRUE){
        echo "Alumno agregado exitosamente";
    } else {
        echo "Error" . $insertar_pro . "<br>" . $conn->error;
    }
    header("Location: ../HTML/formPro.html");
    $conn->close();
?>