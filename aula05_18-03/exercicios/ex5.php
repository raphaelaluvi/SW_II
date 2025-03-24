<!-- 5 - Remover um item de um arquivo JSON
Usando produtos.json, faça um script que:
a) Leia os produtos do JSON.
b) Remova um produto específico (exemplo: pelo nome).
c) Salve o novo JSON atualizado no arquivo. -->

<?php
    //Prof eu fiquei na duvida nesse, pesquisei para fazer, porem deu esses erros, n consegui arrumar 
    //Warning: Undefined variable $estoqueNovo in C:\xampp\htdocs\SW_II\aula05_18-03\exercicios\ex5.php on line 17

    // Fatal error: Uncaught TypeError: array_filter(): Argument #1 ($array) must be of type array, 
    //null given in C:\xampp\htdocs\SW_II\aula05_18-03\exercicios\ex5.php:17 
    //Stack trace: #0 C:\xampp\htdocs\SW_II\aula05_18-03\exercicios\ex5.php(17): array_filter(NULL, Object(Closure)) #1 {main} thrown in C:\xampp\htdocs\SW_II\aula05_18-03\exercicios\ex5.php on line 17
    
    //transforma json em array
    $estoque = json_decode(file_get_contents('estoque.json'), true);

    //vai receber oproduto na variavel
    $nomeProduto = "Caderno";

    //vai salvar o antigo para comparar dps
    $estoqueAntigo = $estoque;

    $estoqueNovo = array_filter($estoqueNovo, function($produto) use ($nomeProduto) {
        return $produto['nome'] != $nomeProduto;
    });

    //salva o json novo no arquivo
    file_put_contents('estoque.json', json_encode(array_values($estoqueNovo), JSON_PRETTY_PRINT));

    // Verifica se o produto foi removido
    if (count($estoqueNovo) < count($estoqueAntigo)) {
        echo "Produto removido com sucesso!";
    } else {
        echo "Produto não encontrado ou não removido.";
    }
?>