<?php
    //cabeçalho
    header("Content-Type: application/json"); //define o tipo da resposta

    $metodo = $_SERVER['REQUEST_METHOD'];

    //recupera o arquivo json na mesma pasta
    $arquivo = 'usuarios.json';

    // verifica se o arquivo existe, se nao cria um array vazio
    if(!file_exists($arquivo)){
        file_put_contents($arquivos, json_encode([], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    
    //LE O ARQUIVO JSON
    $usuarios = json_decode(file_get_contents($arquivo), true);

    switch ($metodo) {

        case 'GET':
            // verifica se tem um parametro id
            if(isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $usuario_encontrado = null;

                //procura pelo id
                foreach ($usuarios as $usuario) {
                    if($usuario['id'] == $id){
                        $usuario_encontrado = $usuario;
                        break;
                    }
                }

                if ($usuario_encontrado) {
                    echo json_encode($usuario_encontrado, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
                }
                else {
                    http_response_code(404);
                    echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
                }
            }
            else{
                //retorna todos os usuarios
                echo json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
            }
            break;        

        case 'POST':
            $dados = json_decode(file_get_contents('php://input'), true);
            
            if (!isset($dados["nome"]) || !isset($dados["email"])) {
                http_response_code(400);
                echo json_encode(["erro" => "Nome e email são obrigatórios"], JSON_UNESCAPED_UNICODE);
                exit;
            }

            //gera um id unico
            $novo_id = 1;

            if (!empty($usuarios)) {
                $ids = array_column($usuarios, 'id');
                $novo_id = max($ids) + 1;
            }

            $novoUsuario = [
                "id" => $novo_id,
                "nome" => $dados["nome"],
                "email" => $dados["email"]
            ];

            //adiciona o novo usuario ao arrya existente
            $usuarios[] = $novoUsuario;

            //salva o arquivo
            file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

            //retorna a confirmação
            echo json_encode([
                "mensagem" => "Usuário inserido com sucesso",
                "usuario" => $novoUsuario
            ], JSON_UNESCAPED_UNICODE);            

            break;   
        
        // Método PUT
        case 'PUT':
            // Recupera os dados enviados no corpo da requisição
            $dados = json_decode(file_get_contents('php://input'), true);
            
            if (!isset($_GET['id'])) { // Verifica se o ID foi passado via URL
                http_response_code(400); // Se não, retorna erro 400
                echo json_encode(["erro" => "ID é obrigatório"], JSON_UNESCAPED_UNICODE);
                exit;
            }

            $id = intval($_GET['id']); // Obtém o ID da URL
            $usuario_encontrado = null;

            // Encontra o usuário a ser atualizado
            foreach ($usuarios as &$usuario) {
                if ($usuario['id'] == $id) {
                    $usuario_encontrado = &$usuario; // Referência para o usuário encontrado
                    break;
                }
            }

            if ($usuario_encontrado) {
                // Se o usuário foi encontrado, atualiza seus dados
                if (isset($dados["nome"])) {
                    $usuario_encontrado["nome"] = $dados["nome"];
                }
                if (isset($dados["email"])) {
                    $usuario_encontrado["email"] = $dados["email"];
                }

                // Salva os dados atualizados no arquivo
                file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

                // Retorna a confirmação com os dados atualizados
                echo json_encode([
                    "mensagem" => "Usuário atualizado com sucesso",
                    "usuario" => $usuario_encontrado
                ], JSON_UNESCAPED_UNICODE);
            } else {
                // Se o usuário não for encontrado, retorna erro 404
                http_response_code(404);
                echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
            }
            break;

        // Método DELETE
        case 'DELETE':
            if (!isset($_GET['id'])) { // Verifica se o ID foi passado via URL
                http_response_code(400); // Se não, retorna erro 400
                echo json_encode(["erro" => "ID é obrigatório"], JSON_UNESCAPED_UNICODE);
                exit;
            }

            $id = intval($_GET['id']); // Obtém o ID da URL
            $usuario_encontrado = false;

            // Remove o usuário com o ID especificado
            foreach ($usuarios as $key => $usuario) {
                if ($usuario['id'] == $id) {
                    unset($usuarios[$key]); // Remove o usuário do array
                    $usuario_encontrado = true;
                    break;
                }
            }

            if ($usuario_encontrado) {
                // Reindexa o array após a remoção
                $usuarios = array_values($usuarios);

                // Salva os dados atualizados no arquivo
                file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

                // Retorna a confirmação de exclusão
                echo json_encode([
                    "mensagem" => "Usuário excluído com sucesso"
                ], JSON_UNESCAPED_UNICODE);
            } else {
                // Se o usuário não for encontrado, retorna erro 404
                http_response_code(404);
                echo json_encode(["erro" => "Usuário não encontrado"], JSON_UNESCAPED_UNICODE);
            }
            break;

        default:
            http_response_code(405); //metodo n permitido
            echo json_encode(["erro" => "Método não permitido"], JSON_UNESCAPED_UNICODE);
            break;        
    }
?>