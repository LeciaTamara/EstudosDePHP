<?php

    function calcularDesconto($valorProduto, $categoria){
        if($categoria == "eletrônicos"){
            $valorfinal = $valorProduto - ($valorProduto * (10 / 100));
            $valorProduto = $valorfinal;
            
            return "valor do produto: $valorProduto.";
        }
        else if($categoria == "vestuário"){
            $valorfinal = $valorProduto - ($valorProduto * (20 / 100));
            $valorProduto = $valorfinal;
            
            return "valor do produto: $valorProduto.";
        }
        else if($categoria == "alimentos"){
            $valorfinal = $valorProduto - ($valorProduto * (5 / 100));
            $valorProduto = $valorfinal;
            
            return "valor do produto: $valorProduto.";
        }
        else{
            return "valor do produto: $valorProduto.";
        }
        
    }
    
    echo calcularDesconto(50, "eletrônicos");
?>