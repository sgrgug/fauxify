<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentCity extends Base{

    protected $city = [
        'Pokhara'
    ];

    public function city($unique = NULL)
    {
        if($unique == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $this->city);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($this->city);
        }
    }

}