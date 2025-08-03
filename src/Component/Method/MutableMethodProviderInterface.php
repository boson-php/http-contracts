<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Method;

use Boson\Contracts\Http\Component\MethodInterface;
use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Mutable implementation of {@see MethodProviderInterface}.
 *
 * Implementations of this interface DO NOT guarantee that the
 * HTTP method in this object will not be modified by anyone.
 *
 * @phpstan-import-type InMethodType from EvolvableMethodProviderInterface
 * @phpstan-import-type OutMethodType from MethodProviderInterface
 *
 * @phpstan-type OutMutableMethodType OutMethodType
 */
interface MutableMethodProviderInterface extends MethodProviderInterface
{
    /**
     * Get behaviour similar to {@see MethodProviderInterface::$method}.
     *
     * @var OutMutableMethodType
     */
    public MethodInterface $method {
        get;
        /**
         * Allows to set empty or non-normalized HTTP method name
         * string or stringable object.
         *
         * @param InMethodType $method A new HTTP method value
         *
         * @throws InvalidComponentArgumentExceptionInterface in case of new
         *         HTTP method is invalid
         */
        set(string|\Stringable $method);
    }
}
