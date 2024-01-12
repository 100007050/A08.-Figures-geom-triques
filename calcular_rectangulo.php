<?php
require_once 'clases.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lado1"]) && isset($_POST["lado2"])) {
    $lado1 = floatval($_POST["lado1"]);
    $lado2 = floatval($_POST["lado2"]);

    if (is_numeric($lado1) && is_numeric($lado2) && $lado1 > 0 && $lado2 > 0) {
        $rectangulo = new Rectangulo("Rectángulo", $lado1, $lado2);

        echo "Área del rectángulo: " . $rectangulo->area() . "<br>";
        echo "Perímetro del rectángulo: " . $rectangulo->perimetro() . "<br>";
        echo $rectangulo->toString();
    } else {
        echo "Los lados del rectángulo deben ser números mayores que 0.";
    }
} else {
    echo "Por favor, ingresa los lados del rectángulo.";
}

