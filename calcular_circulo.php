<?php
require_once 'clases.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["radio"])) {
    $radio = $_POST["radio"];
    $radio_numeric = floatval($radio); // Convertir a valor numérico

    if (is_numeric($radio_numeric) && $radio_numeric > 0) {
        $circulo = new Circulo($radio_numeric, "Círculo");
        
        echo "Área del círculo: " . $circulo->area() . "<br>";
        echo "Perímetro del círculo: " . $circulo->perimetro() . "<br>";
        echo $circulo->toString();
    } else {
        echo "El lado del círculo debe ser un número mayor que 0.";
    }
} else {
    echo "Por favor, ingresa el lado del círculo.";
}
