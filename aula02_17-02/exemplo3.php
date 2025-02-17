<?php
    $opcao = 2;
    switch ($opcao) {
        case 1:
            echo "Opção 1 escolhida!";
            break;
        case 2: 
            echo "Opção 2 escolhida!";
            break;
        default:
            echo "Opção inválida!";
    }

    echo "<br>";

    $opcao = "b";
    switch ($opcao) {
        case "a":
            echo "Opção a escolhida!";
            break;
        case "b": 
            echo "Opção b escolhida!";
            break; //usa p break para na continuar no default
        default:
            echo "Opção inválida!";
    }
?>