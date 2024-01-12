<?php
require_once 'clases.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["lado1"])) {
    $lado1 = $_POST["lado1"];
    $lado1_numeric = floatval($lado1); // Convertir a valor numérico

    if (is_numeric($lado1_numeric) && $lado1_numeric > 0) {
        $cuadrado = new Cuadrado($lado1_numeric, "Cuadrado");
        
        echo "Área del cuadrado: " . $cuadrado->area() . "<br>";
        echo "Perímetro del cuadrado: " . $cuadrado->perimetro() . "<br>";
        echo $cuadrado->toString();
    } else {
        echo "El lado del cuadrado debe ser un número mayor que 0.";
    }
} else {
    echo "Por favor, ingresa el lado del cuadrado.";
}
