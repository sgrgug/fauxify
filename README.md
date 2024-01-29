
# Fauxify

Fauxify is a PHP library designed for developers to generate synthetic data efficiently. It simplifies the creation of realistic fake data for database testing and development, offering a user-friendly alternative similar to FakerPHP. With a range of predefined data providers and customization options.


## Authors

- [@sgrgug](https://www.github.com/sgrgug)


## Features

- Generate a wide range of data types, including names, addresses, emails, and more.
- Support for generating data in two languages and locales ['Nep' | 'Eng'].
- Seamlessly populate various database systems with synthetic data.
- Integration with popular PHP frameworks for convenient data seeding.


## Installation

Install my-project with npm

```bash
  composer require fauxify/fauxify
```
    
## Basic Usage/Example

```php
<?php

// if you haven't use autoload
require_once __DIR__ . '/vendor/autoload.php';

use Fauxify\Fauxify\Fauxify;

$fauxify = Fauxify::create();

// To generate random name
echo $fauxify->name();

// To generate random city
echo $fauxify->city();
```

```php
<?php

for($i = 0; $i<3; $i++)
{
    echo $fauxify->name();
}

// Sagar Gurung
// Sita Kafle
// Ram Magar

```

## Contribute
Exciting things are happening! Join us in improving Fauxify. Your contributions matter. Let's build together
## License
Fauxify is open-sourced library licensed under the [MIT](https://github.com/sgrgug/fauxify/blob/master/LICENSE) 