<?php

namespace NorthernLights\EloquentBootstrap\Provider;

use StdClass;

/**
 * Interface ConfigProviderInterface
 * @package NorthernLights\EloquentBootstrap\Provider
 */
interface ConfigProviderInterface
{
    /**
     * Get instance (alias)
     *
     * @param string $alias
     *
     * @return ConfigProviderInterface|null
     */
    public static function getInstance(string $alias = 'default');

    /**
     * Get configuration as is
     *
     * @return array
     */
    public function toArray(): array;

    /**
     * Get configuration as is
     *
     * @return StdClass
     */
    public function toObject(): StdClass;

    /**
     * Get alias
     *
     * @return string
     */
    public function getAlias(): string;
}
