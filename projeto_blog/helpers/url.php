<?php 

// Arquivos de urls para ajudar encontrar o caminho do css e de outros arquivos que estão nos arquivos
// Mostra onde é raiz do sistema para linkar imagens e estilos do css
$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';

?>