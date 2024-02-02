<?php

namespace Fauxify\Fauxify;

use Fauxify\Fauxify\Generator;

class Fauxify {

    public const DEFAULT_LOCALE = 'Eng';
    protected static $providerClasses = ['Person', 'City', 'Payment', 'Book', 'Phone', 'Internet'];

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
                    return "No Class found!";
                }
            }
        } else {
            return "No Provider found!";
        }
    }

    /**
     * It check the existance of the provider
     * @param $locale - It is a string. It is a locale of the provider.
     * @return bool
     */
    public static function getProviderExistance(string $locale): bool
    {
        return file_exists(__DIR__ . '/Provider/' . $locale);
    }

    /**
     * It check the existance of the provider class
     * @param $providerClass - It is a string. It is a class name of the provider.
     * @param $locale - It is a string. It is a locale of the provider.
     * @return bool
     */
    public static function findroviderClass(string $providerClass, string $locale): bool
    {
        $className = "Fauxify\\Fauxify\\Provider\\" . sprintf('%s\\%s', $locale, $providerClass);
        return class_exists($className);
    }

}