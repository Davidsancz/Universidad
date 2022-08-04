<!doctype html>
<html lang="es">
  <head>
    <title>Munster Iuniversity</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="icon" href="../IMG/Logo.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  
  <body>
  
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <a href="../HTML/principal.html" class="log">
            <img src="../IMG/86-867877_monsters-university-logo-by-merwok-monsters-university-school.png" width="150px" height="150px">
          <pre><h1>Munster Iuniversity</h1></pre>
          <!-- <div class="dropdown">
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
              <a class="dropdown-item" href="#"></a>
            </div>
          </div> -->
        </div>
        </div>
      </div>

    </div>

    <div class="container-fluid a">
      <div class="row">
        <div class="col-6">
          <li><a class="dropdown-item" href="../HTML/Acercade.html">Acerca de</a></li>
        </div>
        <div class="col-sm">
          <li><a class="dropdown-item" href="OfertaEducativa.html">Oferta educativa</a></li>
        </div>
        <div class="col-sm">
               <li><a class="dropdown-item" href="Servicios.html">Servicios</a></li>
        </div>
        <div class="dropdown col-sm">
          <button type="button" class="btn btn-primary dropdown-toggle"  data-toggle="dropdown">
            <img src="../IMG/48fc77139951051.Y3JvcCwxMzgwLDEwODAsMjcwLDA.png" width="75px" height="60px" alt="">
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../HTML/index.html"><img src="../IMG/login-circle (2).png" width="50px" height="50px" alt="">Iniciar Sesión</a>
            <a class="dropdown-item" href="../HTML/Perfil.html"><img src="../IMG/53117.png" width="50px" height="50px" alt="">Perfil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../HTML/formAl.html"><img src="../IMG/est-alumno.png" width="70px" height="60px" alt="">Alumnos</a>
            <a class="dropdown-item" href="../HTML/formAdmi.html"><img src="../IMG/fanart__sulley_by_yingyue_draws_df1td8u-250t.png" width="50px" height="50px" alt="">Administrativos</a>
            <a class="dropdown-item" href="../HTML/formPro.html"><img src="../IMG/2784445.png" width="50px" height="50px" alt="">Profesores</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../PHP/cerrarsesion.php"><img src="../IMG/computer-icons-download-login-icon-design-exit.jpg" width="25px" height="25px" alt=""> Logout</a>
          </div>
        </div>
      </div>
      </div>
    </div>



    <hr>

    <div class="container mt-5">
                <form action="../PHP/ActuAl.php" method="POST">
                    <input type="hidden"name="id" value="<?php echo $row['IdAlumno']?>">
        
                    <input type="text"class="form-control mb-3" name="IdAlumno" placeholder="Id"value="">
                    <input type="text"class="form-control mb-3" name="Nombres" placeholder="Nombre"value="">
                    <input type="text"class="form-control mb-3" name="Carrera" placeholder="Sueldo"value="">
                    <input type="text"class="form-control mb-3" name="Turno" placeholder="Area"value="">

                    <input type="submit" class="btn btn-primary btn-block"value="Actualizar">
        
                </form>
    </div>

<?php


?>


      
  
         
       <!-- Optional JavaScript -->
       <!-- jQuery first, then Popper.js, then Bootstrap JS -->
       <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>



</body>

  
</html>