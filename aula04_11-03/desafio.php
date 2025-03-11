<!-- Desafio Extra
Modifique o Exercício 5 para exibir o nome do aluno com a maior nota. Use um laço
de repetição para encontrar essa informação -->

<?php
    $boletim = array("Rapha" => "8", "Vitoria" => "10", "Ana" => "9", "Matheus" => "7");

    foreach ($boletim as $key => $value) {
        sort($value);
        $maior = $value[count($boletim) - 1];
    }

    echo "O maior é " . $maior;
?>