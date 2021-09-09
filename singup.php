 <?php 

// require ('database.php');
// $message ='';
// if(!empty($_POST['user']) && !empty($_POST['nuser']) && !empty($_POST['Password'])){
// $sql="INSERT INTO usuario (Id, nombre, Usuario, Password, `Puntos`, `hornada`) VALUES ('',:nuser,
// :user,:Password,'0','0')";
// $stmt= $conn->prepare($sql);
// $stmt->bindParam(':nuser',$_POST['nuser']);

// $stmt->bindParam(':user',$_POST['user']);
// $Password = $_POST['Password'];
// $stmt->bindParam(':Password',$Password);


// if($stmt->execute()){
// 	$message = 'Se a registrado bien';
	
// }else{
// 	$message = 'no se a creado correctamente';
// }
// }else{
// 	$message = 'Rellene los datos faltantes';
// }

 ?> 


<!DOCTYPE html>
<html>
<head>
	<title>Registrar</title>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
<style type="text/css">
body{
  background-image:url(img/imagen.jpg); 
	}
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
</style>	

<img class="fondo" src="img/imagen.jpg">
	
<div class="loginBox" >
	<img class="user" src="img/logo.png">
	<h3>Registrase</h3>
	<form action="singup.php" method="post">
		<div class="InputBox">
				<span> <img class="img" src="img/user.svg"></span> <input type="text" name="user" placeholder="Usuario">

		</div>

		<div class="InputBox">
				<span> <img class="img" src="img/user.svg"></span> <input type="text" name="nuser" placeholder="Nombre">

		</div>
				<div class="InputBox">
			<span> <img class="img" src="img/lock.svg"></span> <input type="Password" name="Password" placeholder="Password">

		</div>
		<?php if($_SERVER['REQUEST_METHOD']=='POST'): ?>
		<p><?=$message ?></p>
		<?php endif ?>
				<input type="submit" value="Registrar">

	</form>

		<a href="index.php">Login</a>
</div>
</body>
</html>