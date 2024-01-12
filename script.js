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
        event.preventDefault(); // Evitar que el formulario se envíe automáticamente

        var lado1 = document.getElementById('lado1').value;
        var lado2 = document.getElementById('lado2').value;

        // Verificar si los campos están vacíos
        if (lado1 === "" || lado2 === "") {
            alert("Por favor, completa todos los campos.");
            return false;
        }

        // Verificar si solo se ingresaron números
        if (!esNumero(lado1) || !esNumero(lado2)) {
            alert("Por favor, ingresa solo números válidos.");
            return false;
        }

        // Si las validaciones son exitosas, enviar el formulario manualmente
        document.forms[0].submit(); // Puedes ajustar esto si tienes más formularios en la página
        return true;
    }

    function esNumero(valor) {
        return !isNaN(parseFloat(valor)) && isFinite(valor);
}

