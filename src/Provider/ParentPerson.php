<?php

namespace Fauxify\Fauxify\Provider;

use Fauxify\Fauxify\Provider\Base;

class ParentPerson extends Base{

    protected $nameFormat = [
        '{{firstName}} {{lastName}}',
        '{{titleName}} {{firstName}} {{lastName}}',
    ];

    protected $maleFormat = [
        '{{maleFirstName}} {{lastName}}',
        '{{titleNameMale}} {{maleFirstName}} {{lastName}}',
    ];

    protected $femaleFormat = [
        '{{femaleFirstName}} {{lastName}}',
        '{{titleNameFemale}} {{femaleFirstName}} {{lastName}}',
    ];

    protected $titleName        = ['Dr.'];
    protected $titleNameMale    = ['Mr.'];
    protected $titleNameFemale  = ['Ms.'];
    protected $maleFirstName    = ['Sagar'];
    protected $femaleFirstName  = ['Jennifer'];
    protected $lastName         = ['Gurung'];

    public function name()
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

    public function maleName()
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

    public function femaleName()
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