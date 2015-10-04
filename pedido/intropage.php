<?php
$con = mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_db('sumipanlosllanos',$con)or die(mysql_error());

session_start();
if(!isset($_SESSION["session_username"])) {
 header("location:index.php");
 
} 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel de administrador</title>
<head>
		<meta charset='utf-8'>
    </head>
<body>
	<br>
	<center><h3>Bienvenido al Panel de administracion</h3><br>
	<h4>Ultimos pedidos</h4>
	<?php

	$sql = "SELECT * FROM orden";
	$result = mysql_query($sql) or die(mysql_error());
		
			echo "<table border='1'>"; 
			echo "<tr><td>ID</td><td>Nombre Negocio</td><td>Propietario</td><td>RFI</td><td>Cédula</td><td>Dirección</td><td>Ciudad</td><td>Estado</td><td>Parroquia</td><td>Código Postal</td><td>Teléfono 1</td><td>Teléfono 2</td><td>FAX</td><td>Fecha de pedido</td></tr>"; 
			while ($row = mysql_fetch_row($result)){ 
       		echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td><td>$row[6]</td><td>$row[7]</td><td>$row[8]</td><td>$row[9]</td><td>$row[10]</td><td>$row[11]</td><td>$row[12]</td><td>$row[13]</td></tr>"; 
			} 
	echo "</table><br><br>";


	?>
</center>
</body>
</html>