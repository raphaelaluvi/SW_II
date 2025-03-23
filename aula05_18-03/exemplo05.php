<?php
    //cria um array associativo
    $idades = array("Fani"=> 16, "Pri"=> 16, "Nathi"=> 16);

    //converte para uma string Json
    $json_str = json_encode($idades);

    //exibe a string json
    echo "$json_str";
?>