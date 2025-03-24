<!-- 4 - Buscar um item dentro do JSON
Usando usuarios.json, crie um script que:
a) Pergunte ao usuário um email (via $_GET ou variável fixa).
b) Busque no array de usuários um que tenha esse email.
c) Exiba os dados do usuário encontrado ou uma mensagem de erro. -->

<?php
    //professor o meu deu erro na linha 22, fala q n esta achando, porem n consegui achar
    //o senhor poderia me ajudar?

    //pega o email da url (iremos colocar apos ex4.php?email=fani@email)
    $buscaEmail = $_GET["email"];

    // vai ler o usuarios.json e colocar em um array
    $jsonUsuarios = file_get_contents("usuarios.json");
    $usuarios = json_decode($jsonUsuarios, true);
    
    // variavel vazia
    $usuarioEncontrado = null;
    //para dps percorrer pelo array para buscar o email
    foreach ($usuarios as $usuario) {
      if ($usuario["email"] == $buscaEmail) {
        $usuarioEncontrado = $usuario;
      }
    }
    
    // vai exibir o email do usuario ou uma msg q n foi encontrado
    if ($usuarioEncontrado) {
      echo "Usuário encontrado:<br>";
      echo "Nome: " . $usuarioEncontrado["nome"] . "<br>";
      echo "Email: " . $usuarioEncontrado["email"] . "<br>";
    } else {
      echo "Usuário não encontrado.";
    }
?>