<?php
require_once 'FiguraGeometrica.php';
require_once 'Punto.php';

 class Cuadrado extends FiguraGeometrica {
    private $lado;
    private $esquina;


    public  function __construct(Punto $esquina, $lado){
        parent::__construct("Cuadrado");
        $this->esquina = $esquina;
        $this->lado = $lado;
    }
    public function getLado() {
        return $this->lado;
    }

    public function area(): float {
        return pow($this->lado, 2);
    }

    public function perimetro(): float {
        return 4 * $this->lado;
    }

 }


?>