<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentCity extends Base{

    // List of city in array
    protected $city = [
        'Pokhara'
    ];

    /**
     * It return the random city from the array || It return the unique city from the array.
     * @param $unique - It is a string. If it is 'unique' then it return the unique value from the array.
     * @return string
     */
    public function city(string $unique = ""): string
    {
        if(strtoupper($unique) == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $this->city);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($this->city);
        }
    }

}