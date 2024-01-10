<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Introducir Lados</title>
    <?php $figura = $_GET["figura"]; ?>
</head>
<body class="<?php echo strtolower($figura); ?>">

<h1>Introduce los lados de la figura <?php echo $figura; ?>:</h1>

<div class="form-container <?php echo strtolower($figura); ?>">
    <?php
    if ($figura === "Triangulo") {
    ?>
        <form action="calcular_triangulo.php" method="post">
            Lado 1: <input type="number" name="lado1" required><br>
            Lado 2: <input type="number" name="lado2" required><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    } elseif ($figura === "Rectangulo") {
    ?>
        <form action="calcular_rectangulo.php" method="post">
            Lado 1: <input type="number" name="lado1" required><br>
            Lado 2: <input type="number" name="lado2" required><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    } elseif ($figura === "Cuadrado") {
    ?>
        <form action="calcular_cuadrado.php" method="post">
            Lado: <input type="number" name="lado1" required><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    } elseif ($figura === "Circulo") {
    ?>
        <form action="calcular_circulo.php" method="post">
            Radio: <input type="number" name="radio" required><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    } else {
        echo "Tipo de figura no válido.";
    }
    ?>
</div>
</body>
</html>

<div id="result-container" class="result-container <?php echo strtolower($figura); ?>">

</div>


