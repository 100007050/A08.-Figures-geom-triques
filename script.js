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

// <!-- ---------------------------------------------- IntroducirLados ------------------------------------------------------ -->
function validarYEnviar(event) {
  event.preventDefault();

  var lado1 = document.getElementById('lado1');
  var lado2 = document.getElementById('lado2');

  // Limpiar mensajes de error y estilos
  document.getElementById('error-lado1').textContent = "";
  document.getElementById('error-lado2').textContent = "";
  lado1.classList.remove('error-border');
  lado2.classList.remove('error-border');

  // Verificar si los campos están vacíos
  if (lado1.value.trim() === "") {
      document.getElementById('error-lado1').textContent = "Por favor, completa este campo.";
      lado1.classList.add('error-border');
      return false;
  }

  if (lado2.value.trim() === "") {
      document.getElementById('error-lado2').textContent = "Por favor, completa este campo.";
      lado2.classList.add('error-border');
      return false;
  }

  // Verificar si solo se ingresaron números
  if (!esNumero(lado1.value)) {
      document.getElementById('error-lado1').textContent = "Solo es válido el ingreso de números.";
      lado1.classList.add('error-border');
      return false;
  }

  // Verificar si solo se ingresaron números
  if (!esNumero(lado2.value)) {
      document.getElementById('error-lado2').textContent = "Solo es válido el ingreso de números.";
      lado2.classList.add('error-border');
      return false;
  }

  // Si las validaciones son exitosas, enviar el formulario manualmente
  $(this).submit(); // Utiliza la función submit de jQuery
  return true;
}

function esNumero(valor) {
  return !isNaN(parseFloat(valor)) && isFinite(valor);
}




function validarYEnviar2(event) {
  event.preventDefault();

  var lado1 = document.getElementById('lado1');

  // Limpiar mensajes de error y estilos
  document.getElementById('error-lado1').textContent = "";
  lado1.classList.remove('error-border');

  // Verificar si los campos están vacíos
  if (lado1.value.trim() === "") {
      document.getElementById('error-lado1').textContent = "Por favor, completa este campo.";
      lado1.classList.add('error-border');
      return false;
  }

  // Verificar si solo se ingresaron números
  if (!esNumero(lado1.value)) {
      document.getElementById('error-lado1').textContent = "Solo es válido el ingreso de números.";
      lado1.classList.add('error-border');
      return false;
  }

  // Si las validaciones son exitosas, enviar el formulario manualmente
  $(this).submit(); // Utiliza la función submit de jQuery
  return true;
}

function esNumero(valor) {
  return !isNaN(parseFloat(valor)) && isFinite(valor);
}
