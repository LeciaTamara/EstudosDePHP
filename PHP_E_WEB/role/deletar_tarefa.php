<?php 

    $tarefa = 'tarefa.txt';

    if(isset($_POST['deletar'])){
        $linhas = file($tarefa);

        for($i = 0; $i < count($linhas); $i++){
                unset($linhas[$i]);
        }

        file_put_contents($tarefa, $linhas);
    }
?>