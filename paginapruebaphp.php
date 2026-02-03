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

  <h2>Actividad</h2>
  <?php 
  // fracciones
  $a = 2; $b = 3; // primera fracc
  $c = 4; $d = 5; // segunda fracc

  // producto
  $numerador = $a * $c;
  $denominador = $b * $d;
  $resultado = $numerador/$denominador;

  // imprimir resultado

  echo "<div class='resultado'>
        El producto de $a/$b * $c/$d es: $numerador/$denominador   =   " . number_format($resultado, 3) . "
      </div>";
    ?>

  <form method="post">
  <label for="numero">Ingresa un número:</label>
  <input type="number" id="numero" name="numero" required>
  <button type="submit">Calcular</button>
  </form>

  <?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $numero = intval($_POST["numero"]); // obtiene el numero del input
    $resultado = productoDivisionPares($numero);
    echo "<div class='resultado'>
      El producto de los divisores pares de $numero es: $resultado
      </div>";
    }
    




$valores = [true, false];
echo "<table border='1'>"; 
  echo "<tr><th>Valor</th><th>NOT</th></tr>"; 
  foreach ($valores as $v) { 
    $resultado = !$v; 
    echo "<tr> 
            <td>" . ($v ? "true" : "false") . "</td> 
            <td>" . ($resultado ? "true" : "false") . "</td> 
          </tr>"; 
          } 
  echo "</table>";

    function productoDivisionPares($n){
      $producto = 1;
      for ($i = 1; $i <= $n; $i++){
        if ($n % $i == 0 && $i %2 == 0){
          $producto *= $i;
        }
      }
      return $producto;
    }


  ?>





  <style> .resultado { 
  margin-top: 2rem; 
  padding: 1rem; 
  background: rgba(0,0,0,0.6); 
  border: 2px solid #00e0ff; 
  border-radius: 1rem; 
  color: #f8f8ff; 
  font-size: 1.4rem; 
  text-align: center; 
  box-shadow: 0 4px 10px rgba(0,0,0,0.5); 
  width: 80%; } 
  .resultado:empty { display: none; /* oculta el div si está vacío */ 
  } 
  .resultado, .resultado * { color: #f8f8ff !important; } 
  </style>
<br><br><br><br><br><br>
  <footer class="footer">
    <p class="no-padding">© 2026. All rights reserved to the students.</p>
  </footer>
  <script src="scriptphp.js"></script>
</body>
</html>




