<?php

namespace Fauxify\Fauxify\Provider\Nep;

use Fauxify\Fauxify\Provider\ParentPhone;

class Phone extends ParentPhone{

    protected $mobileNumberFormat = [
        "+९७७ ९८XXXXXXXX",
        "+९७७ ९७XXXXXXXX"
    ];

    protected $nepaliNumber = ["०","१","२","३","४","५","६","७","८","९"];

    public function mobileNumber()
    {
        $engToNepNumber = array_map(function($number){
            return $this->nepaliNumber[$number];
        }, str_split(mt_rand(10000000, 99999999)));

        $result = implode("", $engToNepNumber);

        return str_replace("XXXXXXXX", $result, $this->randArray($this->mobileNumberFormat));

    }

}