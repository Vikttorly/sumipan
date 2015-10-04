<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Hacer un pedido</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="js/modernizr.custom.63321.js"></script>
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>	
			@import url(http://fonts.googleapis.com/css?family=Raleway:400,700);
			body {
				background: #e0e0e0 url(images/bg12.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
    <br><br>
	<h1 align="center">Registro o <a href="index.php">Ingresa</a></h1>
        <div class="container">
			<section class="main">
				<form class="form-4" action="registro.php" method="post">

				    <table>
				    <tr>
				    <td>
				    <p>
				        <h4>Usuario</h4><input type="text" name="usuario" placeholder="Nombre de usuario" required>
				    </p>
				    <p>
				    	<h4>Nombres Reales</h4>
				        <input type="text" name="nombres" placeholder="Ejemplo: Javier" required>
				    </p>
				    <p>
				    	<h4>Apellidos Reales</h4>
				        <input type="text" name="apellidos" placeholder="Ejemplo: Salinas" required>
				    </p>

				    </td>

				    <td>
				    <p>
				    	<h4>Contraseña</h4>
				        <input type="text" name="clave1" placeholder="Contraseña" required>
				    </p>
				    <p>
				    	<h4>Repite la Contraseña</h4>
				        <input type="text" name="clave2" placeholder="Repite la contraseña" required>
				    </p>
				    <p>
				    	<h4>Correo Electrónico</h4>
				        <input type="text" name="correo" placeholder="Correo electronico" required>
				    </p>
				    </td>
				    </tr>
				    <table>
				    <p>
				       <input type="submit" name="enviar" value="Enviar" class="pedidob">
				    </p>   

				</form>​
				</div>
			</section>
        </div>
    </body>


<?php
error_reporting(0);
$con = mysql_connect('localhost','root','');
mysql_select_db('sumipanlosllanos',$con);


$usuario = $_POST['usuario'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];
$correo = $_POST['correo'];


if (isset($_POST['enviar'])){
	$sql = "INSERT INTO usuario(usuario,clave,nombres,apellidos,correo) VALUES ('$usuario','$nombres','$apellidos','$clave2','$correo');";
	mysql_query($sql);
}


?>

    </html>