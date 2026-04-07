<?php

    function verificarCategoria($categoria){
        if($categoria == "eletrônicos" || $categoria == "eletronicos"){
            return "Categoria de eletrônicos";
        }
        else if($categoria == "vestuário" || $categoria == "vestuario"){
            return "Categoria de vestuário";
        }
        else if($categoria == "alimentos"){
            return "Categoria de alimentos";
        }
        else {
            return "Categoria não encontrada";
        }
    }

    echo verificarCategoria("vestuario");

?>