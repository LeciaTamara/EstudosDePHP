<?php 

    $array = range(10,45);

    foreach($array as $arr){
        $arr += 6;

        if($arr > 30){
            echo "O número $arr é o número muito alto <br>";
        }
        else{
            echo $arr ."<br>";
        }
    }


?>