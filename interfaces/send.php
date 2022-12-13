<?php 
	$nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $destino = "support@emaps.es";
    $headers = "De  ".$nombre ." con correo de contacto: " .$correo;

    
   
    mail($destino,$asunto,$mensaje);
    

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Enlace al CSS de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Para el icono de volver a inicio-->
        <link rel="stylesheet" href="../css/styles.css">
		<title>Contacto</title>
	</head>
	<body>
		<p class = "formularioContacto">Gracias por contactar con nosotros! Responderemos lo antes posible.</p>

			<div class = "container-fluid">
				<div class = "row" id = "esp">
					<nav aria-label="...">
							<ul class="pagination">
								<li class="page-item">
									<a class = page-link href = "../index.php"><i class="fa fa-fw fa-home"></i></a>
								</li>
						</ul>
					</nav>
			</div>
		</div>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
		crossorigin="anonymous"></script>
	</body>
</html>


