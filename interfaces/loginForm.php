<?php
session_start();

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../index.php");
    exit;
}
include('server.php'); 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    
	<title>Login E-Map</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
            
			<div class="signup">
				<form method="post" action="loginForm.php">
					<label for="chk" aria-hidden="true">Registro</label>
					<div class="error"><?php include('errors.php'); ?> </div>
					<input type="text" name="username_register" placeholder="User name" required="">
					<input type="email" name="email_register" placeholder="Email" required="">
					<input type="password" name="password_register" placeholder="Password" required="">
					<button type="submit" name="create_new_user">Registrarse</button>
				</form>
			</div>

			<div class="login">
				<form method="post" action="loginForm.php">
					<label for="chk" aria-hidden="true">Login</label>
					<div class="error"><?php include('errors.php'); ?> </div>
					<input type="username" name="username_input" placeholder="Username" required="">
					<input type="password" name="password_input" placeholder="Password" required="">
					<button type="submit" name="log_in_user">Iniciar Sesión</button>
				</form>
			</div>
	</div>
</body>
</html>