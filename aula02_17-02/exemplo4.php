<?php
    $nomes = ['Rapha', 'Ana', 'Ceci'];

    echo $nomes[0];

    $quantidade = count($nomes);

    echo "<br>";
    echo "Esse array tem " . $quantidade . " elementos.";
    echo "<br>";
    echo "<br>";
    
    for ($i = 0; $i < $quantidade; $i++){
        echo $nomes[$i];
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    $n = 0;
    while ($n < $quantidade) {
        echo $nomes[$n];
        echo "<br>";
        $n++;
    }

    echo "<br>";
    echo "<br>";

    foreach ($nomes as $nome){
        echo $nome;
        echo "<br>";
    }

?>