<?php 

    function somaElementos($arr1){
        $arr = array_sum($arr1);
        
        return $arr;
    }

    $array = range(2, 8);
    
   echo somaElementos($array);

?>