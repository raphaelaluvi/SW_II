<?php
    // funcao sem parametro e com retorno
    function msg(){
        $a = "Rapha";
        return $a;
    }

    $frase = "Oiie ";
    // .= concatena o valor
    $frase .= msg();
    $frase .= ", bem vinda!";
    echo $frase
?>