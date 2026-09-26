<?php 
    
    $tarefa = 'tarefa.txt';

    if(isset($_POST['editar'])){
        $linhas = file($tarefa);

        for($i = 0; $i < count($linhas); $i++){
            
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="tarefa" value="<?=$tarefa?>">
    </form>
</body>
</html>