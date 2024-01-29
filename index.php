<?php

require_once 'vendor/autoload.php';

// use Fauxify\Fauxify\Fauxify;

// require_once 'src/Fauxify.php';
use Fauxify\Fauxify\Fauxify;

$fauxify = Fauxify::create();

print_r($fauxify->name());

// $person = new Fauxify\Fauxify\Provider\Nep\Person();