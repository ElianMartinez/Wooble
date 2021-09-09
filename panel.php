<?php 

 error_reporting(E_ERROR);
// Desactivar toda notificación de e

// SESSION_START();
// if (!isset($_SESSION['usuario'])) {
// 	header('location:index.php');
// }else{
// 	require('database.php');
// 	$Id = $_SESSION['id'];
// 	$consulta = $conn->prepare('SELECT `Puntos`, `hornada`, `Materia` FROM `usuario` WHERE `Id`= :id ');

// 	$consulta->execute(array(':id'=>$Id));

// 	$resultado= $consulta->fetch();

// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel</title>
</head>
<body>
<style type="text/css">
body{
	margin: 0;
	padding: 0;
	font-family: 'Roboto', sans-serif;
}

.panel{
	position: absolute;
	width: 30%;
	height: 100%;
	background-color:#001F3F; 
}
.usuario
{
	position: relative;
	width:120px;
	overflow: hidden;
	height: 120px;
	margin-top:15PX; 
	margin-bottom: 5PX;
	margin:5px auto; 
	border: 2px solid #fff;
	border-radius: 100%;
}
.usuario img{
	width: 100%;
	height: 100%;
}
.user{
	
	width: 99%;
	height: 35px;
	display: block;
		text-align: center;

margin-top: 5px;

}
.user p {
	text-align: center;
	font-size: 45px;
	text-decoration: none;
	color: #fff;
	margin: 13px;
	border-bottom:2px solid #fff;
}
a{
	position: absolute;
	display: block;
	width: 100%;
	top: 90%;
	text-decoration: none;
	color: #fff;
	text-align: center;
	height: 20px;
	transition: .3s;
}
a:hover{
	color: #EC2323;
	text-decoration:underline;
}
	
.item{
	margin:0;
	padding: 0;
	color: #C0BCBC;
	font-size: 19px;
}
h2{
	position: absolute;
	display: block;
	color: #001F3F;
	left: 30%;
	margin-bottom:2px; 
	width: 70%;
	height:20%;
	font-size:60px;
	text-align: center;
}



</style>

<h2>Jugadores</h2>

<table>
	<td>Usuario</td>
	<td>Nivel</td>
	<td>Puntos</td>
</table>

<div class="panel">
	<div class="usuario">
		<img src="img/user2.png">
	</div> 
	<div class="user">
	<p><?=$_SESSION['usuario']; ?></p>
		<label class="item">Puntos</label>
		<p >0 Pts</p>
		<label class="item">Nivel</label>
		<p >1</p>
		<label class="item">Materia</label>
		<p>Variado</p>
	</div>
<a href="salir.php">Cerrar Sesion</a>
</div>

</body>
</html>