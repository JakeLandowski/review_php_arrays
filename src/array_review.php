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
