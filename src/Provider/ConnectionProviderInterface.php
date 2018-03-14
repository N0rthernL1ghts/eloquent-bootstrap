<?php

namespace NorthernLights\EloquentBootstrap\Provider;

/**
 * Interface ConnectionProviderInterface
 * @package NorthernLights\EloquentBootstrap\Provider
 */
interface ConnectionProviderInterface
{
    /**
     * Get connection name
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Get connection config
     *
     * @return ConfigProviderInterface
     */
    public function getConfig(): ConfigProviderInterface;
}
