<?php
    //cria uma string no formato json
    $json_str = '{"Fani": 16, "Pri": 16, "Nathi": 16}';

    //transforma ela e, um array associativo
    $json_arr = json_decode($json_str, true);

    //exibe o array
    var_dump($json_arr);
?>