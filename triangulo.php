<?php

class Triangulo extends FiguraGeometrica {
    private $base;
    private $altura;
    private $lado1;
    private $lado2;
    private $lado3;
    private $vertice;

    public function __construct(Punto $vertice, $base, $altura, $lado1, $lado2, $lado3) {
        parent::__construct("Triángulo");
        $this->vertice = $vertice;
        $this->base = $base;
        $this->altura = $altura;
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    public function getBase() {
        return $this->base;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function area() {
        return ($this->base * $this->altura) / 2;
    }

    public function perimetro() {
        return $this->lado1 + $this->lado2 + $this->lado3;
    }
}



?>