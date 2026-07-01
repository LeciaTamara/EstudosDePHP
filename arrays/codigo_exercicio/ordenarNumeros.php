<?php 

    function ordenarNumeros($arr){
        sort($arr);
        
        return $arr;
    }
    
    $array = range(1, 30);

    shuffle($array);
    
    print_r(ordenarNumeros($array));


?>