<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentPayment extends Base{

    protected $payment = [
        'Esewa', 'Khalti', 'IME Pay', 'Connect IP', 'NTC Pay'
    ];

    protected static $methodCallCount = -1;
    
    protected $isSuffle = FALSE;
    protected $shuffled = [];

    public function payment($unique = NULL)
    {

        // if($unique == 'UNIQUE')
        // {
        //     if($this->isSuffle == FALSE)
        //     {
        //         shuffle($this->payment);
        //         $this->shuffled = $this->payment;
        //         $this->isSuffle = TRUE;
        //     }
        //     self::$methodCallCount++;
        //     return $this->shuffled[self::$methodCallCount];

        // } else {
        //     return $this->randArray($this->payment);
        // }
        
        return $this->randArray($this->payment);
    }

}