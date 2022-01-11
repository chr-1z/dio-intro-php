<?php

$categorias = [];

$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

// print_r($categorias); // Printa os valores de categorias.

user('Eduardo', 89, $categorias);

function user($name, $age, $array) {
    switch ($age) {
        case ($age <= 10):
            echo "$name é $array[0].";
            break;
        case ($age >= 11 && $age <= 18):
            echo "$name+$array[1].";
            break;
        case ($age >= 19 && $age <= 65):
            echo "$name+$array[2].";
            break;
        case ($age >= 66):
            echo "$name é $array[3].";
            break;
    }
}

// var_dump($nome, $idade); // Printa nome e idade.

/* FOR

for($i = 0; $i < count($"variável"; $i++) {}

*/


?>