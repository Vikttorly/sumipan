<html lang="en">
	<head>
		<title>SumiPan Los Llanos CA</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">   
		<script src="js/jquery-1.6.3.min.js" type="text/javascript"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/cufon-replace.js" type="text/javascript"></script>
		<script src="js/NewsGoth_400.font.js" type="text/javascript"></script>
		<script src="js/NewsGoth_700.font.js" type="text/javascript"></script>
		<script src="js/Vegur_300.font.js" type="text/javascript"></script> 
		<script src="js/FF-cash.js" type="text/javascript"></script>
		<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5.js"></script>
			<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
		<![endif]-->
	</head>
	<body id="page2">
	<!--==============================header=================================-->
	<img class="logo3" src="images/sumipan.png">		
		<header>
			<div class="main">
				<div class="wrapper">
					<h1>
					</h1>
					<nav>
						<ul class="menu">
							<li><a href="index.html">Inicio</a></li>
							<li><a href="mision.html">Misión</a></li>
							<li><a href="vision.html">Visión</a></li>
							<li><a href="servicios.html">Servicios</a></li>
							<li><a href="contacto.html">Contactenos</a></li>
							<li><a href="pedido" class="active">Hacer un Pedido</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	<section id="content">
			<div class="main">
				<h2>Hacer un pedido</h2>
				<div class="pedido">
				<form action="pedido.php" method="post"> 
				Nombre del Negocio <input type="text" name="nnegocio"><br>
				Propietario <input type="text" name="propietario"><br>
				Rif <input type="text" name="rif"> Cedula del propietario <input type="text" name="cpropietario"><br>
				Dirrección <input type="text" name="direccion"><br>
				Parroquia <input type="text" name="parroquia"><br>
				Ciudad <input type="text" name="ciudad"><br>
				Estado <input type="text" name="estado"><br>
				Codigo Postal <input type="text" name="cpostal"><br>
				Telefono nº 1 <input type="text" name="t1">
				Telefono nº 2 <input type="text" name="t2">
				Fax <input type="text" name="fax"><br>
				<input type="submit" name="enviar">
				</form>
				</div>
				<?php
					
				error_reporting(0);
					$cactual = $_POST['cactual'];
					$destino = "viclaya1@hotmail.com";
					$asunto = "Pedido de codigo: ".$codigo;

					$comentario = "
						Nombre del Negocio: $_POST[nnegocio]	
						Propietario: $_POST[propietario]
						Rif: $_POST[rif]
						Cedula del Propietario: $_POST[cpropietario]
						Dirrección: $_POST[direccion]
						Parroquia: $_POST[parroquia]
						Ciudad: $_POST[ciudad]
						Estado: $_POST[estado]
						Codigo Postal: $_POST[cpostal]
						Telefono nº 1: $_POST[t1]
						Telefono nº 2: $_POST[t2]
						Fax: $_POST[fax]
					";

					$headers = 'From:'.$destino."\r\n".
					'Reply-To:'.$destino."\r\n".
					'X-Mailer:PHP/'.phpversion();
					mail($destino,$asunto,$comentario,$headers);

				?>

		</body>
		</script>
		</html>