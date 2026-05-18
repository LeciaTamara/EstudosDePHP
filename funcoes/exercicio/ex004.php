<?php 

    function verificaNumero($numero){
        if($numero %2 == 0){
            echo "O $numero é par <br>";
        }
        else if($numero %2 != 0){
            echo "O $numero é ímpar <br>";
        }
    }

    verificaNumero(15);
    verificaNumero(4);
    verificaNumero(25);
    verificaNumero(30);

?>