<?php 

    function sumEvenNumbers($num){
        $numero = 0;
        for($i = 1; $i <= $num; $i++){
            if($i %2 === 0){
                $numero += $i;
            }
        }
        
        return $numero;
    }
        
    echo sumEvenNumbers(6);


?>