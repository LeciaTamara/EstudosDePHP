<?php 

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //ASSUNTO DA AULA
    $id = 5;

    $stmt = $conn->prepare("SELECT * FROM items WHERE id > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    //Pega apenas a primeira linha do array
    // $data = $stmt->fetch(PDO::FETCH_ASSOC);

    // print_r($data);

    //Pega todas as linhas do array
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($items);
?>