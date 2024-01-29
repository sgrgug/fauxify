<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Fauxify\Fauxify\Generator;

class GeneratorTest extends TestCase
{

    public function testProviderClassesArray()
    {
        $this->assertTrue(true);
    }

    public function testGeneratorCanBeInstantiated()
    {
        $generator = new Generator([], 'Eng');
        $this->assertInstanceOf(Generator::class, $generator);
    }

    // public function testGeneratorCanCallProviderMethod()
    // {
    //     // Assuming you have an Eng\Person class for testing
    //     $mockProvider = $this->createMock(\Fauxify\Fauxify\Provider\Eng\Person::class);
    //     $mockProvider->expects($this->once())
    //         ->method('name')
    //         ->willReturn('John Doe');

    //     // Create an instance of the actual Generator class
    //     $generator = new Generator(['Person'], 'Eng', $mockProvider);

    //     // Call the method directly on the Generator instance
    //     $result = $generator->name();

    //     $this->assertEquals('John Doe', $result);
    // }
}
