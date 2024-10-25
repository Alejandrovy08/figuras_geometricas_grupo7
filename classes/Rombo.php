<?phpgit
require_once 'Figura.php';

class Rombo extends Figura {
    private $diagonalMayor;
    private $diagonalMenor;
    private $lado;

    public function __construct($diagonalMayor, $diagonalMenor, $lado) {
        parent::__construct("Rombo");
        $this->diagonalMayor = $diagonalMayor;
        $this->diagonalMenor = $diagonalMenor;
        $this->lado = $lado;
    }

    public function calcularArea() {
        return ($this->diagonalMayor * $this->diagonalMenor) / 2;
    }

    public function calcularPerimetro() {
        return 4 * $this->lado;
    }
    
    // Métodos getter para acceder a las propiedades si es necesario
    public function getDiagonalMayor() {
        return $this->diagonalMayor;
    }

    public function getDiagonalMenor() {
        return $this->diagonalMenor;
    }

    public function getLado() {
        return $this->lado;
    }
}
