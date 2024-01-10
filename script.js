function seleccionarFigura(figura) {
  switch (figura) {
    case 'triangulo':
      window.location.href = 'introducir_lados.php?figura=Triangulo';
      break;
    case 'cuadrado':
      window.location.href = 'introducir_lados.php?figura=Cuadrado';
      break;
    case 'circulo':
      window.location.href = 'introducir_lados.php?figura=Circulo';
      break;
    case 'rectangulo':
      window.location.href = 'introducir_lados.php?figura=Rectangulo';
      break;
    default:
      break;
  }
}

