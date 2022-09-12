<?php
$numeriCasuali = array();

for($i = 0; $i < 15; $i++){
    $verifica = true;
    while($verifica){
        $numeroGenerato = rand(1,50);
        if (!in_array($numeroGenerato, $numeriCasuali)){
            $numeriCasuali[] = $numeroGenerato;
            $verifica = false;
        }
    }
};

var_dump($numeriCasuali);