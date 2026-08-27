<?php

include('../../infra/conexao.php');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    
    $sql = "INSERT INTO cliente (nome, email, telefone, endereco) VALUES ('$nome', '$email', '$telefone', '$endereco')";
    if($conn->query($sql) === true) {
        echo "Cliente cadastrado com sucesso!";
        }else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
            }
            
            }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro clientes</title>
</head>
<body>
     
<h1>Cadastrar Cliente</h1>

<form method="POST">

<label for="nome">Nome:</label>
<input type="text" name="nome" id="nome" required>
<br></br>
<label for="email">Email:</label>
<input type="email" name="email" id="email" required>
<br></br>
<label for="telefone">Telefone:</label>
<input type="text" name="telefone" id="telefone" required>
<br></br>
<label for="endereco">Endereço:</label>
<input type="text" name="endereco" id="endereco" required>
<br></br>
<button type="submit">Cadastrar</button>
</form>
<button type="button" onclick="window.location.href='../../index.php'">Voltar</button>

</body>
</html>