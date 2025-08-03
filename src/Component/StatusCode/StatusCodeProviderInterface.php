<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\StatusCode;

use Boson\Contracts\Http\Component\StatusCodeInterface;

/**
 * @phpstan-type OutStatusCodeType StatusCodeInterface
 */
interface StatusCodeProviderInterface
{
    /**
     * Gets status code integer value of the instance.
     *
     * @var OutStatusCodeType
     */
    public StatusCodeInterface $status {
        get;
    }
}
