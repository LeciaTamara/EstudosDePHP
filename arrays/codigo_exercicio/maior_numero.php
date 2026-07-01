<?php 

    function maiorElemento($arr1){
        $numeroMaior = 0;
        
        for($i = 0; $i < count($arr1); $i++){
            if($numeroMaior < $arr1[$i]){
                $numeroMaior = $arr1[$i];
            }
        }
        
        return $numeroMaior;
    }
    
    $array = range(0, 11);
    
    shuffle($array);
    
    echo maiorElemento($array);

?>