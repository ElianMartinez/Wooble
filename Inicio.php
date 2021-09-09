

<?php 

error_reporting(E_ERROR);
// Desactivar toda notificación de e

// SESSION_START();
// if (!isset($_SESSION['usuario'])) {
// 	header('location:index.php');
// }
// require('database.php');
// 	$Id = $_SESSION['id'];
// 	$consulta = $conn->prepare('SELECT  `Materia` FROM `usuario` WHERE `Id`= :id ');

// 	$consulta->execute(array(':id'=>$Id));
// 	$resultado= $consulta->fetch();
// 	$rr=$resultado['Materia'];
// if ($rr == null){
	
// }else{
// 	header('location:panel.php');
// }

// if($_SERVER['REQUEST_METHOD']=='POST') {
// 	$materia = $_POST['materia'];
// 	$consulta = $conn->prepare('UPDATE `usuario` SET `Materia`=:materia WHERE Id =:id ');
// 	$consulta ->execute(array(':materia'=>$materia,':id'=>$_SESSION['id']));
// 	header('location:panel.php');

// }

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Wooble</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

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
	height: 40px;
	display: block;
		text-align: center;

margin-top: 5px;

}
.user p {
	text-align: center;
	font-size: 50px;
	text-decoration: none;
	color: #fff;
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

.materia{
	position: absolute;
	width: 650px;
	display: block;
	left: 40%;
	top: 40%;

}
.formulario input[type="radio"]{
	display: none;
	margin: 5px;
}
.formulario label{
	color:#001F3F; 
	padding: 5px 15px 5px 48px;
	display: inline-block;
	font-size: 1.2em;

	position: relative;
	border-radius: 5px;
	cursor: pointer;
	transition: all .3s ease;
}
.formulario label:hover{
		background:rgba(0,61,63,0.3); 
	}

.formulario label:before
{
content: "";
width: 17px;
height: 17px;
display: inline-block;
background:none;
border:3px solid #001F3F;
border-radius: 50%;
position: absolute;
left: 17px;
top: 8px;
}
.formulario input[type="radio"]:checked + label
{
padding: 5px 15px;
background:#001F3F;
color:#fff; 
border-radius: 4px;
}
.formulario input[type="radio"]:checked + label:before{
	display: none;
}

.btn{
	
	font-size: 20px;
	width: 150px;
	height: 40px;
	text-align: center;
	border-radius: 80px;
	line-height: 40px;
	border: 3px solid #001F3F;
	display: block;
	margin:40px auto;
	transform: translateX(-50%,-50%);
	text-decoration: none;
	color:#001F3F;
	position: relative; 
	cursor: pointer;
	
	background: transparent;
transition: .3s;

}

.btn:hover{
	color:#fff;
	background:#001F3F;
}



</style>
<h2>Selecciona una materia para competir</h2>

<div class="materia">

	<form class="formulario" action="Inicio.php" method="POST">
  <input type="radio" name="materia" id="Ingles" value="Ingles">
  <label for="Ingles">Ingles</label>
  <input type="radio" name="materia" id="Sociales" value="Sociales"\>
   <label for="Sociales">Sociales</label>
  <input type="radio" name="materia" id="Informatica" value="Informatica">
   <label for="Informatica">Informatica</label> 
     <input type="radio" name="materia" id="Naturales" value="Naturales">
   <label for="Naturales">Naturales</label> 
    <input type="radio" name="materia" id="Lengua Española" value="Lengua Española">
   <label for="Lengua Española">Lengua Española</label > 
   <input type="radio" name="materia" id="Variado" value="Variado">
   <label for="Variado">Variado</label> 

   <input class="btn" type="Submit" name="Iniciar">
</form>
	
</div>




<div class="panel">
	<div class="usuario">
		<img src="img/user2.png">
	</div> 
	<div class="user">
	<p>Elián Martínez</p>	
	</div>
<a href="salir.php">Cerrar Sesion</a>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
<script src="Iniciar.js">
</script>
</body>
</html>
