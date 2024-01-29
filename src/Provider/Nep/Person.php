<?php

namespace Fauxify\Fauxify\Provider\Nep;

use Fauxify\Fauxify\Provider\ParentPerson;

class Person extends ParentPerson
{
    protected $titleName = [
        'डा.', 'एर.', 'प्रो.'
    ];

    protected $titleNameMale = [
        'डा.', 'एर.', 'प्रो.', 'श्री.',
    ];
    protected $titleNameFemale = [
        'डा.', 'एर.', 'प्रो.', 'श्रीमती.', 'सुश्री.',
    ];

    protected $maleFirstName = [
        'सागर', 'लोकेश', 'सचिन', 'सुजन', 'मिलन', 'बिबेक'
    ];

    protected $femaleFirstName = [
        'सुजु', 'सन्ध्या', 'बिमला', 'अस्मिता'
    ];

    protected $lastName = [
        'देवकोटा', 'गुरुङ', 'श्रेष्ठ', 'मगर', 'गैरे', 'काफ्ले'
    ];

}