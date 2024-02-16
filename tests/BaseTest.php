<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class BaseTest extends TestCase
{
    public function testMobileNumberGeneratedIsInRange() {
        
        $this->assertTrue(true);
    }

    protected function hasUniqueValues(array $array): bool
    {
        $counts = array_count_values($array);
        foreach($counts as $count) {
            if($count > 1) {
                return false;
            }
        }
        return true;
    }

    protected function arrayExistInAnotherArray(array $array1, array $array2): bool
    {
        if(empty(array_diff($array1, $array2)))
        {
            return true;
        } else {
            return false;
        }
    }
}