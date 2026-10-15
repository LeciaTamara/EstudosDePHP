<?php

 $host = "localhost";
 $user = "root";
 $pass = "as";
 $db = "cursophp";

 $conn = new mysqli($host, $user, $pass, $db);

// if ($conn->connect_errno) {
//     echo "Erro na conexão! <br>";
//     echo "Erro:" . mysqli_connect_error
// }

//Erro utilizando objetos
if ($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro:" . $conn->connect_error
}

?>
