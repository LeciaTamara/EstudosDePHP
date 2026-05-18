<?php 

    function compraSupermercado($item){
        foreach($item as $items){
            $compra = implode(", ", $item);
        }
        return $compra;
    }

    echo compraSupermercado(["Arroz", "Feijão", "Macarrão", "Frango"]);

?>