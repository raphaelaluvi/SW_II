<?php
    $cepRecebido = isset($_GET['busca']) ? $_GET['busca'] : '';

    $url = "https://viacep.com.br/ws/{$cepRecebido}/json/";
    $response = file_get_contents($url);
    $cep = json_decode($response, true);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de CEP</title>
</head>
<body>
    <h1>Consulta de Endereço via CEP</h1>

    <form method="GET" class="form-busca">
        <input type="text" name="busca" placeholer="Digite o CEP (Ex: 09402060)" value="<?php echo htmlspecialchars($busca);?>">
        <button type="submit">Consultar</button>
    </form>

    <div class="container">
        <?php if (empty($cep)): ?>
            <p>Nenhum CEP encontrado.</p>
        <?php else: ?>
            <?php foreach ($cep as $cepIndividual): ?>
                <div class="card">
                    <p><strong>CEP: <strong><?php echo $cepIndividual['cep']; ?></p>
                    <p><strong>Logradouro: <strong><?php echo $cepIndividual['logradouro']; ?></p>
                    <p><strong>Bairro: <strong><?php echo $cepIndividual['bairro']; ?></p>
                    <p><strong>Cidade: <strong><?php echo $cepIndividual['localidade']; ?></p>
                    <p><strong>Estado: <strong><?php echo $cepIndividual['estado'] . " - " .$cepIndividual['uf']; ?></p>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
        
    </div>

</body>
</html>