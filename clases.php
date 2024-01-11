<?php
// Clase abstracta FiguraGeometrica
abstract class FiguraGeometrica {
    protected $tipoFigura;
    protected $lado1;

    public function __construct($tipoFigura, $lado1) {
        $this->tipoFigura = $tipoFigura;
        $this->lado1 = $lado1;
    }
    // Método abstracto para el cálculo del área
    abstract public function area();
    
    // Getters y setters
    public function getTipoFigura() {
        return $this->tipoFigura;
    }

    public function setTipoFigura($tipoFigura) {
        $this->tipoFigura = $tipoFigura;
    }

    public function getLado1() {
        return $this->lado1;
    }

    public function setLado1($lado1) {
        $this->lado1 = $lado1;
    }

    // Destructor
    public function __destruct() {
        // Código destructor si es necesario
    }
}

// Definición de la interfaz PerimetroM
interface PerimetroM {
    public function perimetro();
}


// ---------------------------------------------------------------------------------------------------------------------------------------
// Clase Triangulo
class Triangulo extends FiguraGeometrica implements PerimetroM {
    protected $lado2;

    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    // Getters y setters de lado2
    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    // Implementación del método abstracto de FiguraGeometrica para calcular el área
    public function area() {
        return ($this->lado1 * $this->lado2) / 2; // Fórmula del área para un triángulo
    }

    // Implementación del método de la interfaz PerimetroM para calcular el perímetro
    public function perimetro() {
        // Perímetro = suma de todos los lados en un triángulo
        return $this->lado1 + $this->lado2 + $this->getLado1();
    }
    public function toString() {
        return "Triángulo: Lado 1 = " . $this->getLado1() . ", Lado 2 = " . $this->lado2;
    }
}
// ---------------------------------------------------------------------------------------------------------------------------------------
// Clase Cuadrado
class Cuadrado extends FiguraGeometrica implements PerimetroM {
    protected $lado1;

    public function __construct($lado1, $tipoFigura) {
        parent::__construct($tipoFigura, $lado1);
    }

    public function area() {
        $lado1 = $this->lado1; // Obtener el lado directamente

        // Verificar si $lado es numérico antes de realizar operaciones matemáticas
        if (is_numeric($lado1)) {
            return $lado1 * $lado1; // Calcular el área
        } else {
            return "El lado del cuadrado no es un número válido.";
        }
    }

    public function perimetro() {
        $lado1 = $this->lado1; // Obtener el lado directamente

        // Verificar si $lado es numérico antes de realizar operaciones matemáticas
        if (is_numeric($lado1)) {
            return 4 * $lado1; // Calcular el perímetro
        } else {
            return "El lado del cuadrado no es un número válido.";
        }
    }

    public function toString() {
        return "Cuadrado de lado " . $this->lado1;
    }
}
// ---------------------------------------------------------------------------------------------------------------------------------------
// Clase Circulo
class Circulo extends FiguraGeometrica implements PerimetroM {
    protected $radio;

    public function __construct($radio) {
        parent::__construct("Círculo", $radio); // Se asigna "Círculo" al tipo de figura y el radio como lado1
        $this->radio = $radio;
    }

    public function getRadio() {
        return $this->radio;
    }

    public function setRadio($radio) {
        $this->radio = $radio;
    }

    public function area() {
        return pi() * pow($this->radio, 2);
    }

    public function perimetro() {
        return 2 * pi() * $this->radio;
    }

    public function toString() {
        return "Círculo: Radio = " . $this->radio;
    }
}
//---------------------------------------------------------------------------------------------------------------------------------------
// Clase Rectangulo
class Rectangulo extends FiguraGeometrica implements PerimetroM {
    protected $lado2;

    public function __construct($tipoFigura, $lado1, $lado2) {
        parent::__construct($tipoFigura, $lado1);
        $this->lado2 = $lado2;
    }

    public function getLado2() {
        return $this->lado2;
    }

    public function setLado2($lado2) {
        $this->lado2 = $lado2;
    }

    public function area() {
        return $this->getLado1() * $this->lado2;
    }

    public function perimetro() {
        return 2 * ($this->getLado1() + $this->lado2);
    }

    public function toString() {
        return "Rectángulo: Lado 1 = " . $this->getLado1() . ", Lado 2 = " . $this->lado2;
    }
}
//---------------------------------------------------------------------------------------------------------------------------------------



