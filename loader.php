
<?php 

error_reporting(E_ERROR);
// Desactivar toda notificación de e
$mensage ='';
SESSION_START();

if (!isset($_SESSION['usuario'])) {
	header('location:index.php');
}else{
	$_SESSION['usuario'];
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Wooble</title>
	
</head>
<body>

	<style type="text/css">
		
body{
	margin: 0;
	padding: 0;
	background: #fff;
	font-family: arial;
}
.loader{
position: absolute;
	top: 40%;
	left:50%;
	transform: translate(-50%,-50%);
}
.loader h1{
	margin: 0;
	padding: 0;

	text-transform: uppercase;
	font-size: 150px;
	color: rgba(255,255,255,0.1);
	background-image: url(img/imagen.jpg); 
	background-repeat: repeat-x;
-webkit-background-clip: text;
animation: animate 10s linear infinite;


}
h2{
	font-weight: lighter;
	font-size: 50px;

	text-align: center;
	color: #262626;
}

	@keyframes animate {
		0%{
			background-position: left 0px top 10px;
		}

			40%{
			background-position: left 1000px top 10px;
		}



			100%{
			background-position: left 0px top 10px;
		}
}


.btn{
	text-transform: uppercase;
	font-size: 20px;
	width: 200px;
	height: 40px;
	text-align: center;
	border-radius: 80px;
	line-height: 40px;
	border: 3px solid #009688;
	display: block;
	text-decoration: none;
	margin: 50px auto;
	transform: translateY(300px);
	color:#009688;
	position: relative; 
	
	overflow: hidden;
	background: transparent;
transition: .3s;

}
.btn:before{
	content: '';
	width: 100%;
	height: 100%;
	opacity: .5;
	position: absolute;
	background: #009688;
	top: -100%;
	left: 0;
	z-index: -1;
	transition: .3s;

}
.btn:after{
	content: '';
	width: 100%;
	height: 100%;
	position: absolute;
	background: #009688;
	top: -100%;
	left: 0;
	z-index: -1;
	transition: .3s;
	transition-delay: .2s;

}
.btn:hover{
	color:#fff;
}
.btn:hover:before{
top: 0;
}
.btn:hover:after{
top: 0;
}

	</style>
	<h2><b><?=$_SESSION['usuario']; ?></b> Bievenido a  </h2>
	
	<div class="loader">
		
		<h1>Wooble</h1>

	</div>


<a href="inicio.php" class="btn">Iniciar</a>
		
</body>
</html>