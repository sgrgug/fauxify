<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentPayment extends Base{

    protected $payment = [
        'Esewa', 'Khalti', 'IME Pay', 'Connect IP', 'NTC Pay'
    ];

    public function payment($unique = NULL)
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