<!DOCTYPE html>
<html lang="es">
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <title>Introducir Lados</title>
    <?php $figura = $_GET["figura"]; ?>
</head>
<body class="<?php echo strtolower($figura); ?>">

<!-- ---------------------------------------------- AJAX ------------------------------------------------------ -->
    <script>
        $(document).ready(function(){
            $('.form-container form').submit(function(e){
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: $(this).attr('action'),
                    data: formData,
                    success: function(response){
                        $('#result-container').html(response);
                    }
                });
            });
        });
    </script>
<!-- ---------------------------------------------- AJAX ------------------------------------------------------ -->

<div class="form-container <?php echo strtolower($figura); ?>">
    <h1>Introduce los lados de la figura <?php echo $figura; ?>:</h1>
    <?php
    if ($figura === "Triangulo") {
    ?>
        <form action="calcular_triangulo.php" method="post" onsubmit="return validarYEnviar(event)">
            Lado 1: <input type="number" name="lado1" id="lado1"><br>
            Lado 2: <input type="number" name="lado2" id="lado2"><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    } elseif ($figura === "Rectangulo") {
    ?>
        <form action="calcular_rectangulo.php" method="post" onsubmit="return validarYEnviar(event)">
            Lado 1: <input type="number" name="lado1" id="lado1"><br>
            Lado 2: <input type="number" name="lado2" id="lado2"><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    } elseif ($figura === "Cuadrado") {
    ?>
        <form action="calcular_cuadrado.php" method="post" onsubmit="return validarYEnviar(event)">
            Lado: <input type="number" name="lado1" id="ladoc"><br>
            <input type="submit" value="Calcular">
        </form>
    <?php
    } elseif ($figura === "Circulo") {
    ?>
        <form action="calcular_circulo.php" method="post" onsubmit="return validarYEnviar(event)">
            Radio: <input type="number" name="radio" id="ladoc"><br>
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

<style>
    body {
    font-family: Arial, sans-serif;
    padding: 20px; /* Espacio alrededor del contenido */
    }
    /* Estilos específicos para cada tipo de figura */
    body.triangulo {
        background-image: url('./img/triangulos.jpg'); /* Color para Triángulo */
        background-repeat: repeat; /* Hace que la imagen se repita */
        background-image: rgba(0, 0, 0, 0.1);
    }
    body.rectangulo {
        background-image: url('./img/rectangulos.jpg'); /* Color para Triángulo */
        background-repeat: repeat; /* Hace que la imagen se repita */
        background-image: rgba(0, 0, 0, 0.1);
    }
    body.cuadrado {
        background-image: url('./img/cuadrados.png'); /* Color para Triángulo */
        background-repeat: repeat; /* Hace que la imagen se repita */
        background-image: rgba(0, 0, 0, 0.1);
    }
    body.circulo {
        background-image: url('./img/ciculos.png'); /* Color para Triángulo */
        background-size: cover; /* Hace que la imagen se repita */
        background-image: rgba(0, 0, 0, 0.1);
    }
    h1 {
        text-align: center;
        margin-bottom: 20px; /* Espacio debajo del título */
    }
    .form-container {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px; /* Espacio entre el título y el formulario */
    }
    input[type="number"],
    input[type="submit"] {
        width: calc(100% - 22px);
        padding: 10px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #383838;
        color: white;
        border: none;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Estilos para diferentes tipos de figura */
    .form-container.triangulo {
        background-color: #F9FF8E; /* Color para Triángulo */
    }
    .form-container.rectangulo {
        background-color: #75FE83; /* Color para Rectángulo */
    }
    .form-container.cuadrado {
        background-color: #FFA07A; /* Color para Cuadrado */
    }
    .form-container.circulo {
        background-color: #77FCF6; /* Color para Círculo */
    }

    .result-container.triangulo {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px; /* Espacio entre el título y el formulario */
        background-color: #F9FF8E; /* Color para Triángulo */
    }
    .result-container.rectangulo {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px; /* Espacio entre el título y el formulario */
        background-color: #75FE83; /* Color para Rectángulo */
    }
    .result-container.cuadrado {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px; /* Espacio entre el título y el formulario */
        background-color: #FFA07A; /* Color para Cuadrado */
    }
    .result-container.circulo {
        border: 1px solid #ccc;
        padding: 20px;
        border-radius: 5px;
        margin-top: 20px; /* Espacio entre el título y el formulario */
        background-color: #77FCF6; /* Color para Círculo */
    }
</style>
