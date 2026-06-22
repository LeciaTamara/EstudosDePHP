<?php 

    function objeto($caracteristicas){
        $caracteristicas1 = [];

        foreach($caracteristicas as $nome => $preco){
            if($preco > 10){
                //pega os objetos que tem os preços maiores que 10.
                array_push($caracteristicas1, $nome);
            }
        }

        return $caracteristicas1;
    }

    $novoArray = objeto(["carro" => 2500.00,"sofá" => 1500.00, "café" => 5 ]);

    print_r($novoArray);

?>