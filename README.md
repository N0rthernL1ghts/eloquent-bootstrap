Eloquent ORM standalone Bootstrap
=======================
[![Maintainability](https://api.codeclimate.com/v1/badges/8ee6bde7b6ed450b5029/maintainability)](https://codeclimate.com/github/N0rthernL1ghts/eloquent-bootstrap/maintainability)


The Eloquent ORM that comes with Laravel makes it incredibly easy to interact with a database.

Unfortunately, if you want to use it standalone, without rest of framework, things are not so easy.

This library solves that headache for you, and brings Eloquent ORM to your project with single command.

## Install

Via Composer

``` bash
$ composer require northern-lighths/eloquent-bootstrap
```
It really is that easy!

## Usage

``` php
<?php

namespace NorthernLights\EloquentBootstrap\Example;

use NorthernLights\EloquentBootstrap\Database;

require __DIR__ . '/vendor/autoload.php';

Database::configure([
    'host' => '127.0.0.1',
    'username' => 'example_username',
    'password' => 'example_password',
    'database' => 'example_database_name'
]);

/** @var Database $database - A this point, Eloquent will boot */
$database = Database::init();
```
And that's all you need to include in your bootstrap file.
For everything else, consult with [Eloquent documentation](https://laravel.com/docs/5.6/eloquent).

## Creating a simple model
``` php
<?php

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

## PSR-2 Standard
Library strives to comply with PSR-2 coding standards, therefore we included following commands:
``` bash
$ composer check-style
$ composer fix-stye
```
Note: Second command will actually modify files

## PSR-4 Standard
Library complies with PSR-4 autoloading standard

## Testing

``` bash
$ composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.


