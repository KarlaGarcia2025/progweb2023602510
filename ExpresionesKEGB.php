<?php
// Declaración de variables para cada ejercicio
$x1 = 2; $y1 = 4; // Inciso a
$x2 = 3; // Inciso b
$x3 = 2; // Inciso c
$x4 = 2; // Inciso d
$x5 = 4; // Inciso d

// Cálculo a: 1/x + ((x+y)/3) + 2*(x/y) y residuo de 3.5
$IncisoA = (1/$x1) + (($x1+$y1)/3) + (2*($x1/$y1));

// Cálculo b: (1/2(x)+(3+x)/2(2x^2))/(2+3)x y residuo de 3.7
$IncisoB = ((1/2*$x2)+(($x2+3)/2)*(2*pow($x2,2)))/((2+3)*$x2);

// Cálculo c: √((2x)^2+3^2)/5+√(x^2) y residuo de 3
$IncisoC = (sqrt(pow((2*$x3),2)+pow(3,2))/5) + sqrt(pow($x3,2));

// Cálculo d: ((1/2+1/4+1/8)(∛x))/(√x/2+(3(x^2))/4) y residuo de 0.297
$IncisoD = ((1/2)+(1/4)+(1/8))*pow($x4,1/3) / (sqrt($x4)/2 + (3*pow($x4,2))/4);

// Cálculo e: √((x^2/2+1/√x)/(3+1/2(x^3))) y residuo de 0.4928
$IncisoE = sqrt(((pow($x5,2)/2)+(1/sqrt($x5)))/((3+(1/2)*pow($x5,3))));

?>

<html>
<head>
    <title>Resultados de las expresiones KEGB</title>
    <style>
        h1, h2, h3, h4 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1> Unidad Profesional Interdisciplinaria de Ingeniería y Ciencias Sociales y Administrativas (UPIICSA-IPN) </h1>
    <h1> Resultados de los Cálculos </h1>
    <h2> Ejercicio elaborado por: Karla Estrella García Buendía </h2>
    <h3> Ciencias de la Informática - 5o Semestre - Secc:5CM51 </h3>
    <h4> Programación Web - Prof. Erick Huerta Valdepeña </h4>
    <br>
    <br>
    <br>
    <p> -> INCISO A: <?php echo number_format($IncisoA, 2); ?> (ResultadoA: 3.5)</p>
    <img src="IMAGENES KEGB/IncisoA.png" alt="Resultado Inciso A">

    <p> -> INCISO B: <?php echo number_format($IncisoB, 2); ?> (ResultadoB: 3.7)</p>
    <img src="IMAGENES KEGB/IncisoB.png" alt="Resultado Inciso B">
    
    <p> -> INCISO C: <?php echo number_format($IncisoC, 2); ?> (ResultadoC: 3)</p>
    <img src="IMAGENES KEGB/IncisoC.png" alt="Resultado Inciso C">
    
    <p> -> INCISO D: <?php echo number_format($IncisoD, 3); ?> (ResultadoD: 0.297)</p>
    <img src="IMAGENES KEGB/IncisoD.png" alt="Resultado Inciso D">
    
    <p> -> INCISO E: <?php echo number_format($IncisoE, 4); ?> (ResultadoE: 0.4928)</p>
    <img src="IMAGENES KEGB/IncisoE.png" alt="Resultado Inciso E">
</body>
</html>

