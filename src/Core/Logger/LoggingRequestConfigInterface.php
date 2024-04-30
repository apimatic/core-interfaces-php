<?php

namespace CoreInterfaces\Core\Logger;

interface LoggingRequestConfigInterface extends LoggingResponseConfigInterface
{
    /**
     * Indicates whether to include query parameters in the logged path.
     *
     * @return bool
     */
    public function shouldIncludeQueryInPath(): bool;
}
