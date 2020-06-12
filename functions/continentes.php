<?php 

$continenteArr = array(
    0 => array(
        'id' => 0,
        'nombre' => 'Todo',
    ),
    1 => array(
        'id' => 1,
        'nombre' => 'Europa',
    ),
    2 => array(
        'id' => 2,
        'nombre' => 'America del Norte',
    ),
    3 => array(
        'id' => 3,
        'nombre' => 'America del Sur',
    ),
    4 => array(
        'id' => 4,
        'nombre' => 'Asia',
    ),
    5 => array(
        'id' => 5,
        'nombre' => 'Africa',
    ),
    6 => array(
        'id' => 6,
        'nombre' => 'Oceania',
    ),
);

$contienenteJSON = json_encode($continenteArr, true);
$file = '../json/continentes.json';
file_put_contents($file, $contienenteJSON);
