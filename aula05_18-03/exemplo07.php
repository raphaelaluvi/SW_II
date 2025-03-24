<?php
    //cria um array com 3 empregados, um array recebe outro array, q recebe outro
    $empregados = array('empregados' => array(
        array(
            'nome' => 'Fani',
            'idade' => 16,
            'genero' => 'F'
        ),
        array(
            'nome' => 'Pri',
            'idade' => 16,
            'genero' => 'F'
        ),
        array(
            'nome' => 'Nthi',
            'idade' => 16,
            'genero' => 'F'
        )));

    //converte para uma string Json
    $json_str = json_encode($empregados);

    //exibe a string json
    echo "$json_str";
?>