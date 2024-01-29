<?php

namespace Fauxify\Fauxify;

use Fauxify\Fauxify\Generator;

class Fauxify {

    public const DEFAULT_LOCALE = 'Eng';
    protected static $providerClasses = ['Person', 'City', 'Payment', 'Internet', 'Book'];

    public static function create($locale = self::DEFAULT_LOCALE)
    {
        if(self::getProviderExistance($locale))
        {
            foreach(self::$providerClasses as $providerClass)
            {
                if(self::findroviderClass($providerClass, $locale))
                {
                    return new Generator(self::$providerClasses, $locale);
                } else {
                    echo "No Class found!";
                    exit;
                }
            }
        } else {
            echo "No Provider found!";
        }
    }

    public static function getProviderExistance($locale)
    {
        return file_exists('src/Provider/' . $locale);
    }

    public static function findroviderClass($providerClass, $locale)
    {
        $className = "Fauxify\\Fauxify\\Provider\\" . sprintf('%s\\%s', $locale, $providerClass);
        return class_exists($className);
    }

}