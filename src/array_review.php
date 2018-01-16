<?php  

error_reporting(E_ALL);
ini_set('display_errors', 1);

$animals = ['panda', 'alpaca', 'boa'];

function sortAndPrintAnimals($animals)
{
    sort($animals);

    foreach($animals as $animal)
    {
        echo "$animal&nbsp;";  
    }

    echo "<br />";
}

function addAnimal($newAnimal, &$animals)
{
    $searchArray = array_map('strtolower', $animals);

    if(in_array(strtolower($newAnimal), $searchArray));
}


sortAndPrintAnimals($animals);