<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentPerson extends Base{

    // List of name both(Male/Female) format in array
    protected $nameFormat = [
        '{{firstName}} {{lastName}}',
        '{{titleName}} {{firstName}} {{lastName}}',
    ];

    // List of male name format in array
    protected $maleFormat = [
        '{{maleFirstName}} {{lastName}}',
        '{{titleNameMale}} {{maleFirstName}} {{lastName}}',
    ];

    // List of female name format in array
    protected $femaleFormat = [
        '{{femaleFirstName}} {{lastName}}',
        '{{titleNameFemale}} {{femaleFirstName}} {{lastName}}',
    ];

    // List in array
    protected $titleName        = ['Dr.'];
    protected $titleNameMale    = ['Mr.'];
    protected $titleNameFemale  = ['Ms.'];
    protected $maleFirstName    = ['Sagar'];
    protected $femaleFirstName  = ['Jennifer'];
    protected $lastName         = ['Gurung'];


    /**
     * It return the random name from the array
     * @return string
     */
    public function name(): string
    {
        $names  = array_merge($this->maleFirstName, $this->femaleFirstName);
        
        $name           = $this->randArray($names);
        $lastName       = $this->randArray($this->lastName);
        $titleName      = $this->randArray($this->titleName);
        $nameFormat     = $this->randArray($this->nameFormat);

        $name = str_replace(
            [
                '{{titleName}}',
                '{{firstName}}',
                '{{lastName}}'
            ],
            [
                $titleName,
                $name,
                $lastName,
            ],
            $nameFormat
        );

        return $name;
    }

    /**
     * It return the random male name from the array
     * @return string
     */
    public function maleName(): string
    {
        $titleNameMale    = $this->randArray($this->titleNameMale);
        $maleFirstName    = $this->randArray($this->maleFirstName);
        $lastName           = $this->randArray($this->lastName);
        $maleFormat       = $this->randArray($this->maleFormat);


        $maleName = str_replace(
            [
                '{{titleNameMale}}',
                '{{maleFirstName}}',
                '{{lastName}}',
            ],
            [
                $titleNameMale,
                $maleFirstName,
                $lastName,
            ],
            $maleFormat
        );

        return $maleName;
    }

    /**
     * It return the random female name from the array
     * @return string
     */
    public function femaleName(): string
    {
        $titleNameFemale  = $this->randArray($this->titleNameFemale);
        $femaleFirstName  = $this->randArray($this->femaleFirstName);
        $lastName       = $this->randArray($this->lastName);
        $femaleFormat     = $this->randArray($this->femaleFormat);


        $femaleName = str_replace(
            [
                '{{titleNameFemale}}',
                '{{femaleFirstName}}',
                '{{lastName}}',
            ],
            [
                $titleNameFemale,
                $femaleFirstName,
                $lastName,
            ],
            $femaleFormat
        );

        return $femaleName;
    }

}