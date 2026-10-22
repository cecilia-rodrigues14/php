<?php
$mensagem = ""

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if($usuario === "adimin" && $senha === "1234"){
        $mensagem = "Login efetuado com sucesso!";
    } else{
        $mensagem = "Usuário ou senha incorreta.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Entrar</h1>
    <?= ?>
    <form method="post">
        <p><input type="text" name="usuario" placeholder="Usuário"></p>
        <p><input type="password" name="senha" placeholder="Senha"></p>
        <button>Entrar</button>
    </form>
</body>
</html>