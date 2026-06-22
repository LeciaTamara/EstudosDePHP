<?php 

    $frase = "testando o case de uma palavra <br>";
    $frase2 = "Testando o case de uma palavra <br>";
    $frase3 = "testando o case de uma palavras <br>";

    // Primeira letra em maiúsculo
    echo ucfirst($frase);
    echo ucfirst($frase);

    // Todas as palavras com as inicias maiúsculas
    echo ucwords($frase3);
    echo ucwords($frase2);

?>