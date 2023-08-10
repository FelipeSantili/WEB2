<?php
$ini = $_GET["inicio"];
$raz = $_GET["razao"];
$qua = $_GET["quant"];

for($i=0;$i<$qua;$i++){
    if($i==0){
        print $ini . " ";
        $i++;
    }
    $ini = $ini + $raz;
    print $ini . " ";
}

?>
