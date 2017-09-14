<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset ="utf-8">
<title>Readsupremo</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/admin.css" media="screen">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

body{
    text-align: center;
}
.logo{
    width: 200px;
}

h1{
    width: 100%;
}
#contenedor {
    display: table;
    text-align: center;
    margin: 0 auto;
}

#contenidos {
    display: table-row;
}
#columna1, #columna2, #columna3, #columna4, #columna5 {
    display: table-cell;
    border: 1px solid #000;
    vertical-align: middle;
    padding: 10px;
}
</style>


</head>
<body>

<?php

   echo "<nav class='navbar navbar-inverse'>";
    echo "<div class='container-fluid'>";
    echo "<div class='navbar-header'><a class='navbar-brand' >Tu voz Ciudadana</a></div>";
    echo " <ul class='nav navbar-nav navbar-right'>";
    echo "<li><a href='#'>Hola Usuario : (" . $_SESSION ['MiSession'] . ")</a></li>";
    //echo "<li><a href='#''><span class='glyphicon glyphicon-user'></span> $usuario</a></li>";
    echo "<li><a href='salir.php''><span class='glyphicon glyphicon-log-in'></span> Salir</a></li>";
    echo "</ul>";
    echo "</div>";
    echo "</nav>";

 
    
    echo "<img class='logo' src=\"../images/service.svg\">"; 
    echo "<h1>Tu voz ciudadana</h1>";
    
   
    echo "<div id='contenedor'>";

    echo "<div id='contenidos'>";
    echo "<div id='columna'><img src=\"../images/user1.png\"><a href='Usuario/readUsuario.php'>Usuario</a></div>";   
    echo "<div id='columna'><img src=\"../images/user3.png\"><a href='TipoUsuario/readTipoUsuario.php'>TipoUsuario</a></div>";
    echo "<div id='columna'><img src=\"../images/poli2.png\"><a href='Autoridad/readAutoridad.php'>Autoridad</a></div>";
    echo "<div id='columna'><img src=\"../images/tipoAuto.png\"><a href='TipoAutoridad/readTipoAutoridad.php'>Tipo de Autoridad</a></div>";
    echo "</div>";

    echo "<div id='contenidos'>";
    echo "<div id='columna'><img src=\"../images/servicio.png\"><a href='Categoria/readCategoria.php'>Categorias</a></div>";
    echo "<div id='columna'><img src=\"../images/denuncia.png\"><a href='Denuncia/readDenuncia.php'>Denuncia</a></div>";
    echo "<div id='columna'><img src=\"../images/comentario.png\"><a href='Comentario/readComentario.php'>Comentario</a></div>";
    echo "<div id='columna'><img src=\"../images/denunciantes.png\"><a href='Denunciante/readDenunciante.php'>Denunciante</a></div>";
    echo "</div>";

    echo "<div id='contenidos'>";
    echo "<div id='columna'><img src=\"../images/provincia.png\"><a href='Provincia/readProvincia.php'>Provincia</a></div>";
    echo "<div id='columna'><img src=\"../images/ciudad.png\"><a href='Ciudad/readCiudad.php'>Ciudad</a></div>";
    echo "<div id='columna'><img src=\"../images/parroquia.png\"><a href='Parroquia/readParroquia.php'>Parroquia</a></div>";
    echo "<div id='columna'><img src=\"../images/estadoDenu.png\"><a href='EstadoDenuncia/readEstadoDenuncia.php'>Estado de denuncia</a></div>";
    echo "</div>";

    echo "</div>";

 
  
//<img src='../images/user.svg'>
  
  



?>




</body>
</html>
