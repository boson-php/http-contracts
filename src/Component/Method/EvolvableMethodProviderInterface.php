<?php

declare(strict_types=1);

namespace Boson\Contracts\Http\Component\Method;

use Boson\Contracts\Http\Exception\InvalidComponentArgumentExceptionInterface;

/**
 * Evolvable implementation of {@see MethodProviderInterface}.
 *
 * Allows to modify HTTP method value using instance value as a prototype
 * without changing the object itself.
 *
 * @phpstan-type InMethodType non-empty-string|\Stringable
 */
interface EvolvableMethodProviderInterface extends MethodProviderInterface
{
    /**
     * Return an instance with the provided HTTP method
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * changed HTTP method
     *
     * @param InMethodType $method A new HTTP method value
     *
     * @throws InvalidComponentArgumentExceptionInterface in case of new
     *         HTTP method is invalid
     */
    public function withMethod(string|\Stringable $method): self;
}
