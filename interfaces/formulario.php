<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Enlace al CSS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

  <link rel="stylesheet" href="../css/styles.css">

  <title>Formulario Contacto</title>
</head>
<body>
  <section class="mostrar">
    <nav class="navbar navbar-expand-sm navbar-light bg-light" id="navbar">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto ">
          <li class="nav-item"><a class="nav-link" aria-current="page" href="../index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link " aria-current="page"
            href="MostrarCargadores.html">Mostrar Cargadores</a></li>
            <li class="nav-item"><a class="nav-link " aria-current="page"
              href="planificarRuta.html">Planificar Ruta</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Garaje
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="anadirVehiculo.html">Añadir</a></li>
                <li><a class="dropdown-item" href="modificarVehiculo.html">Modificar</a></li>
                <li><a class="dropdown-item" href="verGaraje.html">Ver Garaje</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link active" aria-current="page"
              href="formulario.php">Contacto</a></li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="UserMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li>
                    <a class="dropdown-item" href="../interfaces/logout.php">Cerrar Sesión</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <span class="navbar-brand sml">
            <img src="../img/logo.jpg">
          </span>
        </div>
      </nav>
    </section>

    <div class="container-fluid" id="espacio"></div>

    <p class = "formularioContacto">Si desea ponerse en contacto con nosotros, por favor rellene el siguiente formulario</p>

    <form action = "send.php" method= "post" class="row g-3 needs-validation" novalidate>
      <div class="col-lg-4">
        <label for="nombre" class="form-label">Nombre y apellidos</label>
        <input name = "nombre" type="text" class="form-control" id="nombre" required>
        <div class="invalid-feedback">
          Campo Obligatorio!
        </div>
      </div>
      <div class="col-lg-4">
        <label for="correo" class="form-label">Correo</label>
        <input name = "correo" type="email" class="form-control" id="correo" required>
        <div class="invalid-feedback">
          Introduzca un correo electrónico valido.
        </div>
      </div>
      <div class="col-lg-4">
        <label for="asunto" class="form-label">Motivo del contacto</label>
        <input name = "asunto" type="text" class="form-control" id="asunto" required>
        <div class="invalid-feedback">
          Campo Obligatorio!
        </div>
      </div>
      <div class="col-lg-4">
        <label for="mensaje" class="form-label">Mensaje</label>
        <textarea name = "mensaje" class="form-control" id="mensaje" placeholder="Por favor, introduzca el motivo del contacto." required></textarea>
        <div class="invalid-feedback">
          Campo Obligatorio!
        </div>
      </div>
      <div class="col-lg-4">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Acepte las condiciones y permisos para poder continuar.
          </label>
          <div class="invalid-feedback">
            Es obligatorio aceptar las condiciones y permisos del servicio.
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <button class="submit-btn botonContacto" type="submit" >Enviar</button>
      </div>
    </form>
    <!-- Almacenamiento en local del nombre de usuario -->
    <script>
    window.onload = function(){
      document.getElementById('UserMenu').innerHTML = localStorage.getItem('nombre_usuario');
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous"></script>
    <script src = "js/ValidarFormulario.js"></script>
  </body>
  </html>
