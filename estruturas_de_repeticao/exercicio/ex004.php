<?php 

    $array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];

    for($i = 0; $i < 20; $i++){
        $verificarnum = $array[$i];
        if($verificarnum %2 == 0){
            echo "O número é $array[$i] <br>";
        }
    }

?>