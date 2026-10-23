<?php
$mensagem = "";
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $usuario = trim($_POST["usuario"]);
    $senha = $_POST["senha"];

    if(file_exists("usuario.json")){
        $usuario = json_decode(file_get_contents("ususrios.json"), tru);
    } else{
        $usuarios = [];
    }

    if($usuario === ""){
        $mensagem = "Digite um nome de usuário";
    } elseif (strlen($senha) <4){
        $mensagem = "A senha precisa pelo menos 4 caracteres";
    } elseif (isset($usuarios[$usuario])){
        $mensagem = "Esse usuário já existe. Escolha outro.";
    } else{
        $ususarios[$ususario] = password_hash($senha, PASSWORD_DEFAULT);
        file_put_contents("ususario.json", json_encode($usuarios));
        $mensagem = "Conta criada com sucesso";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Criar Conta</h1>
    <p><strong><?= htmlspecialchars(mensagem) ?></strong></p>
    <form method="post">
        <p><input type="text" name="ususario" placeholder="Escolha um usuário"></p>
        <p><input type="text" name="senha" placeholder="Escolha uma senha"></p>
        <button>Cadastrar</button>
    </form>
    <p><a href="login.php">Já tenho conta</a></p>
</body>
</html>