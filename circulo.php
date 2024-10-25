<?php
    class Circulo extends FiguraGeometrica {
        private $radio;
        private $centro;
    
        public function __construct(Punto $centro, $radio) {
            parent::__construct("Círculo");
            $this->centro = $centro;
            $this->radio = $radio;
        }
    
        public function getRadio() {
            return $this->radio;
        }
    
        public function area() {
            return pi() * pow($this->radio, 2);
        }
    
        public function perimetro() {
            return 2 * pi() * $this->radio;
        }
    }
    
?>