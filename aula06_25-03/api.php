<?php
    //cabeçalho
    header("Content-Type: application/json"); //define o tipo da resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //conteudo
    $usuarios = [
        ["id" => 1, "nome" => "Maria Souza", "email" => "maria@email.com"],
        ["id" => 2, "nome" => "João Silva", "email" => "joao@email.com"]
    ];

    // echo "Método da requisição: " . $metodo;

    switch ($metodo) {
        case 'GET':
            // echo "Aqui são ações do método GET";
            //converte p/ json e retorna
            echo json_encode($usuarios);
            break;        
        case 'POST':
            //echo "Aqui são ações do método POST";
            $dados = json_decode(file_get_contents('php://input'), true);
            //print_r($dados);

            $novoUsuario = [
                "id" => $dados["id"],
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //adiciona o novo usuario ao arrya existente
            array_push($usuarios, $novoUsuario);
            echo json_encode('Usuário inserido com sucesso!!');
            print_r($usuarios);
            
            break;        
        default:
            echo "Método não encontrado";
            break;        
    }
?>