<?php 
    $fileName = 'tarefa.txt';
    
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if(isset($_POST['tarefa'])){
            $tarefa = strip_tags($_POST['tarefa']);
            file_put_contents($fileName, $tarefa . "\n", FILE_APPEND);

        }
    }

    $tarefas = file($fileName);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Todas as Tarefas</h1>

    <ol>
        <?php foreach($tarefas as $tarefa): ?>
            <li><?= $tarefa ?>
            <form action="deletar_tarefa.php" method="post">
                <button type="submit" name="deletar">Deletar</button>
            </form>

            <form action="editar_tarefa.php" method="post">
                <button type="submit" name="editar">Deletar</button>
            </form>

            
            </li>
        <?php endforeach; ?>
    </ol>

</body>

</html>