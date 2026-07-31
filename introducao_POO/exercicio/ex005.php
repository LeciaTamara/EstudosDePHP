<?php 

    class Humano{
        public $nome;
        private $cpf;
        public $idade;

        public function adicionarDados($nome1, $cpf1, $idade1) {
            $this->nome = $nome1;
            $this->cpf = $cpf1;
            $this->idade = $idade1;
        }

        private function mostrarDados() {
            echo "CPF: ". $this->cpf . "<br>";
        }

        public function mostrarDados1(){
            $this->mostrarDados();
        }

        public function falar(){
            echo "Meu nome é: ". $this->nome . " e tenho ". $this->idade . "<br>";
        }
    }

    class Professor extends Humano{
        public $matricula;
        public $salario;
        public $formacao;

        private function mostrarDadosProfessor(){

            echo "Matricúla: ". $this->matricula . "<br>";
            echo "Salário: ". $this->salario . "<br>";
            echo "formação: ". $this->formacao . "<br>";
        }

        public function mostrarDadosProfessor1(){
            $this->falar();
            $this->mostrarDados1();
            $this->mostrarDadosProfessor();
        }
    }

    $professor = new Professor;

    $professor->adicionarDados("Jessica","123.456.789-00",27);

    $professor->matricula = "123.467.589-11";
    $professor->salario = 4.500;
    $professor->formacao = "Pedagogia";

    $professor->mostrarDadosProfessor1();

?>