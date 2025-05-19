<?php
    $cepRecebido = isset($_GET['cepRecebido']) ? $_GET['cepRecebido'] : '';
    $cep = []; // começa vazio

    // só chama se tiver valor
    if (!empty($cepRecebido)) {
        $url = "https://viacep.com.br/ws/{$cepRecebido}/json/";
        $response = @file_get_contents($url);
        if ($response !== false) {
            $cep = json_decode($response, true);

            // Verifica se a API respondeu com erro (CEP inválido)
            if (isset($cep['erro']) && $cep['erro'] === true) {
                $cep = []; // limpa para não tentar exibir dados inválidos
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de CEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Consulta de Endereço via CEP</h1>

    <form method="GET" class="form-cepRecebido">
        <input type="text" name="cepRecebido" placeholder="Digite o CEP (Ex: 09402060)" inputmode="numeric" pattern="\d{8}" value="<?php echo htmlspecialchars($cepRecebido);?>">
        <button type="submit">Consultar</button>
    </form>

    <div class="container">
        <?php if (empty($cep)): ?>
            <p>Nenhum CEP encontrado.</p>
        <?php else: ?>
                <div class="card">
                    <p><strong>CEP: </strong><?php echo $cep['cep']; ?></p>
                    <p><strong>Logradouro: </strong><?php echo $cep['logradouro']; ?></p>
                    <p><strong>Bairro: </strong><?php echo $cep['bairro']; ?></p>
                    <p><strong>Cidade: </strong><?php echo $cep['localidade']; ?></p>
                    <p><strong>Estado: </strong><?php echo $cep['uf']; ?></p>
                </div>
        <?php endif; ?>
        
    </div>

</body>
</html>