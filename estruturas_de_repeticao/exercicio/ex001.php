<?php 

    $valores = [10, "Feliz", 12.6, "Alegre", -5, "Triste", 3, "Raiva", 6.9, -10];

    // O count é uma função que conta o tamanho do array
    $x = count($valores);
    $y = 0;

    while($y < $x){
        if(is_string($valores[$y])){
            echo "$valores[$y] . <br>";
        }

        $y++;
    }

?>