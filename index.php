<?php

require_once __DIR__ . '/vendor/autoload.php';

use Fauxify\Fauxify\Fauxify;

$fauxify = Fauxify::create();

echo "<pre>";
print_r($fauxify->city());
echo "</pre>";