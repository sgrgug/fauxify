<?php

namespace Fauxify\Fauxify\Provider;

class Base {
    // It store method call count of every method called.
    protected $methodCallCount = [];

    // It store the shuffled status of the method called.
    protected $isShuffle = [];

    // It store the shuffled array of the method called.
    // It store multiple array.
    protected $shuffled = [];

    /**
     * It increment the method call count
     * @param $methodName - Name of the method / function
     * @return void
     */
    public function incrementMethodCallCount(string $methodName)
    {
        if(!isset($this->methodCallCount[$methodName])){
            $this->methodCallCount[$methodName] = 0;
        }else{
            $this->methodCallCount[$methodName]++;
        }
    }
    
    /**
     * It shuffle the array and store the shuffled array in the $shuffled array.
     * @param $methodName - Name of the method / function
     * @param $shuffleArray - Array to be shuffled
     * @return void
     */
    public function shuffleArray(string $methodName, array $shuffleArray)
    {
        if(!isset($this->isShuffle[$methodName])){
            shuffle($shuffleArray);
            $this->shuffled[$methodName] = $shuffleArray;
            $this->isShuffle[$methodName] = TRUE;
        }
    }


    /**
     * It return the random value from the array
     * @param $methodName - Name of the method / function
     * @return string
     */
    public function randArray(array $array): string
    {
        return $array[array_rand($array)];
    }

}