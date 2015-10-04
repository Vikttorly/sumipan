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
	<h1 align="center">Ingresa para hacer un pedido</h1>
        <div class="container">
			<section class="main">
				<form class="form-4" action="" method="post"><br><br><br><br><br><br><br>
				<div align="center" class="centrado">
							<input type="text" name="usuario" placeholder="Usuario">
							<input type="text" name="clave" placeholder="Contraseña">
							<input type="submit" name="enviar" value="Ingresar">
							<h4>¿No eres usuario? <a href="registro.php">Registrate</a></h4>
				</div>
				</form>
			</section>
        </div>
    </body>


    <?php
    error_reporting(0);
    $con = mysql_connect('localhost','root','');
    mysql_select_db('sumipanlosllanos',$con);

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if (isset($_POST['enviar'])){
    	$sql = "SELECT * FROM usuario WHERE usuario='$usuario' AND clave='$clave'";
    	mysql_query($sql);
    	echo '<META HTTP-EQUIV="REFRESH" CONTENT="1;URL=pedido.php">';
    }


    ?>
    
    <a href="admin.php">Admin</a>
</html>