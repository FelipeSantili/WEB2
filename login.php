<?php

$login = "";
$senha = "";
if(isset($_POST['login'])){
    $login = $_POST['login'];
}
if(isset ($_POST['senha'])){
$senha = $_POST['senha'];
}

if ($login == "ifpr" && $senha == "tads") {
        echo "<h1>Bem vindo ao TADS!<h1>";
        exit;
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Login e senha</title>
</head>
<body>

    <div>
        <form action="login.php" method="post">
            <h3>Login e senha</h3>

            <label for="login">Login</label>
            <input type="text" name="login" id="login" placeholder="Digite seu login">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" placeholder="Digite sua senha">

            <input type="submit" value="Entrar">
        </form>
    </div>

</body>
</html>

