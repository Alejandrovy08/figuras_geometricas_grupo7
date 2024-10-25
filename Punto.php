<?php
    class Punto{
        private $x;
        private $y;

        public function __construct($x,$y){
            $this->x = $x;
            $this->y = $y; 
        }

        public function getX(){
            return $this->x;
        }

        public function getY(){
            return $this->y;
        }

        //Funcion para sacar en string la x y la y
        public function __toString(){
            return "(" . $this->x . ", " . $this->y . ")";
        }

        public function distancia($punto): float {
            // raíz cuadrada con sqrt y potencia con pow
            return sqrt(pow($punto->getX() - $this->x, 2) + pow($punto->getY() - $this->y, 2));
        }

    }
?>