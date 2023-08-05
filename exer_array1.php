<?php

$prof = array ("Daniel", "Ana Paula", "Humberto", "Julio", "Juliana");
$times = array ("Grêmio", "Flamengo", "Palmeiras", "Cruzeiro", "Botafogo");
$frutas = array ("Maçã", "Uva", "Laranja", "Limão", "Pera");
$animais = array ("Cachorro", "Gato", "Cavalo", "Aranha");

echo "<table border = 1>";

echo "<tr>";
foreach ($prof as $prof)
    echo "<td>". $prof . "</td>";
echo "/tr>";

echo "</table>";