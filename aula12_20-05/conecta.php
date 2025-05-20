<?php
    $host = 'localhost';
    $banco = 'loja';
    $usuario = 'root';
    $senha = '';

    try {
        $conexao = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    } catch (PDOExcetion $e) {
        echo "Erro do bano de dados: " . $e->getMessage();
    } catch (Excetion $e) {
        echo "Erro genérico: " . $e->getMessage();
    }
?>