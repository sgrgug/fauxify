<?php

namespace Tests\Provider\Eng;

// use PHPUnit\Framework\TestCase;
use Tests\BaseTest;
use Fauxify\Fauxify\Provider\Eng\Bank;

class BankTest extends BaseTest{

    public function testBankIsNotEmpty()
    {
        $bank = new Bank();
        $bankName = $bank->bank();

        // Assert that the generated bank name is a non-empty string
        $this->assertNotEmpty($bankName);
        $this->assertIsString($bankName);
    }
    public function testClassABankIsNotEmpty()
    {
        $bank = new Bank();
        $bankName = $bank->classABank();

        // Assert that the generated bank name is a non-empty string
        $this->assertNotEmpty($bankName);
        $this->assertIsString($bankName);
    }
    public function testClassBBankIsNotEmpty()
    {
        $bank = new Bank();
        $bankName = $bank->classBBank();

        // Assert that the generated bank name is a non-empty string
        $this->assertNotEmpty($bankName);
        $this->assertIsString($bankName);
    }
    public function testClassCBankIsNotEmpty()
    {
        $bank = new Bank();
        $bankName = $bank->classCBank();

        // Assert that the generated bank name is a non-empty string
        $this->assertNotEmpty($bankName);
        $this->assertIsString($bankName);
    }

    // public function testGeneratedBankNameIsUniqueWhenParamIsUnique()
    // {
    //     $resultArray = [];

    //     $reflectedClass = new \ReflectionClass(Bank::class);
    //     $reflectedClassMethod = $reflectedClass->getMethod('bank')->invoke(new Bank, 'unique');

    //     $reflectedClassPropertyClassABanks = $reflectedClass->getProperty('classABanks');
    //     $reflectedClassPropertyClassABanks->setAccessible(true);
    //     $classABanks = $reflectedClassPropertyClassABanks->getValue(new Bank);

    //     $reflectedClassPropertyClassBBanks = $reflectedClass->getProperty('classBBanks');
    //     $reflectedClassPropertyClassBBanks->setAccessible(true);
    //     $classBBanks = $reflectedClassPropertyClassBBanks->getValue(new Bank);

    //     $reflectedClassPropertyClassCBanks = $reflectedClass->getProperty('classCBanks');
    //     $reflectedClassPropertyClassCBanks->setAccessible(true);
    //     $classCBanks = $reflectedClassPropertyClassCBanks->getValue(new Bank);

    //     $mergedArray = array_merge($classABanks, $classBBanks, $classCBanks);

    //     for($i=0; $i < count($mergedArray); $i++)
    //     {
    //         $resultArray[] = (new \ReflectionClass(Bank::class))->getMethod('bank')->invoke(new Bank, 'unique');
    //     }
    //     print_r($resultArray);
        
    //     $this->assertTrue(true);
    //     // $this->assertTrue($this->hasUniqueValues($resultArray));
    //     // $this->assertTrue($this->arrayExistInAnotherArray($resultArray, $mergedArray));
        
        
    // }

}