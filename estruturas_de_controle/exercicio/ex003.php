<?php 

    $idade1 = 20;
    $idade2 = 30;
    $idade3 = 15;
    $idade4 = 10;

    $mensagem = "Você é menor de idade <br>";

    if($idade1 >= 18){
        echo "Você pode dirigir <br>";
    }
    else{
        echo $mensagem;
    }

    if($idade2 >= 18){
        echo "Você pode beber <br>";
    }
    else{
        echo $mensagem;
    }

    if($idade3 >= 18){
        echo "Você pode viajar sozinho <br>";
    }
    else{
        echo $mensagem;
    }

    if($idade4 >= 18){
        echo "Você já atingiu a maior idade <br>";
    }
    else{
        echo $mensagem;
    }


?>