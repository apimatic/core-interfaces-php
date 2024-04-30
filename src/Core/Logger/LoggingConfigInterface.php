<?php

namespace CoreInterfaces\Core\Logger;

use Psr\Log\AbstractLogger;

interface LoggingConfigInterface
{
    /**
     * Gets the logger instance used for logging.
     *
     * @return AbstractLogger The logger instance.
     */
    public function getLogger(): AbstractLogger;

    /**
     * Gets the level of logging.
     *
     * Returns a string representing the level of logging. See Psr\Log\LogLevel.php
     * for possible values of log levels.
     *
     * @return string The level of logging.
     */
    public function getLevel(): string;

    /**
     * Indicates whether sensitive headers should be masked in logs.
     *
     * @return bool True if sensitive headers should be masked, false otherwise.
     */
    public function shouldMaskSensitiveHeaders(): bool;

    /**
     * Gets the request configuration for logging.
     *
     * @return LoggingRequestConfigInterface The request configuration.
     */
    public function getRequestConfig(): LoggingRequestConfigInterface;

    /**
     * Gets the response configuration for logging.
     *
     * @return LoggingResponseConfigInterface The response configuration.
     */
    public function getResponseConfig(): LoggingResponseConfigInterface;
}
