<?php
    include("Conexion.php");
    

    $id=$_POST['IdAdmi'];
    $nombre=$_POST['Nombre'];
    $pater=$_POST['Sueldo'];
    $mater=$_POST['Area'];

    
    $sql="UPDATE administrativoss SET IdAdmi ='$id',Nombre='$nombre', Sueldo='$pater', Area='$mater' where IdAdm ='$id'";
    $query=mysqli_query($conn,$sql);
    header("location:ConsultarAl.php");
      
?>


