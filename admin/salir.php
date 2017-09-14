<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<img src="">
	<head>
		<meta charset ="utf-8">
		<title>Cierre de sesion</title>
	</head>
	<style type="text/css">
	*{
		margin: 0 auto;
		text-align: center;
		font-family: Roboto, sans-serif;
	}
		a{
			padding: 25px;
			background-color: #0099FF;
			text-decoration: none;
			color: white;
		}
		div{
			padding: 25px;
			margin: 25px;
			
		}
		img{
			width: 200px;
		}
	</style>
<body>

<section>
</section>
<section id="main">
<?php
if (isset($_SESSION['MiSession'])) {
session_destroy();

echo "<img src='../images/cierredesesion.jpg'>";
echo "<div>";
echo "Se ha destruido sesion exitosamente<br/>";
echo "</div>";
echo "<a href='index.php'>Volver</a>";
}else{
	echo "<div>";
echo "ERROR... <br/>";
echo "</div>";

echo "<a href='index.php'>Volver</a>";
}

?>
</section>

</body>
</html>


