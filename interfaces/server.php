<?php
session_start();

$username="";
$password="";
$errors=array();

$db=mysqli_connect('emaps.es.mysql','emaps_esclientes','forexample','emaps_esclientes');
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
  echo("fail");
}
//Login
if (isset($_POST['log_in_user'])){
	$username=$_POST['username_input'];
	$password=$_POST['password_input'];
	if (empty($username)){
		array_push($errors, "El nombre de usuario es necesario para iniciar sesion");
	}
	if (empty($password)){
		array_push($errors,"La contraseña es necesaria");
	}
	
	if(count($errors)==0){
		$query= "SELECT * FROM clientes WHERE usuario='$username' AND password='$password' ";
		$results=mysqli_query($db, $query);
		if (mysqli_num_rows($results)==1){
		
		    session_start();
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in";
			header("Location: ../index.php");
			exit();
		}
		else{
			
			array_push($errors, "El usuario o la contraseña es incorrecta");
			
		}
	}
	

}
//Registro
if(isset($_POST['create_new_user'])){
    $username=$_POST['username_register'];
    $email=$_POST['email_register'];
    $password=$_POST['password_register'];
    if (empty($username)){
		array_push($errors, "El nombre de usuario es necesario para iniciar sesion");
	}
	if (empty($password)){
		array_push($errors,"La contraseña es necesaria");
	}
	if (empty($email)){
		array_push($errors,"El email debe ser introducido");
	}
	$user_check_query="SELECT * FROM clientes WHERE usuario='$username' OR email='$email' LIMIT  1"; //Comprobamos si hay un usuario
	$result=mysqli_query($db,$user_check_query);
	$user=mysqli_fetch_assoc($result);
	if($user){ //Si existe el usuario
	
	    if($user['usuario']===$username){
	        array_push($errors,"El nombre de usuario ya existe");
	    }
	    if($user['email']===$email){
	        array_push($errors,"El correo ya existe");
	    }
	}
	if(count($errors)==0){
	    $query="INSERT INTO clientes (usuario,email,password) VALUES('$username','$email','$password')";
	    mysqli_query($db,$query);
	    $_SESSION['username']=$username;
	    $_SESSION['success']="Has iniciado sesion en tu nueva cuenta";
	    header("Location: ../index.php");
		exit();
	}
}


?>
