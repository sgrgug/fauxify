<?php

namespace Tests\Provider\Eng;

use PHPUnit\Framework\TestCase;
use Fauxify\Fauxify\Provider\Eng\Payment;

class PaymentTest extends TestCase
{

    private function getReflectionClass()
    {
        return new \ReflectionClass(Payment::class);
    }

    private function getReflectionClassMethod($method)
    {
        return $this->getReflectionClass()->getMethod($method);
    }

    private function getReflectionClassProperty($property)
    {
        $property = $this->getReflectionClass()->getProperty($property);
        $property->setAccessible(true);
        return $property;
    }

    public function testGeneratedPaymentIsString()
    {
        // Assert, it have generated value is String.
        $this->assertIsString($this->getReflectionClassMethod('payment')->invoke(new Payment));
    }

    public function testPropertyIsArray()
    {
        $this->assertIsArray($this->getReflectionClassProperty('payment')->getValue(new Payment));
    }

    public function testGeneratedPaymentIsInTheProperty()
    {   
        // Assert, it have generated value in the property(Array).
        $this->assertContains(
            $this->getReflectionClassMethod('payment')->invoke(new Payment),
            $this->getReflectionClassProperty('payment')->getValue(new Payment)
        );
        
    }

    // public function testGeneratedPaymentIsUnqiueWhenParamUNIQUE()
    // {
        
    //     $generatedPaymentInArray = [];
    //     $method = $this->getReflectionClassMethod('payment')->invoke(new Payment, 'UNIQUE');
        
    //     for($i=0; $i<5; $i++)
    //     {
    //         $generatedPaymentInArray[] = $method;
    //     }
        
    //     $this->assertIsString($method);
    //     $this->assertIsArray($generatedPaymentInArray);
    //     $this->assertIsArray($this->getReflectionClassProperty('payment')->getValue(new Payment));

    //     print_r($generatedPaymentInArray);
    //     // $this->assertEquals($this->getReflectionClassProperty('payment')->getValue(new Payment), $generatedPaymentInArray);
    // }

}