<?php
    include_once 'conecta.php';

    $resultado = $conexao->prepare("INSERT INTO produtos (nome, preco, estoque)
                                    VALUES (:n, :p, :e)");

    $resultado->bindValue(":n", "Celular");
    $resultado->bindValue(":p", 1000);
    $resultado->bindValue(":e", 5);

    $resultado->execute();
?>