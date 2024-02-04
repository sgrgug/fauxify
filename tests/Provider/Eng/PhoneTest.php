<?php

namespace Tests\Provider\Eng;

use PHPUnit\Framework\TestCase;
use Fauxify\Fauxify\Provider\Eng\Phone;
use ReflectionClass;

class PhoneTest extends TestCase{

    public function testMobileNumberGeneratedIsInRange() {
        
        $phoneReflectionClass = new ReflectionClass(Phone::class);

        $method = $phoneReflectionClass->getMethod('mobileNumber')->invoke(new Phone);

        // Assert that the result is a string
        $this->assertIsString($method);

        // Assert that the result matches the expected format
        $this->assertMatchesRegularExpression('/^\+977 9[7-8]\d{8}$/', $method);
        
    }

}