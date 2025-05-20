<?php
    include_once 'conecta.php';

    $resultado = $conexao->prepare("UPDATE produtos SET nome = :n
                                    WHERE id = :id ");

    $nome = "Celular";
    $id = 1;

    $resultado->bindValue(":id", $id);
    $resultado->bindValue(":n", $nome);

    $resultado->execute();
?>