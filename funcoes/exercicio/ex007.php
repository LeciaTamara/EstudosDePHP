<?php 

    function defineCorCarro($cor = "Vermelha"){
        $corInformada = $cor;

        return $corInformada;
    }

    echo defineCorCarro() . "<br>";
    echo defineCorCarro("Preto") . "<br>";

?>