<?php 

    class Cachorro{
        public $nome;
        public $idade;
        public $raca;

        function __construct($nome, $idade, $raca){
            $this->nome=$nome;
            $this->idade=$idade;
            $this->raca=$raca;
        }

        public function mostrarNome(){
            echo "O nome do cachorro é ". $this->nome . "<br>";
        }

        public function mostrarIdade(){
            echo "A idade do cachorro é ". $this->idade . " anos <br>";
        }

        private function mostrarRaca(){
            echo "A raça do cachorro é ". $this->raca . "<br>";
        }

        public function raca(){
            $this->mostrarRaca();
        }
    }

    $cachorro1 = new Cachorro("Rex", 4, "Tricolor");

    $cachorro1->mostrarNome();
    $cachorro1->mostrarIdade();
    $cachorro1->raca();


?>