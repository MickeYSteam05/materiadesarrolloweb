<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>TITULO</title>
  <link rel="stylesheet" href="style1.css">
</head>



<body>
  <header class="header">

    <nav class="menu" id="menu">
        <a href="index.html"> Pagina principal</a>
        <a href="paginamickey.html"> Mickey</a>
        <a href="paginaroy.html"> Roy</a>
        <a href="paginaleo.html"> Leo </a>
        <a href="paginaemilio.html"> Emilio </a>
    </nav>
</header>
  <h1>Datos del formulario</h1>

  
    <?php 
        $nombre = $_REQUEST['nombre'];
        $ap_paterno = $_REQUEST['ap_paterno'];
        $ap_materno = $_REQUEST['ap_materno'];
        $nick = $_REQUEST['nick'];
        $correo = $_REQUEST['correo'];
        $contrasena = $_REQUEST['contrasena'];
        $genero = $_REQUEST['genero'];

        echo ("El nombre es $nombre<br>");
        echo ("El apellido paterno es $ap_paterno<br>");
        echo ("El apellido materno es $ap_materno<br>");
        echo ("El nick es $nick<br>");
        echo ("El correo es $correo<br>");
        echo ("La contraseña es $contrasena<br>");
        echo ("El género es $genero<br>");
    ?>



  <footer class="footer">
    <p class="no-padding">© 2026. All rights reserved to the students.</p>
  </footer>
  <script src="script.js"></script>
</body>
</html>




