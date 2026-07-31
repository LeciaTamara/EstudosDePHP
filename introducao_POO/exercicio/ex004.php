<?php 

    class Carro{
        public $velocidadeMaxima;
        public $modelo;

        function setVelocidadeMaxima($velocidade){
            $this->velocidadeMaxima = $velocidade;
        }

        function getVelocidadeMaxima(){
            echo "A velocidade máxima do " . $this->modelo . " é de " . $this->velocidadeMaxima . " KM/h";
        }
    }

    $carro = new Carro;

    $carro->modelo = "BYD";

    $carro->setVelocidadeMaxima(60);

    $carro->getVelocidadeMaxima();


?>