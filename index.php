<?php 
error_reporting(E_ERROR);

SESSION_START();
if (isset($_SESSION['usuario'])) {
	header('location:loader.php');
}

if (!empty($_POST['user']) and !empty($_POST['Password'])) {
	
	$user=$_POST['user'];
	$Password=$_POST['Password'];
require('database.php');
	$consulta = $conn->prepare('SELECT id,usuario,Password from usuario where usuario =:user and Password = :Password');
	$consulta ->execute(array(':user'=>$user,':Password'=>$Password));

	$resultado= $consulta->fetch();

	if ($resultado!==false) {
		$_SESSION['usuario']= $user;
		$_SESSION['id']=$resultado['id'];
		header('location:loader.php');
	}else{
		$message='El usuario o la contraseña estan mal';
	}
}else{
$message='Debe relllenar los datos faltantes';	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	
</head>
<body>
<style type="text/css">
	
	p{
	width: 100%;
	height: 25px;
	color: #fff;
	font-size: 15px;
	text-align: center;
	display: block;
	border-radius: 7px;
	background-color:#D55858;
}
	.loginBox input[type="text"],
.loginBox input[type="Password"]
{
	text-decoration: none;
border: none;
border-bottom: 2px solid #262626;
height: 40px;
outline: none;
color: #262626;
background: transparent;
font-size:16px;
padding-left:20px;
box-sizing: border-box;
transition: .2s;
}

</style>

<img class="fondo" src="img/imagen.jpg">
	
<div class="loginBox" >
	<img class="user" src="img/logo.png">
	<h3>Iniciar Sesión</h3>
	<form action="index.php" method="post" id="login">
		<div class="InputBox">
				<span> <img class="img" src="img/user.svg"></span> <input type="text" name="user" placeholder="Usuario">

		</div>
				<div class="InputBox">
			<span> <img class="img" src="img/lock.svg"></span> <input type="Password" name="Password" placeholder="Password">

		</div>

		<?php if($_SERVER['REQUEST_METHOD']=='POST'):?>
		<p class="error"><?=$message ?></p>
		<?php endif ?>
				<input type="submit" value="Login">

				
	

	</form>

	<a href="singup.php">Registrar</a>

</div>
<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
