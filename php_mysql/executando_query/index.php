<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    //assunto da aula
    $sql = "SELECT * FROM items";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();
?>