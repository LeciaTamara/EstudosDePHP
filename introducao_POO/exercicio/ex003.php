<?php 

    class Pessoa{
        public $nome;
        public $idade;

        function andar($metro){
            echo "Andou $metro metro";
        }
    }

    $pessoa1 = new Pessoa;

    $pessoa1->nome = "Adriana";
    $pessoa1->idade = 30;

    echo "$pessoa1->nome <br>";
    echo "$pessoa1->idade <br>";

    $pessoa1-> andar(10);

?>