<?php

namespace Fauxify\Fauxify;

class Generator {

    private static $newInstances = [];

    public function __construct($providerClasses, $locale) {
        foreach($providerClasses as $providerClass)
        {
            $className = "Fauxify\\Fauxify\\Provider\\" . sprintf('%s\\%s', $locale, $providerClass);
            
            if(class_exists($className))
            {
                self::$newInstances[$providerClass] = new $className();
            } else {
                continue;
            }
        }
    }

    public function __call($method, $arguments)
    {
        foreach(self::$newInstances as $newInstance)
        {
            if(method_exists($newInstance, $method))
            {
                return $newInstance->$method(...$arguments);
            }
        }
    }

}
