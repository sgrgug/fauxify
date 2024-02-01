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
    public function incrementMethodCallCount($methodName)
    {
        if(!isset($this->methodCallCount[$methodName])){
            $this->methodCallCount[$methodName] = 0;
        }else{
            $this->methodCallCount[$methodName]++;
        }
    }
    
    public function shuffleArray($methodName, Array $shuffleArray)
    {
        if(!isset($this->isShuffle[$methodName])){
            shuffle($shuffleArray);
            $this->shuffled[$methodName] = $shuffleArray;
            $this->isShuffle[$methodName] = TRUE;
        }
    }


    public function randArray($array)
    {
        return $array[array_rand($array)];
    }

}