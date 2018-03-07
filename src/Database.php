<?php

namespace NorthernLights\EloquentBootstrap;

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * Class Database
 * @package NorthernLights\EloquentBootstrap
 */
class Database
{
    /** @var Database */
    private static $instance;

    /** @var array */
    private static $connectionSettings = [
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => null,
        'username'  => null,
        'password'  => null,
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ];


    /** @var Capsule */
    private $capsule;

    /**
     * Database constructor.
     */
    protected function __construct()
    {
        $capsule = new Capsule;
        $capsule->addConnection(static::$connectionSettings);

        // Boot the Eloquent ORM…
        $capsule->bootEloquent();

        $this->capsule    = $capsule;
        static::$instance = $this;
    }

    /**
     * Boot
     *
     * @return Database
     */
    public static function init(): Database
    {
        return (static::$instance !== null) ? static::$instance : new static();
    }

    /**
     * Configure database
     *
     * @param array $config
     */
    public static function configure(array $config): array
    {
        return static::$connectionSettings = array_merge(
            static::$connectionSettings,
            $config
        );
    }

    /**
     * @return Capsule
     */
    public function getCapsule(): Capsule
    {
        return $this->capsule;
    }

    /**
     * @return array
     */
    public function getConnectionSettings(): array
    {
        return self::$connectionSettings;
    }
}
