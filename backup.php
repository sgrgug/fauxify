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

    private function unique(String $unique, Array $array)
    {
        if($unique == 'UNIQUE')
        {
            
            if($this->isSuffle == FALSE)
            {
                shuffle($array);
                $this->shuffled = $array;
                $this->isSuffle = TRUE;
            }

            self::$methodCallCount++;
            return $this->shuffled[self::$methodCallCount];

        } else {
            return $this->randArray($array);
        }
    }

    public function payment($unique = NULL)
    {
        return $this->unique($unique, $this->payment);
    }

}