<?php 

class Car {

	public $rodas = 4;
	private $vidro = "Sem película";
	protected $portas = 4;

	public function getVidro() {
	    return $this->vidro;
    }

    public function getPortas(){
        return $this->portas;
    }
}

class Mecanico {

    public function alterarRodas($obj){
        $obj->rodas =  10;
    }

    public function colocarPelicula($carro, $pelicula){
	    $carro->vidro = $pelicula;
    }
 
}

   
$carro = new Car();

echo $carro ->rodas . "<br>";

$matheus = new Mecanico;

$matheus->alterarRodas($carro);

echo $carro->rodas . "<br>";
// Não pode alterar por que é privado
//$matheus->colocarPelicula($carro, "G20");

echo $carro->getVidro() . "<br>";

//$carro->vidro = "teste";

echo $carro->getPortas() . "<br>";


?>