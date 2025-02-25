<?php
    // funcao com parametro e com retorno
    function msg($x){
        $a = "Rapha " . $x;
        return $a;
    }

    $sobrenome = "Luvi";

    $frase = "Oiie ";
    // .= concatena o valor
    $frase .= msg($sobrenome);
    $frase .= ", bem vinda!";
    echo $frase    
?>