<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>PAGINA DE PRUEBA PHP CON BD</title>
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
  <h1>PHP CON BD PostgreSQL</h1>

  <button id="botonConexion">Probar conexión BD</button>
  <div id="resultado" class="resultado"></div>






<style> .resultado { margin-top: 2rem; padding: 1rem; 
background: rgba(0,0,0,0.6); border: 2px solid #00e0ff; 
border-radius: 1rem; color: #f8f8ff; font-size: 1.4rem; 
text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.5); 
width: 80%; } 
.resultado:empty { display: none; /* oculta el div si está vacío */ 
} 
.resultado, .resultado * { color: #f8f8ff !important; } </style>

  <footer class="footer">
    <p class="no-padding">© 2026. All rights reserved to the students.</p>
  </footer>
  <script src="scriptphp.js"></script>
</body>
</html>




