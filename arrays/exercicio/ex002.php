<?php 

    $array = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12]
    ];

    // loop no array externo
    for($i = 0; $i < count($array); $i++){
        // Imprimindo array
        echo "Imprimindo array externo:" . ($i + 1) . "<br>";

        for($j = 0; $j < count($array[$i]); $j++){
            echo $array[$i][$j] . "<br>";
        }
        
    }




?>