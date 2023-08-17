<?php
$val1="";
$val2="";
$op="";
$resul="";
if(isset($_POST['val1']))
    $val1=$_POST['val1'];
if(isset($_POST['val2']))
    $val2=$_POST['val2'];
if(isset($_POST['op']))
    $op=$_POST['op'];

switch ($op){
case '+':
    $resul=$val1+$val2;
    break;
case '-':
    $resul=$val1-$val2;
    break;
case '/':
    if($val2>$val1){
        $resul="Valor 1 não pode ser maior que Valor 2.";
        break;
    }
    $resul=$val1/$val2;
case '*':
    $resul=$val1*$val2;
    break;
}
    ?>

<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calculadora</title>

</head>
<body>
    <div>
    <form method="POST">
        <label>Primeiro Número</label>
        <input type="text" name="val1" placeholder="Valor 1">
        <br></br>
        <select name="op" >
            <option value="">Selecione a operação</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="/">/</option>
            <option value="*"></option>
        </select>
        <label>Segundo Número</label>
        <input type="text" name="val2" placeholder="Valor 2">
        <br></br>
        <button type="submit">Calcular</button>
    </form>
    <div class="resultado">
        <?= "Resultado: ". $resul ?> 
    </div>
    </div>
</body>
</html>