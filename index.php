<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Selección de Figuras Geométricas</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="titulo">
  <h1>Selección de Figuras Geométricas</h1>
  </div>
  <div class="container" name="tipo_figura">
    <div class="card" id="triangulo" value="Triangulo" onclick="seleccionarFigura('triangulo')">
      <img class="shape-img" src="./img/trian.png" alt="Triángulo">
      <span class="shape-text">Triángulo</span>
    </div>
    <div class="card" id="cuadrado" value="Rectangulo" onclick="seleccionarFigura('cuadrado')">
      <img class="shape-img" src="./img/cuadrado.png" alt="Cuadrado">
      <span class="shape-text">Cuadrado</span>
    </div>
    <div class="card" id="circulo" value="Cuadrado" onclick="seleccionarFigura('circulo')">
      <img class="shape-img" src="./img/circulo.png" alt="Círculo">
      <span class="shape-text">Círculo</span>
    </div>
    <div class="card" id="rectangulo" value="Circulo" onclick="seleccionarFigura('rectangulo')">
      <img class="shape-img" src="./img/rect.png" alt="Rectángulo">
      <span class="shape-text">Rectángulo</span>
    </div>
  </div>
  <script src="script.js"></script>
</body>
</html>


<style>
  h1{
    margin-bottom: 160px;
    margin-top: 60px;
    font-size: 50px;
    color: black;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Agrega sombra al texto para mejorar la legibilidad */
  }

  .card {
    position: relative;
    width: 200px; /* Ajusta el ancho según sea necesario */
    height: 200px; /* Ajusta la altura según sea necesario */
    border: 1px solid #ccc;
    margin: 10px;
    overflow: hidden;
  }

  .shape-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0.7; /* Puedes ajustar la opacidad si es necesario */
  }

  .shape-text {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    font-size: 1.5em;
    color: white;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Agrega sombra al texto para mejorar la legibilidad */
  }

  body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: #f5f5f5;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
  }

  .card {
    width: 150px;
    height: 100px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin: 10px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .card:hover {
    background-color: #f0f0f0;
  }
</style>
