<?php

namespace Fauxify\Fauxify\Provider;
use Fauxify\Fauxify\Provider\Base;

class ParentBank extends Base
{
    // List of banks in array
    protected $classABanks = ["Agriculture Development Bank"];
    protected $classBBanks = ["Garima Bikas Bank"];
    protected $classCBanks = ["Best Finance",];


    /**
     * It return the random mergeBanks from the arrays || It return the unique banks from the array.
     * @param $unique - It is a string. If it is 'unique' then it return the unique value from the array.
     * @return string
     */
    public function bank(string $unique = ""): string
    {
        $allBanks = array_merge($this->classABanks, $this->classBBanks, $this->classCBanks);

        if(strtoupper($unique) == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $allBanks);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($allBanks);
        }
        
        return $this->randArray($allBanks);
    }

    /**
     * It return the random classABank from the array || It return the unique classABank from the array.
     * @param $unique - It is a string. If it is 'unique' then it return the unique value from the array.
     * @return string
     */
    public function classABank(string $unique = ""): string
    {
        if(strtoupper($unique) == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $this->classABanks);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($this->classABanks);
        }
        
        return $this->randArray($this->classABanks);
    }

    /**
     * It return the random classBBank from the array || It return the unique classBBank from the array.
     * @param $unique - It is a string. If it is 'unique' then it return the unique value from the array.
     * @return string
     */
    public function classBBank(string $unique = ""): string
    {
        if(strtoupper($unique) == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $this->classBBanks);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($this->classBBanks);
        }
        
        return $this->randArray($this->classBBanks);
    }

    /**
     * It return the random classCBank from the array || It return the unique classCBank from the array.
     * @param $unique - It is a string. If it is 'unique' then it return the unique value from the array.
     * @return string
     */
    public function classCBank(string $unique = ""): string
    {
        if(strtoupper($unique) == 'UNIQUE')
        {
            $this->shuffleArray(__FUNCTION__, $this->classCBanks);
            $this->incrementMethodCallCount(__FUNCTION__);
            return $this->shuffled[__FUNCTION__][$this->methodCallCount[__FUNCTION__]] ?? NULL;
        } else {
            return $this->randArray($this->classCBanks);
        }
        
        return $this->randArray($this->classCBanks);
    }



}