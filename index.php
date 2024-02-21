<?php

require_once './vendor/autoload.php';

use Fauxify\Fauxify\Fauxify;

$fauxify = Fauxify::create();

// echo"<pre>";
// print_r($fauxify->color());
// echo"</pre>";

for($i=0; $i<5; $i++){
    echo $fauxify->color('unique')."<br>";
}