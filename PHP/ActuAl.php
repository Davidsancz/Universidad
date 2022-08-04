<?php
    include("Conexion.php");
    

    $id=$_POST['IdAlumno'];
    $nombre=$_POST['Nombres'];
    $pater=$_POST['Carrera'];
    $mater=$_POST['Turno'];

    
    $sql="UPDATE alumnoss SET IdAlumno ='$id',Nombres='$nombre', Carrera='$pater', Turno='$mater' where IdAlumno ='$id'";
    $query=mysqli_query($conn,$sql);
    header("location:ConsultarAl.php");
      
?>

