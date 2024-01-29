<?php

namespace Fauxify\Fauxify\Provider\Eng;

use Fauxify\Fauxify\Provider\ParentPerson;

class Person extends ParentPerson
{
    protected $titleName = [
        'Dr.', 'Er.', 'Prof.'
    ];

    protected $titleNameMale = [
        'Dr.', 'Er.', 'Prof.', 'Shree.',
    ];
    protected $titleNameFemale = [
        'Dr.', 'Er.', 'Prof.', 'Mrs.', 'Ms.',
    ];

    protected $maleFirstName = [
        'Sagar', 'Lokesh', 'Sachin', 'Sujan', 'Milan', 'Bibek'
    ];

    protected $femaleFirstName = [
        'Suju', 'Sandhya', 'Bimala', 'Asmita'
    ];

    protected $lastName = [
        'Devkota', 'Gurung', 'Shrestha', 'Magar', 'Gaire', 'Kafle'
    ];

}