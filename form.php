<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário</title>
</head>
<body>
    <h3>Formulário Aula</h3>

    <form method="POST"  action="form_exec.php">
        <label for="nome">Nome</label>
        <input name="nome" type="text" placeholder="Informe o nome" />

        <br></br>

        <label for="idade">Idade</label>
        <input name="idade" type="text" placeholder="Informe a idade" />

        <br></br>

        <button type="submit">Enviar</button>

    </form>
</body>
</html>