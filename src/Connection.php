<?php

declare(strict_types=1);

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
    public function getDriver(): string
    {
        return $this->config->getOption('driver');
    }

    /**
     * {@inheritdoc}
     */
    public function getHost(): string
    {
        return $this->config->getOption('host');
    }

    /**
     * {@inheritdoc}
     */
    public function getUsername(): string
    {
        return $this->config->getOption('username');
    }

    /**
     * {@inheritdoc}
     */
    public function getPassword(): string
    {
        return $this->config->getOption('password');
    }

    /**
     * {@inheritdoc}
     */
    public function getDatabase(): string
    {
        return $this->config->getOption('database');
    }

    /**
     * {@inheritdoc}
     */
    public function getCharset(): string
    {
        return $this->config->getOption('charset');
    }

    /**
     * {@inheritdoc}
     */
    public function getCollation(): string
    {
        return $this->config->getOption('collation');
    }

    /**
     * {@inheritdoc}
     */
    public function getPrefix(): string
    {
        return $this->config->getOption('prefix');
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
