<?php
    include_once 'conecta.php';

    $resultado = $conexao->prepare("SELECT * FROM produtos");

    $resultado->execute();
    $final = $resultado->fetchAll(PDO::FETCH_ASSOC);

    foreach ($final as $produto) {
        echo "ID: " . $produto['id'] . "<br>";
        echo "NOME: " . $produto['nome'] . "<br>";
        echo "PREÇO: " . $produto['preco'] . "<br>";
        echo "ESTOQUE: " . $produto['estoque'] . "<br><hr>";
    }
    
?>