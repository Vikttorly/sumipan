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
	<h1 align="center">Hacer un pedido</h1>
        <div class="container">
			<section class="main">
				<form class="form-4" action="pedido.php" method="post">

				    <table>
				    <tr>
				    <td>
				    <p>
				        <h4>Nombre de Negocio</h4><input type="text" name="nnegocio" placeholder="Nombre de Negocio" required>
				    </p>
				    <p>
				    	<h4>Propietario</h4>
				        <input type="text" name="propietario" placeholder="Propietario" required>
				    </p>
				    <p>
				    	<h4>Rif de Negocio</h4>
				        <input type="text" name="rif" placeholder="Rif" required>
				    </p>
				    <p>
				    	<h4>Cedula</h4>
				        <input type="text" name="cedula" placeholder="Cedula" required>
				    </p>
				    <p>
				    	<h4>Dirección</h4>
				        <input type="text" name="direccion" placeholder="Dirección" required>
				    </p>
				    <p>
				    	<h4>Ciudad</h4>
				        <input type="text" name="ciudad" placeholder="Ciudad" required>
				    </p>

				    </td>

				    <td>
				    <p>
				    	<h4>Estado</h4>
				        <input type="text" name="estado" placeholder="Estado" required>
				    </p>
				    <p>
				    	<h4>Parroquia</h4>
				        <input type="text" name="parroquia" placeholder="Parroquia" required>
				    </p>
				    <p>
				    	<h4>Código postal</h4>
				        <input type="text" name="cpostal" placeholder="Códigopostal" required>
				    </p>
				    <p>
				    	<h4>Telefono Nº 1</h4>
				        <input type="text" name="t1" placeholder="Telefono 1" required>
				    </p>
				    <p>
				    	<h4>Telefono Nº 2</h4>
				        <input type="text" name="t2" placeholder="Telefono 2" required>
				    </p>
				    <p>
				    	<h4>Fax</h4>
				        <input type="text" name="fax" placeholder="Fax" required>
				    </p>
				    <h4>Correo electrónico</h4>
				    <center><input type="text" name="correo" placeholder="Correo"></center>
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
    $con = mysql_connect('localhost','root','') or die(mysql_error());
    mysql_select_db('sumipanlosllanos',$con) or die(mysql_error());

    $nnegocio = $_POST['nnegocio'];
    $propietario = $_POST['propietario'];
    $rif = $_POST['rif'];
    $cedula = $_POST['cedula'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $parroquia = $_POST['parroquia'];
    $cpostal = $_POST['cpostal'];
    $t1 = $_POST['t1'];
    $t2 = $_POST['t2'];
    $fax = $_POST['fax'];


    if(isset($_POST['enviar'])){
    $sql="INSERT INTO orden(nnegocio,propietario,rif,cedula,direccion,ciudad,estado,parroquia,cpostal,t1,t2,fax,fecha_pedido) 
    VALUES ('$nnegocio','$propietario','$rif','$cedula','$direccion','$ciudad','$estado','$parroquia','$cpostal','$t1','$t2','$fax',NOW())";
    mysql_query($sql) or die(mysql_error());
   
}
    ?>
</html>