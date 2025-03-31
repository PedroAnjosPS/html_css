<?php 
    $nome = $_GET['nome'] ?? '';
    $sobrenome = $_GET['sobrenome'] ?? '';
    echo "<p>Os dados do formulário foram enviados com sucesso:<br>
    O usuário se chama $nome $sobrenome.";
?>