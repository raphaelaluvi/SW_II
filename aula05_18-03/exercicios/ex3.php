<!-- 3 -Adicionar um novo item a um arquivo JSON existente
Usando o arquivo produtos.json do exercício 1, faça um script que:
a) Leia o JSON do arquivo e o converta para um array.
b) Adicione um novo produto ao array.
c) Converta o array atualizado para JSON e salve de volta no arquivo. -->

<?php
    //armazena o conteudo do .json para a variavel
    $estoque = file_get_contents("estoque.json");
    //vai armazenar o .json em um array, por causa do true
    $produtosEst = json_decode($estoque, true);

    //criar um novo obj no array
    $novoProd = array("nome" => "Caneta", "preco" => 3.5, "quantidade" => 20);
    //adiciona
    $produtosEst[] = $novoProd;

    //transforma o array em json de nv
    $jsonNovo = json_encode($produtosEst, JSON_PRETTY_PRINT);
    file_put_contents("estoque.json", $jsonNovo);

    //msg q deu bom
    echo "Produto adicionado em estoque.json";
?>