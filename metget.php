<?php

function media($num1, $num2, $num3){
    return ($num1 + $num2 + $num3) / 3;
}

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$num3 = $_GET['num3'];


echo media($num1, $num2, $num3);