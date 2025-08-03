<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Headers;

use Boson\Contracts\Http\Component\MutableHeadersInterface;
use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Mutable implementation of {@see HeadersProviderInterface}.
 *
 * Implementations of this interface DO NOT guarantee that the
 * HTTP headers in this object will not be modified by anyone.
 *
 * @phpstan-import-type InHeadersType from EvolvableHeadersProviderInterface
 * @phpstan-import-type OutHeadersType from HeadersProviderInterface
 *
 * @phpstan-type OutMutableHeadersType OutHeadersType&MutableHeadersInterface
 */
interface MutableHeadersProviderInterface extends HeadersProviderInterface
{
    /**
     * Get behaviour similar to {@see HeadersProviderInterface::$headers}, but
     * returns mutable headers list instance instead of immutable.
     *
     * @var OutMutableHeadersType
     */
    public MutableHeadersInterface $headers {
        get;
        /**
         * Allows to set any headers list, including immutable.
         *
         * @param InHeadersType $headers A new HTTP headers list
         *
         * @throws InvalidComponentArgumentExceptionInterface in case of passed
         *         headers list value is invalid or contain invalid headers
         */
        set(iterable $headers);
    }
}
