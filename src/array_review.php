<?php  

error_reporting(E_ALL);
ini_set('display_errors', 1);


  //==============================================================//
 //                             PART 1                           //
//==============================================================//

echo '<h1>Part One</h1>';

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


  //==============================================================//
 //                             PART 2                           //
//==============================================================//

echo '<h2>Part Two</h2>';

$flavors =  
[
    'grasshopper' => 'The Grasshopper',
    'maple'       => 'Whiskey Maple Bacon',
    'carrot'      => 'Carrot Walnut',
    'caramel'     => 'Salted Caramel Cupcake',
    'velvet'      => 'Red Velvet',
    'lemon'       => 'Lemon Drop',
    'tiramisu'    => 'Tiramisu'
];

function flavorCheckBoxes($flavors)
{
    echo '<form action="." method="POST">';

    foreach($flavors as $flavor => $displayFlavor)
    {
        echo "<label>
                    <input type=\"checkbox\" name=\"flavors[]\" value=\"$flavor\" />
                    $displayFlavor&nbsp;
              </label>
              <br />";
    }

    echo '</form>';
}

flavorCheckBoxes($flavors);