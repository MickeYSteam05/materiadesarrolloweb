<?php
  $host = "localhost";
  $port = "5432";
  $dbname = "bd_aprendizaje";
  $user = "mickey";
  $password = "mickey";

  try {
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);

    // Consulta todos los registros de la tabla
    $sql = "SELECT codigo_ca, descripcion_ca FROM tb_categoria";
    $stmt = $conn->query($sql);

    // Recorre los resultados con un foreach
    foreach ($stmt as $row) {
      echo "Código: " . $row['codigo_ca'] . " - Descripción: " . $row['descripcion_ca'] . "<br>";
    }

  } catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
  }
?>
