<?php 

    $a = 18;
    $b = "Olá";
    $c = 24.5;
    $d = false;
    $e = [6,7,8,9,10,11,12,13,14,15,16,17,"dia"];

    if(is_int($a)){
        echo "$a é um inteiro <br>";
    }
    else{
        echo "$a não é um inteiro <br>";
    }

    if(is_float($b)){
        echo "$b é um decimal <br>";
    }
    else{
        echo "$b não é um decimal <br>";
    }

    if(is_string($c)){
        echo "$c é uma string <br>";
    }
    else{
        echo "$c não é uma string <br>";
    }

    if(is_double($d)){
        echo "$d é um double <br>";
    }
    else{
        echo "$d não é um double <br>";
    }

    if(is_array($e)){
        print_r($e);
        echo "é um array <br>";
    }
    else{
        print_r($e);
        echo "não é um array <br>";
    }


?>