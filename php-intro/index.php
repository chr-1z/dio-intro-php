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
            echo "É $array[0].";
            break;
        case ($age >= 11 && $age <= 18):
            echo "É $array[1].";
            break;
        case ($age >= 19 && $age <= 65):
            echo "É $array[2].";
            break;
        case ($age >= 66):
            echo "É $array[3].";
            break;
    }
}

// var_dump($nome, $idade); // Printa nome e idade.

?>