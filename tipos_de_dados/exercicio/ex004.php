<?php

    $carro = [
        'marca' => 'BMW',
        'rodas' => 4,
        'teto_solar' => true,
        'velocidade_max' => 300,
        'blindado' => false
    ];

    print_r($carro);

    $marca = $carro['marca'];
    $velocidade_max = $carro['velocidade_max'];

    echo "<br>";

    echo "O carro é da marca $marca e tem velocidade máxima de $velocidade_max Km/h";
?>