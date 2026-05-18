<?php 

    function sumDigits($numero){

        $soma = 0;

        while($numero > 0){
            $resto = $numero % 10;

            $soma += $resto;

            $numero = (int)($numero / 10);
        }

        return $soma;
    }

    echo sumDigits(186);

?>