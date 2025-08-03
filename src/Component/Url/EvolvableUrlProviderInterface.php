<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Url;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Evolvable implementation of {@see UrlProviderInterface}.
 *
 * Allows to modify HTTP URL value using instance value as a prototype
 * without changing the object itself.
 *
 * @phpstan-type InUrlType string|\Stringable
 */
interface EvolvableUrlProviderInterface extends UrlProviderInterface
{
    /**
     * Return an instance with the provided HTTP URL
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * changed HTTP URL
     *
     * @param InUrlType $url A new HTTP URL value
     *
     * @throws InvalidComponentArgumentExceptionInterface in case of new
     *         HTTP URL is invalid
     */
    public function withUrl(string|\Stringable $url): self;
}
