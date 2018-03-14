<?php

namespace NorthernLights\EloquentBootstrap;

use NorthernLights\EloquentBootstrap\Provider\ConfigProviderInterface;
use NorthernLights\EloquentBootstrap\Provider\ConnectionProviderInterface;

/**
 * Class Connection
 * @package NorthernLights\EloquentBootstrap
 */
class Connection implements ConnectionProviderInterface
{
    /** @var ConfigProviderInterface */
    protected $config;

    /** @var string */
    protected $name;

    /**
     * Connection constructor.
     *
     * @param string $name
     * @param ConfigProviderInterface $config
     */
    public function __construct(string $name, ConfigProviderInterface $config)
    {
        $this->name   = $name;
        $this->config = $config;
    }

    /**
     * {@inheritdoc}
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfig(): ConfigProviderInterface
    {
        return $this->config;
    }
}
