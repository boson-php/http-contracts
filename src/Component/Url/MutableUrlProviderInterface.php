<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Url;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;
use Boson\Contracts\Uri\UriInterface;

/**
 * Mutable implementation of {@see StatusCodeProviderInterface}.
 *
 * Implementations of this interface DO NOT guarantee that the
 * HTTP URL in this object will not be modified by anyone.
 *
 * @phpstan-import-type InUrlType from EvolvableUrlProviderInterface
 * @phpstan-import-type OutUrlType from UrlProviderInterface
 *
 * @phpstan-type OutMutableUrlType OutUrlType
 */
interface MutableUrlProviderInterface extends UrlProviderInterface
{
    /**
     * Get behaviour similar to {@see UrlProviderInterface::$url}.
     *
     * @var OutMutableUrlType
     */
    public UriInterface $url {
        get;
        /**
         * Allows to set any non-normalized URL/URI string or stringable object
         *
         * @param InUrlType $url A new HTTP URL value
         *
         * @throws InvalidComponentArgumentExceptionInterface in case of new
         *         HTTP URL is invalid
         */
        set(string|\Stringable $url);
    }
}
