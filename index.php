<?php
session_start();
if(!isset($_SESSION['username'])){
  $_SESSION['msg']="Debes loguearte primero";
  header('location: interfaces/loginForm.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <title>E-maps</title>
</head>
<body>

  <section class="mostrar">
    <nav class="navbar navbar-expand-sm navbar-light bg-light" id="navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a class="nav-link active " aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="interfaces/MostrarCargadores.html">Mostrar Cargadores</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="interfaces/planificarRuta.html">Planificar Ruta</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Garaje
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="interfaces/anadirVehiculo.html">A??adir</a>
                </li>
                <li>
                  <a class="dropdown-item" href="interfaces/modificarVehiculo.html">Modificar</a>
                </li>
                <li>
                  <a class="dropdown-item" href="interfaces/verGaraje.html">Ver Garaje</a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="interfaces/formulario.php">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="UserMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <a class="dropdown-item" href="../interfaces/logout.php">Cerrar Sesi??n</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <span class="navbar-brand sml">
          <img src="img/logo.jpg">
        </span>
      </div>
    </nav>
  </section>
  <div class="container-fluid">

    <div class="content">

      <div class="container">
        <h1 class="my-5 text-center">E-Maps</h1>
        <p>Nuestra web est?? orientada a usuarios que tengan un coche el??ctrico o h??brido. Somos un equipo que tiene como objetivo proponer la mejor herramienta web para los clientes que usen dichos coches. Tambi??n buscamos una transici??n de coches de combusti??n a coches eco sostenibles para mejorar el medio ambiente y por ende reducir las emisiones de CO2 y el nivel de ruido en nuestras ciudades. Por ello trabajamos en est?? web que te permite poner una ruta y autom??ticamente te dice donde debes parar para cargar la bater??a, el tiempo de espera que hay en los puntos de recarga, la meteorolog??a en cada momento, la autonom??a... y muchas cosas m??s.</p>
        <div class="owl-carousel owl-1">
          <div>
            <img src="img/Carousel1.jpg" alt="Image" class="img-fluid">
          </div>
          <div>
            <img src="img/Carousel2.jpg" alt="Image" class="img-fluid">
          </div>
          <div>
            <img src="img/Carousel3.jpg" alt="Image" class="img-fluid">
          </div>
          <div>
            <img src="img/Carousel4.jpg" alt="Image" class="img-fluid">
          </div>
          <div>
            <img src="img/Carousel5.jpg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-4">
        <blockquote class="blockquote">
          <p class="mb-0">
            E-Maps me recomienda cargadores poco concurridos y libres. ??Nunca tengo que esperar!
          </p>
          <br>
          <footer class="blockquote-footer">
            Boy Fitzherbert
          </footer>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="blockquote">
          <p class="mb-0">
            Gracias a E-Maps puedo saber con antelaci??n si la lluvia va a retrasar la llegada a mi destino
          </p>
          <br>
          <footer class="blockquote-footer">
            William Hamleigh
          </footer>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="blockquote">
          <p class="mb-0">
            Ahora con E-Maps el uso de mi coche el??ctrico es mucho mas f??cil.
          </p>
          <br>
          <footer class="blockquote-footer">
            Daisy Peshkov
          </footer>
        </blockquote>
      </div>
    </div>
  </div>
  <!-- Almacenamiento en local del nombre de usuario -->
  <script>
  window.onload = function(){
    localStorage.setItem('nombre_usuario',"<?php echo htmlspecialchars($_SESSION["username"]); ?>");
    document.getElementById('UserMenu').innerHTML = localStorage.getItem('nombre_usuario');
  }
  </script>
  <!-- Enlace al JavaScript de Bootstrap -->
  <script src="js/Index-jquery-3.3.1.min.js"></script>
  <script src="js/Index-Indexpopper.min.js"></script>
  <script src="js/Index-bootstrap.min.js"></script>
  <script src="js/Index-owl.carousel.min.js"></script>
  <script src="js/Index-carousel.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>
