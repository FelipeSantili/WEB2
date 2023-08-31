<?php 


//Verificar seo ID do livro foi enviado/recebido
if(isset($_GET['id']));
    $id = $_GET['id'];

if(! $id){
    echo "ID não enviado";
    echo "<br>";
    echo "<a href='index.php'>Voltar</a>";
    exit();
}

//Cerregar o array de livros do arquivo


//Excluir o livro
