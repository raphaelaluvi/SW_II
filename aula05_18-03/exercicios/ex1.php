<!-- 1 - Criar um JSON a partir de um array e salvar em um arquivo
Crie um array com informações de 3 produtos (nome, preço e quantidade). Converta o array para
JSON e salve no arquivo produtos.json.
Passos:
a) Criar um array associativo com os produtos.
b) Converter para JSON com json_encode().
c) Salvar o JSON em um arquivo com file_put_contents(). -->
<?php
    $produtos = array('produtos' => array(
        array(
            'nome' => 'Caderno',
            'preco' => 10.5,
            'quant' => 2
        ),
        array(
            'nome' => 'Lápis',
            'preco' => 1.5,
            'quant' => 10
        ),
        array(
            'nome' => 'Borracha',
            'preco' => 2,
            'quant' => 6
        )));

    //converte para uma string Json
    $json_str = json_encode($produtos);

    //vai salvar em um arquivo
    file_put_contents('estoque.json', $json_str);

    //msg q deu certo
    echo "Estoque.json criado!!";
?>