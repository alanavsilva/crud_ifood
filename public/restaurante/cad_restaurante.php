<?php

include('../../infra/conexao.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
}

$sql = "INSERT INTO restaurante (nome, categoria, telefone, endereco) VALUES ('$nome', '$categoria', '$telefone', '$endereco')";
if($conn->query($sql) === true) {
    echo "Restaurante cadastrado com sucesso!";
}else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Restaurantes</title>
</head>
<body>
     
<form method="POST">

<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" required>
<br></br>
<label for="categoria">Categoria:</label>
<input type="text" name="categoria" id="categoria" required>
<br></br>
<label for="telefone">Telefone:</label>
<input type="text" name="telefone" id="telefone" required>
<br></br>
<label for="endereco">Endereço:</label>
<input type="text" name="endereco" id="endereco" required>
<br></br>
<button type="submit">Cadastrar</button>
</form>
<button type="button" onclick="window.location.href='index.php'">Voltar</button>

</body>
</html>