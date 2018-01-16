<?php  

error_reporting(E_ALL);
ini_set('display_errors', 1);

$animals = ['panda', 'alpaca', 'boa'];

function sortAndPrintAnimals($animals)
{
    sort($animals);

    echo '<p>';

    foreach($animals as $animal)
    {
        echo "$animal&nbsp;";  
    }

    echo '<p/>';
}

function addAnimal($newAnimal, &$animals)
{
    echo "<p>Adding $newAnimal...</p>";

    $newAnimal = strtolower($newAnimal);

    $searchArray = array_map('strtolower', $animals);

    if(!in_array($newAnimal, $searchArray))
    {
        $animals[] = $newAnimal;
    }
}

sortAndPrintAnimals($animals);

addAnimal('Bear', $animals);

sortAndPrintAnimals($animals);

addAnimal('Alpaca', $animals);

sortAndPrintAnimals($animals);