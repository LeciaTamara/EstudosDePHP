<?php
    $pessoa = [
        'nome' => 'Danilo',
        'idade' => 18,
        'endereco' => 'São cristrovão',
        'profissao' => 'motorista particular'
    ];
    
    $idade = $pessoa['idade'];

    if($pessoa['idade'] >= 18){
        echo "Você está apto para dirigir";
    }
    else{
        echo "Você não possui idade suficiente para dirigir";
    }
?>