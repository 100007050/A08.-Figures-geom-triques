<?php
require_once 'clases.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lado1"]) && isset($_POST["lado2"])) {
    $lado1 = floatval($_POST["lado1"]);
    $lado2 = floatval($_POST["lado2"]);

    if (is_numeric($lado1) && is_numeric($lado2) && $lado1 > 0 && $lado2 > 0) {
        $triangulo = new Triangulo("Triángulo", $lado1, $lado2);

        echo "Área del triángulo: " . $triangulo->area() . "<br>";
        echo "Perímetro del triángulo: " . $triangulo->perimetro() . "<br>";
        echo $triangulo->toString();
    } else {
        echo "Los lados del triángulo deben ser números mayores que 0.";
    }
} else {
    echo "Por favor, ingresa los lados del triángulo.";
}
?>
