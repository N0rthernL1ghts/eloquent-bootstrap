<?php

namespace NorthernLights\EloquentBootstrap\Provider;

/**
 * Interface ConnectionProviderInterface
 * @package NorthernLights\EloquentBootstrap\Provider
 */
interface ConnectionProviderInterface
{
    /**
     * Get database driver
     *
     * @return string
     */
    public function getDriver(): string;

    /**
     * Get database host
     *
     * @return string
     */
    public function getHost(): string;

    /**
     * Get database username
     *
     * @return string
     */
    public function getUsername(): string;

    /**
     * Get database password
     *
     * @return string
     */
    public function getPassword(): string;

    /**
     * Get database name
     *
     * @return string
     */
    public function getDatabase(): string;

    /**
     * Get database charset/encoding
     *
     * @return string
     */
    public function getCharset(): string;

    /**
     * Get database collation
     *
     * @return string
     */
    public function getCollation(): string;

    /**
     * Get database prefix
     *
     * @return string
     */
    public function getPrefix(): string;

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
