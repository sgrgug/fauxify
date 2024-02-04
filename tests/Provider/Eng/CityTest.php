<?php

namespace Tests\Provider\Eng;

use PHPUnit\Framework\TestCase;
use Fauxify\Fauxify\Provider\Eng\City;
use ReflectionClass;

class CityTest extends TestCase{

    public function testGeneratedCity()
    {
        $cityReflectionClass = new ReflectionClass(City::class);

        $property = $cityReflectionClass->getProperty('city');
        $property->setAccessible(true);
        
        $method = $cityReflectionClass->getMethod('city')->invoke(new City);

        $this->assertContains($method, $property->getValue(new City));
    }

}