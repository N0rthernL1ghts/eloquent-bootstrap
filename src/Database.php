<?php

declare(strict_types=1);

namespace NorthernLights\EloquentBootstrap;

use Illuminate\Database\Capsule\Manager as Capsule;
use NorthernLights\EloquentBootstrap\Provider\ConfigProviderInterface;
use NorthernLights\EloquentBootstrap\Provider\ConnectionProviderInterface;

/**
 * Class Database
 * @package NorthernLights\EloquentBootstrap
 */
class Database
{
    /** @var Database */
    private static $instance;

    /** @var Capsule */
    private $capsule;

    /** @var ConnectionProviderInterface[] */
    private $connections;

    /** @var bool */
    private $flagIsBooted;

    /** @var bool */
    private $flagHasConnections;

    /**
     * Database constructor.
     */
    public function __construct(ConfigProviderInterface $config = null)
    {
        $this->connections        = [];
        $this->flagHasConnections = false;
        $this->flagIsBooted       = false;
        $this->capsule            = new Capsule();

        if ($config !== null) {
            $this->addConnection(
                new Connection($config->getAlias(), $config)
            );
        }

        static::$instance = $this;
    }

    /**
     * Get instance
     *
     * @return Database
     */
    public static function getInstance(): Database
    {
        return static::$instance ?? new static();
    }

    /**
     * Boot
     *
     * @return Database
     */
    public function init(): Database
    {
        // Boot the Eloquent ORM…
        $this->capsule->bootEloquent();
        $this->flagIsBooted = true;

        return $this;
    }

    /**
     * Add connection
     *
     * @param ConnectionProviderInterface $connection
     *
     * @return Database
     */
    public function addConnection(ConnectionProviderInterface $connection): Database
    {
        /** @var array $parameters */
        $parameters = [
            $connection->getConfig()->toArray()
        ];

        if ($connection->getName() !== 'default') {
            $parameters[] = $connection->getName();
        }

        $this->capsule->addConnection(... $parameters); // We use argument unpacking here
        $this->flagHasConnections = true;
        $this->connections[]      = $connection;

        return $this;
    }

    /**
     * Has connections?
     *
     * @return bool
     */
    public function hasConnections(): bool
    {
        return $this->flagHasConnections;
    }

    /**
     * Is eloquent booted?
     *
     * @return bool
     */
    public function isBooted(): bool
    {
        return $this->flagIsBooted;
    }

    /**
     * Get all registered connections
     *
     * @return ConnectionProviderInterface[]
     */
    public function getConnections(): array
    {
        return $this->connections;
    }

    /**
     * Return instance of Capsule manager
     *
     * @return Capsule
     */
    public function getCapsule(): Capsule
    {
        return $this->capsule;
    }
}
