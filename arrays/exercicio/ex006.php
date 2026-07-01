<?php 

    $pessoas = [
        "Lécia" => 23,
        "Tamara" => 23,
        "Sueli" => 42,
        "Safira" => 6,
        "Kiara" => 5,
        "Rex" => 5,
    ];
?>

<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
        </tr>
        <?php foreach($pessoas as $nome => $idade) : ?>
            <tr>
                <td><?= $nome; ?></td>
                <td><?= $idade; ?></td>
            </tr>
        <?php endforeach; ?>
    </thead>
</table>
