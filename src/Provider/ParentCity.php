<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentCity extends Base{

    protected $city = [
        'Pokhara'
    ];

    public function city()
    {
        return $this->randArray($this->city);
    }

}