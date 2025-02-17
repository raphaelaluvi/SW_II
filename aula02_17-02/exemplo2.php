<?php
    $idade = 17;
    $falta = 18 - $idade;
    if ($idade >= 18) {
        echo "Você é maior de idade!";
    }
    else {
        echo "Você não é maior de idade, tem apenas " . $idade . " anos!";
        echo "<br>";
        echo "Falta apenas " . $falta . " ano(s)!";
    }
?>