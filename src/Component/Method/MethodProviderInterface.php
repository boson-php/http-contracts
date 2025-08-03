<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Method;

use Boson\Contracts\Http\Component\MethodInterface;

/**
 * @phpstan-type OutMethodType MethodInterface
 */
interface MethodProviderInterface
{
    /**
     * Gets HTTP method of this instance.
     *
     * @link https://httpwg.org/specs/rfc9110.html#method.definitions
     *
     * @var OutMethodType
     */
    public MethodInterface $method {
        get;
    }
}
