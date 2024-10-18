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
    }
?>