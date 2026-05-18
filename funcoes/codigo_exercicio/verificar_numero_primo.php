<?php 

    function isPrime($numero){
        if($numero < 2){
            echo "numero menor que dois";
            return false;
        }
        else{
            for ($i = 2; $i <= sqrt($numero); $i++){
                if($numero %$i == 0 ){
                    echo "Numero não é primo";

                    return false;
                }
            }

            return true;
        }
    }

   echo isPrime(7);

?>