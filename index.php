<?php

require_once 'vendor/autoload.php';

use Fauxify\Fauxify\Fauxify;

$fauxify = Fauxify::create();

// echo "<pre>";
// print_r($fauxify->payment('UNIQUE'));
// echo "</pre>";
for($i=0; $i<7; $i++)
{
    echo $i+1 . " - ";
    echo $fauxify->city("UNIQUE");
    echo "<br/>";
}

echo "<br /><br />";

for($j=0; $j<5; $j++)
{
    echo $j+1 . " - ";
    echo $fauxify->payment("UNIQUE");
    echo "<br/>";
}
echo "<br /><br />";

echo 'Total time method call. ' . $fauxify->ch();

echo "<br /><br />";

echo "Total Count Of Array. " . $fauxify->co();

echo "<br /><br />";
