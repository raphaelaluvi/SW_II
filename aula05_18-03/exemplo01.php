<?php
    //string json contendo os dados de um funcionario
    $json_str = '{"nome": "Rapha", "idade": 17, "genero": "F"}';

    //gera um objeto php
    $obj = json_decode($json_str);

    //imprime o conteudo
    //procura dentro da variavel obj o indice nome para mostrar o conteudo dele na tela
    echo "nome: $obj->nome <br>";
    echo "idade: $obj->idade <br>";
    echo "genero: $obj->genero <br>";
?>