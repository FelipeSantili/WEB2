<?php




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário a validar</h1>

    <form method="post" onsubmit="return validar();">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome:"
            value="<?= $nome ?>">
        <br></br>

        <label for="idade">Idade</label>
        <input type="number" name="idade" id="idade" placeholder="Idade:">
        <br></br>

        <button type="submit">Enviar</button>
    </form>

    <div id="divMsg" style="color: red;"></div>
</body>

<script src="validacao.js"></script>    
</html>