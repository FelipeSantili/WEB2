<?php

    //Formulário GET
    /*$nome = $_GET['nome'];
    $idade = $_GET['idade'];
    echo "Nome: $nome<br>";
    echo "Idade: $idade<br>";
    */

    //Formulário POST 
    
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    echo $nome . " - " . $idade;
