<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentPayment extends Base{

    // List of payment in array
    protected $payment = [
        'Esewa', 'Khalti', 'IME Pay', 'Connect IP', 'NTC Pay'
    ];

    /**
     * It return the random payment from the array || It return the unique payment from the array.
     * @param $unique - It is a string. If it is 'unique' then it return the unique value from the array.
     * @return string
     */
    public function payment(string $unique = NULL): string
    {

        if(strtoupper($unique) == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $this->payment);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($this->payment);
        }
        
        return $this->randArray($this->payment);
    }

}