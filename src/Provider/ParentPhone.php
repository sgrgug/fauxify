<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentPhone extends Base
{

    protected $mobileNumberFormat = [
        "+977 98XXXXXXXX",
        "+977 97XXXXXXXX"
    ];
    
    public function mobileNumber()
    {
        return str_replace("XXXXXXXX", mt_rand(10000000, 99999999), $this->randArray($this->mobileNumberFormat));
    }
}