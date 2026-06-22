<?php

    $str = "O rato roeu a roupa do rei de Roma";

    $cont = 0;

    for($i = 0; $i < strlen($str); $i++){
        if($str[$i] === "a"){
            $cont++;
        }
    }

    echo "O numero de a na frase é: $cont";

?>