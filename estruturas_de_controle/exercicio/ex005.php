<?php 

    $a = "Oi";
    $b = 55;
    
    if(is_numeric($a)){
        $a = $a * 2;

        if($a > 100){
            echo "O número $a é maior que cem";
        }
    }

    if(is_numeric($b)){
        $b = $b * 2;

        if($b > 100){
            echo "O número $b é maior que cem";
        }
    }

?>