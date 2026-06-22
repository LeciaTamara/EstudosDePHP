<?php 

    $arr = "carro - navio - helicóptero - barco - jangada";

    $array = explode(" - ", $arr);

    for($i = 0; $i < count($array); $i++){
        echo "item: $array[$i] <br>";
    }


?>