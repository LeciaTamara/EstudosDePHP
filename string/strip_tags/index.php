<?php

    $textoHTML = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";

    echo $textoHTML;

    $salvarTextoBanco = strip_tags($textoHTML);

    echo $salvarTextoBanco;