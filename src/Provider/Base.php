<?php

namespace Fauxify\Fauxify\Provider;

class Base {

    public function randArray($array)
    {
        return $array[array_rand($array)];
    }

}