<?php 

    function encontrarPares($arr){
        $arr1 = [];
        
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] %2== 0){
                $numeroPar = $arr[$i];
                array_push($arr1,$numeroPar);
                
            }
        }
        
        return $arr1;
    }
    
    $array = range(5, 25);
    
    print_r(encontrarPares($array));

?>