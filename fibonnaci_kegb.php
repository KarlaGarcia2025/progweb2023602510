<?php 
$n1 = 0;
$n2 = 1;
$limite = 2048;

echo "<h2>Secuencia de Fibonacci hasta $limite términos:</h2>";
echo "<pre>";

for ($i = 0; $i < $limite; $i++) { 
    echo $n1 . "<br>";
    $temp = $n1;
    $n1 = $n2;
    $n2 = $temp + $n1;
}

echo "</pre>";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Fibonacci hasta 2048</title>
    <style>
        body { text-align: center; font-family: Arial, sans-serif; }
        marquee { font-size: 24px; font-weight: bold; }
    </style>
</head>
<body>
    <h1><marquee>Números Fibonacci hasta 2048</marquee></h1>
    <h2>García Buendía Karla Estrella</h2>
    <h3>Alumna de Ciencias de la Informática</h3>
    <h3>5° Semestre</h3>
    <h3>Plan de Estudios 21</h3>
</body>
</html>
