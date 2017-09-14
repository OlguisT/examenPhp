<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
<style type="text/css">
body{
margin: 0px;
}
h1{
font-family: 'Roboto','sans-serif';
padding: 50px;
background-color: #0099FF;
color: white;
}

body{text-align: center;}
input{
border: 1px solid gray;
padding: 30px;
margin: 5px;
}

.main-button{
padding: 20px 80px;
color: #000;
background-color: #0099FF;
border: none;
}
</style>
</head>
<body>
<header>
</header>

<aside>
<?php
if (isset($_SESSION['MiSession'])) {
echo "<p>Hola:(".$_SESSION['MiSession'].") [<a href='salir.php'>Salir</a>]</p>";


}
else {

session_destroy();
}
?>

<h1>Iniciar Sesión</h1>
<div><img src="../images/usuario.png"></div>

<form id="contact-form" action="verificarusuario.php" method= "post">
<div style="height: 20px;"></div>
<div class="text-fieldsl">
<div class="float-input">
 <input name="usuario" id="usuario" type="text" placeholder="Usuario:">
<span><i class="fa fa-user"></i></span>
</div>
<div class="float-input">
<input name="contrasenia" id="contrasenia" type="password" placeholder="Contraseña:">
<span><i class="fa fa-lock"></i></span>
</div>
<input type="submit" id="submit_contact" class="main-button" value="Login">
                                                          
</div>
</form>
</aside>


<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/gmap3.min.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>
