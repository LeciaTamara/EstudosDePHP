<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    //ASSUNTO DA AULA 
    $q = "SELECT * FROM items";

    $result = $conn->query($q);

    $conn->close();

    //UM RESULTADO
    $item = $result->fetch_assoc();

    //TODOS OS RESULTADOS
    $items = $result->fetch_all();
    
    print_r($items)
?>