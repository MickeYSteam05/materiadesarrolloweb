<?php 
    // 1. Captura de datos básicos del usuario
    $hora_nac = $_POST['hora_nac'] ?? 'No proporcionada';
    $fecha_nac = $_POST['fecha_nac'] ?? 'No proporcionada';
    $tiene_pareja = $_POST['tiene_pareja'] ?? 'no';
    
    // 2. Captura de datos de salud y situación
    $enfermedades = $_POST['enfermedades'] ?? 'Ninguna';
    $sit_fin = $_POST['sit_fin'] ?? 'No especificada';
    $sit_lab = $_POST['sit_lab'] ?? 'No especificada';

    // 3. Lógica para datos de la pareja
    $datos_pareja_html = "";
    if ($tiene_pareja === "si") {
        $hora_par = $_POST['hora_nac_par'] ?? 'No proporcionada';
        $fecha_par = $_POST['fecha_nac_par'] ?? 'No proporcionada';
        $datos_pareja_html = "<li><strong>Hora pareja:</strong> $hora_par</li>
                              <li><strong>Fecha pareja:</strong> $fecha_par</li>";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resumen de Datos</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <h1>Resumen de tu información</h1>
    <ul>
        <li><strong>Hora de nacimiento:</strong> <?php echo $hora_nac; ?></li>
        <li><strong>Fecha de nacimiento:</strong> <?php echo $fecha_nac; ?></li>
        <li><strong>¿Tiene pareja?:</strong> <?php echo ucfirst($tiene_pareja); ?></li>
        
        <?php echo $datos_pareja_html; // Solo aparecerá si tiene pareja ?>

        <li><strong>Enfermedades:</strong> <?php echo $enfermedades; ?></li>
        <li><strong>Situación Financiera:</strong> <?php echo ucfirst($sit_fin); ?></li>
        <li><strong>Situación Laboral:</strong> <?php echo ucfirst($sit_lab); ?></li>
    </ul>

    <p><a href="formulario_horoscopos.html">Volver al formulario</a></p>
</body>
</html>