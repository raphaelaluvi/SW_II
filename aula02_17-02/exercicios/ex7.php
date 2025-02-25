<?php
    $nomes = ["Rapha", "Claudia", "Hoender", "Jack"];
    
    echo "Feito com foreach: <br>";

    foreach ($nomes as $nome) {
        echo $nome . "<br>";
    }

    $quant = count($nomes);
    echo $quant . "<br>";

    // echo "Feito com for: <br>";
    // for ($i = 0; $i < 3; $i++){
    //     echo $nomes[$i]. "<br";
    // }

?>