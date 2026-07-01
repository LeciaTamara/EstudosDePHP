<?php 

    $arr = [
        'Pedro' => 9.9,
        'Adriana' => 10,
        'Dora' => 8.9,
        'Cléber' => 9.5
    ];

    arsort($arr);

    print_r($arr);
?>

<ol>
    <?php foreach($arr as $nome => $ponto) : ?>
        <li><?= $nome?> -> <?= $ponto ?> ponto</li>
    
    <?php endforeach; ?>
</ol>