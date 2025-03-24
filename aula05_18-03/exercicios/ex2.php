<!-- 2 - Ler um arquivo JSON e exibir os dados na tela
Crie um arquivo usuarios.json contendo uma lista de usuários com os atributos id, nome e email.
Depois, faça um script PHP que:
a) Leia o arquivo JSON usando file_get_contents().
b) Converta o JSON em um array PHP com json_decode().
c) Exiba os nomes e emails de todos os usuários. -->

<?php
    //armazena o conteudo do .json para a variavel
    $usuarios = file_get_contents("usuarios.json");
    //vai armazenar o .json em um array, por causa do true
    $dadosUsuarios = json_decode($usuarios, true);

    //mostra tudo do array
    print_r($dadosUsuarios);
?>