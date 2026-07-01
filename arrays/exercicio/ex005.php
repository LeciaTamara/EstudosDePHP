<?php 

    $nome = "Duque";
    $idade = 8;
    $patas = 4;
    $tipoDeAnimal = "Cachorro";
    $cor = "Dourado";
    $genero = "Macho";

    $cachorro = compact("nome", "idade", "patas", "tipoDeAnimal", "cor", "genero");

    foreach($cachorro as $caracteristicas => $value){
        echo "$caracteristicas: $value <br>";
    }

?>