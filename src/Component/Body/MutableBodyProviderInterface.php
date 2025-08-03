<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Body;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Mutable implementation of {@see BodyProviderInterface}.
 *
 * Implementations of this interface DO NOT guarantee that the
 * HTTP body in this object will not be modified by anyone.
 *
 * @phpstan-import-type InBodyType from EvolvableBodyProviderInterface
 * @phpstan-import-type OutBodyType from BodyProviderInterface
 *
 * @phpstan-type OutMutableBodyType OutBodyType
 */
interface MutableBodyProviderInterface extends BodyProviderInterface
{
    /**
     * Get behaviour similar to {@see BodyProviderInterface::$body}.
     *
     * @var OutMutableBodyType
     */
    public string $body {
        get;
        /**
         * Allows to set (mutate) any string or string-like body value.
         *
         * @param InBodyType $body A new body value
         *
         * @throws InvalidComponentArgumentExceptionInterface in case of new
         *         passed body value is invalid
         */
        set(\Stringable|string $body);
    }
}
