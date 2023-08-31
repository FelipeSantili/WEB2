<?php
$nome ="";
$descricao ="";
$categoria ="";

if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
}

// Verifica se há dados de formulário enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Realize validações nos campos obrigatórios
    $errors = [];
    
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $categoria = $_POST["categoria"];
    
    if (empty($nome)) {
        $errors[] = "O campo Nome é obrigatório.";
    }
    
    if (empty($descricao)) {
        $errors[] = "O campo Descrição é obrigatório.";
    }
    
    if (empty($categoria)) {
        $errors[] = "O campo Categoria é obrigatório.";
    }
    
    if (count($errors) === 0) {
        // Gere um UUID para o novo item
        $id = uniqid();
        
        // Carregue os dados existentes do arquivo JSON
        $data = json_decode(file_get_contents("dados.json"), true);
        
        // Adicione o novo item aos dados
        $data[] = [
            "id" => $id,
            "nome" => $nome,
            "descricao" => $descricao,
            "categoria" => $categoria
        ];
        
        // Salve os dados atualizados de volta no arquivo JSON
        file_put_contents("dados.json", json_encode($data, JSON_PRETTY_PRINT));
        
        // Redirecione para a lista de itens
        header("Location: index.php");
        exit();
    }
}

// Carregue os dados do arquivo JSON
$data = json_decode(file_get_contents("dados.json"), true);
?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cadastro de Entidade</title>
    <body>

    <h1>Cadastro de Entidade</h1>
    
    <div class="container">
    <form method="POST">
        <label for="nome">NOME:</label>
        <input type="text" name="nome"><br>
        
        <label for="descricao">DESCRIÇÃO:</label>
        <textarea name="descricao"></textarea><br>
        
        <label for="categoria">CATEGORIA:</label>
        <select name="categoria">
            <option value="opcao1">Opção 1</option>
            <option value="opcao2">Opção 2</option>
        </select><br>
        
        <button type="submit">Cadastrar</button>
    </form>
    </div>
    
    <?php if (!empty($errors)): ?>
        <h2>Erros:</h2>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
    <h2>Lista de Itens:</h2>
    <ul>
        <?php foreach ($data as $item): ?>
            <li>
                <?php echo $item["nome"]; ?> -
                <?php echo $item["descricao"]; ?> -
                <?php echo $item["categoria"]; ?>
            </li>
        <?php endforeach; ?>
        /
    </ul>
</body>
</html>
