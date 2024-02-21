<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentColor extends Base{

    // List of color in array
    protected $color = [
        'Red',
    ];

    /**
     * It return the random color from the array || It return the unique color from the array.
     * @param $unique - It is a string. If it is 'unique' then it return the unique value from the array.
     * @return string
     */
    public function color(string $unique = ""): string
    {

        if(strtoupper($unique) == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $this->color);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($this->color);
        }
    }

}