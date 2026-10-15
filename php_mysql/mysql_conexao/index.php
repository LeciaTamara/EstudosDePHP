<?php
    // Primeira forma de connectar ao banco
    // $conn = new mysqli("localhost", "root", "", "cursophp");

    // Segunda forma de connectar ao banco
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);


?>