<?php

$profs = array("Daniel"=> "Dev. Web II",
                "Ana Paula"=> "Banco de dados",
                "Humberto"=> "Orient. a Objetos");

array_push($prof, "Julio");

print_r($prof);

foreach ($profs as $prof)
    echo $prof . "<br>";    