<?php

namespace CoreInterfaces\Core\Logger;

interface LoggingResponseConfigInterface
{
    /**
     * Indicates whether to log the body.
     *
     * @return bool
     */
    public function shouldLogBody(): bool;

    /**
     * Indicates whether to log the headers.
     *
     * @return bool
     */
    public function shouldLogHeaders(): bool;

    /**
     * Gets the list of headers to include in logging.
     *
     * @return string[]
     */
    public function getHeadersToInclude(): array;

    /**
     * Gets the list of headers to exclude from logging.
     *
     * @return string[]
     */
    public function getHeadersToExclude(): array;
}
