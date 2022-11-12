<?php

declare(strict_types=1);

namespace NorthernLights\EloquentBootstrap\Provider;

use ArrayIterator;
use StdClass;

/**
 * Class ConfigOptions
 * @package NorthernLights\EloquentBootstrap\Provider
 */
class ConfigOptions
{
    public const DRIVER = 'driver';
    public const HOST = 'host';
    public const DATABASE = 'database';
    public const USERNAME = 'username';
    public const PASSWORD = 'password';
    public const CHARSET = 'charset';
    public const COLLATION = 'collation';
    public const PREFIX = 'prefix';
}
