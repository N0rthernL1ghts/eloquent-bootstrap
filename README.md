Eloquent ORM standalone Bootstrap
=======================
[![Maintainability](https://api.codeclimate.com/v1/badges/8ee6bde7b6ed450b5029/maintainability)](https://codeclimate.com/github/N0rthernL1ghts/eloquent-bootstrap/maintainability)
[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FN0rthernL1ghts%2Feloquent-bootstrap.svg?type=shield)](https://app.fossa.io/projects/git%2Bgithub.com%2FN0rthernL1ghts%2Feloquent-bootstrap?ref=badge_shield)


The Eloquent ORM that comes with Laravel makes it incredibly easy to interact with a database.

Unfortunately, if you want to use it standalone, without rest of framework, things are not so easy.

This library solves that headache for you, and brings Eloquent ORM to your project with single command.

## Install

Via Composer

``` bash
$ composer require northern-lights/eloquent-bootstrap
```
It really is that easy!

## Usage - Single connection
``` php
<?php

declare(strict_types=1);

namespace NorthernLights\EloquentBootstrap\Example;

use NorthernLights\EloquentBootstrap\Database;
use NorthernLights\EloquentBootstrap\Provider\ConfigOptions;
use NorthernLights\EloquentBootstrap\Provider\ConfigProvider;

require __DIR__ . '/vendor/autoload.php';

$database = new Database(new ConfigProvider([
        ConfigOptions::HOST     => 'localhost',
        ConfigOptions::DATABASE => 'database_name',
        ConfigOptions::USERNAME => 'user',
        ConfigOptions::PASSWORD => 'pass'
]));

// At this point, eloquent will boot
$database->init();
```

## Usage - Multiple connections

``` php
<?php

declare(strict_types=1);

namespace NorthernLights\EloquentBootstrap\Example;

use NorthernLights\EloquentBootstrap\Connection;
use NorthernLights\EloquentBootstrap\Database;
use NorthernLights\EloquentBootstrap\Provider\ConfigOptions;
use NorthernLights\EloquentBootstrap\Provider\ConfigProvider;

require __DIR__ . '/vendor/autoload.php';

$database = new Database();
$database->addConnection(
    new Connection('first-database', new ConfigProvider([
        ConfigOptions::HOST     => 'localhost',
        ConfigOptions::DATABASE => 'first_database',
        ConfigOptions::USERNAME => 'user',
        ConfigOptions::PASSWORD => 'pass'
    ]))
);

$database->addConnection(
    new Connection('second-database', new ConfigProvider([
        ConfigOptions::HOST     => 'localhost',
        ConfigOptions::DATABASE => 'second_database',
        ConfigOptions::USERNAME => 'second_user',
        ConfigOptions::PASSWORD => 'pass'
    ]))
);

// At this point, eloquent will boot
$database->init();
```
And that's all you need to include in your bootstrap file.
For everything else, consult with [Eloquent documentation](https://laravel.com/docs/5.6/eloquent).

Note: Even in this example, you can setup default connection via Database constructor.

Note: NorthernLights\EloquentBootstrap\Database::getCapsule() will return Capsule instance, which can be used to add connections directly

## RAW Query usage

``` php
<?php

(...)
// Notice that you need this line too
$database->getCapsule()->setAsGlobal();

$user = DB::table('users')->where('userid', '=', '123');

dump($user);
```

## Creating a simple model
``` php
<?php

declare(strict_types=1);

namespace NorthernLights\EloquentBootstrap\Example;

use NorthernLights\EloquentBootstrap\Model as EloquentModel;

/**
 * Class Users
 * @package NorthernLights\EloquentBootstrap\Example
 */
class Users extends EloquentModel
{
    /** @var string  */
    protected $table = 'users';
}
```
Note the usage of NorthernLights\EloquentBootstrap\Model, since it will only fix IDE annotations (Confirmed: PhpStorm). It doesn't include any logic.

## PSR-12 Standard
Library strives to comply with PSR-12 coding standards, therefore we included following commands:
``` bash
$ composer check-style
$ composer fix-style
```
Note: Second command will actually modify files

## PSR-4 Standard
Library complies with PSR-4 autoloading standard

## Testing

``` bash
$ composer php-lint
$ composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.




[![FOSSA Status](https://app.fossa.io/api/projects/git%2Bgithub.com%2FN0rthernL1ghts%2Feloquent-bootstrap.svg?type=large)](https://app.fossa.io/projects/git%2Bgithub.com%2FN0rthernL1ghts%2Feloquent-bootstrap?ref=badge_large)
