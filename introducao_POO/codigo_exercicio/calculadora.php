<?php 

    class Calculadora {
    
    public function somar($a, $b){
        
        $soma = $a + $b;
        
        return $soma;
    }
    
    public function subtrair($a, $b){
        
        $subtrai = $a - $b;
        
        return $subtrai;
    }
    
    public function multiplicar($a, $b){
        
        $multiplica = $a * $b;
        
        return $multiplica;
    }
    
    public function dividir($a, $b){
        
        $dividi = $a / $b;
        
        return $dividi;
    }
    
}

$calculo = new Calculadora();

echo $calculo->somar(4,5);
echo "<br>";
echo $calculo->subtrair(9,8);
echo "<br>";
echo $calculo->multiplicar(3,7);
echo "<br>";
echo $calculo->dividir(6,2);

?>