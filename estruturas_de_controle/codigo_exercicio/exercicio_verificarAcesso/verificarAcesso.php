<?php

    function verificarAcesso($idade, $verificacao){
        if($idade >= 18 && $verificacao == true){
            return "Acesso autorizado";
        }
        else if($idade < 18){
            return "Acesso negado. Idade mínima requerida: 18 anos";
        }
        else if($idade >= 18 && $verificacao == false){
            return "Acesso negado. Autorização necessária";
        }
    }
    
   echo verificarAcesso(15, true);
?>